<?php
namespace UserApi\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class DIStatusApiController extends AbstractRestfulController
{
    public function getList()
    {
	  	header('Access-Control-Allow-Origin: *');
    }
   public function get($country)
    {
		header('Access-Control-Allow-Origin: *');
		 $infoObject = array(
		    "interstitialOnLaunch" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
		    "bannerOnTop"=> "false",
		    "serverTimeOurDuration"=> "90000",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "false",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    "noData"=> "There is some technical issues, please try again",
		    "siteDownMessage"=> "Server is down due to heavy traffic. Apologies for the inconvenience caused, please try after 2 hours.",
		    "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.rtocodes",
		    "ourApp1icon"=> "http://aapthitech.com/ea/countryswebservices/public/uploads/rtocodes.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.phonetracker",
		    "ourApp2icon"=> "http://aapthitech.com/ea/countryswebservices/public/uploads/phonefinder_128.png",
		    "usedCaptcha"=> "false",
		  );
		return new JsonModel(array(
			'info'	  => $infoObject
		));
    }
    public function create($data)
    {
		header('Access-Control-Allow-Origin: *');
		
		$dlno = $data['dlno'];
		$state = substr($dlno, 0, 2); 
		
		function get_string_between($string, $start, $end){
			$string = ' ' . $string;
			$ini = strpos($string, $start);
			if ($ini == 0) return '';
			$ini += strlen($start);
			$len = strpos($string, $end, $ini) - $ini;
			return substr($string, $ini, $len);
		} 
		
		$ch = curl_init();
				
		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, 'https://sarathi.nic.in:8443/nrportal/sarathi/DlDetRequest.jsp'); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_REFERER, "https://sarathi.nic.in:8443/nrportal/sarathi/HomePage.jsp");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_TIMEOUT, 80); //timeout in seconds
		
		$result = curl_exec($ch);   		
		//close connection
		curl_close($ch);    
		
		$token = urlencode(get_string_between($result, 'id="javax.faces.ViewState" value="', '" />'));
		 
		 
		$session = urlencode(get_string_between($result, '<form id="dlform" name="dlform" method="post" action="/nrportal/sarathi/DlDetRequest.jsp;jsessionid=', '" class="frmlyout" enctype="application/x-www-form-urlencoded">')); 
		 
		
		$url = 'https://sarathi.nic.in:8443/nrportal/sarathi/DlDetRequest.jsp;jsessionid='.$session; 
		
		$fields = array(
			'dlform' => 'dlform',  
			'dlform:stateLevel' => '', 
			'dlform:DLNumber' => $dlno, 
			'dlform:sub' => 'SUBMIT',  
			'javax.faces.ViewState' => $token
		); 
		
		$fields_string = '';
		//url-ify the data for the POST
		foreach($fields as $key=>$value)
		{
			$fields_string .= $key.'='.$value.'&'; 
		}
		$fields_string = rtrim($fields_string, '&');
		
		//open connection
		$ch = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_REFERER, "https://sarathi.nic.in:8443/nrportal/sarathi/HomePage.jsp");
		curl_setopt($ch, CURLOPT_TIMEOUT, 80); //timeout in seconds
		//execute post
		$result = curl_exec($ch); 
		curl_close($ch);     
		
		$owner = "Owner name is confidential.";   
		preg_match("'Status :</label></td>(.*?)</td>'si", $result, $match1);	
		$status = trim(strip_tags($match1[1]));    
		preg_match("'Date of Issue :</label></td>(.*?)</td>'si", $result, $match2);	
		$dateofissue = trim(strip_tags($match2[1]));  
		preg_match("'Last Transacted at :</label></td>(.*?)</td>'si", $result, $match4);	
		$transactat = trim(strip_tags($match4[1]));  
		preg_match("'From :</label></td>(.*?)</td>'si", $result, $match5);	
		$nontransfortfrom = trim(strip_tags($match5[1]));  
		preg_match("'To :</label></td>(.*?)</td>'si", $result, $match6);	
		$nontransfortto = trim(strip_tags($match6[1]));  		 
		preg_match("'DL Validity ::</label></th></tr>(.*?)COV Details :: </label></th></tr>'si", $result, $match7);	
		$dlvalidity = trim($match7[1]);   
		$dlvalidity = substr($dlvalidity, 26, (strlen($dlvalidity) - 133)); 
		
		
		preg_match("'COV Details :: </label></th></tr>(.*?)Badge Details ::</label></th></tr>'si", $result, $match8);	
		$covdetails = trim($match8[1]);  
		$covdetails = substr($covdetails, 26, (strlen($covdetails) - 133)); 
		
		if($dateofissue == "") {
			$msg = "nodata";
		} else {
			$msg = "success";
		}
		
		$data = array("msg"=>$msg ,"status"=>$status, "dlno"=>$dlno, "owner"=>$owner, "dateofissue"=>$dateofissue, "transactat"=>$transactat, "nontransfortfrom"=>$nontransfortfrom, "nontransfortto"=>$nontransfortto, "dlvalidity"=>$dlvalidity, "covdetails"=>$covdetails);
		
		return new JsonModel(array(
			'details'	  => $data,
		));
		 
	}
	public function options(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
		die;
	}
    public function update($id, $data)
    {
        header('Access-Control-Allow-Origin: *');
    }
    public function delete($id)
    {
       header('Access-Control-Allow-Origin: *');
    }
}