<?php
namespace UserApi\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class GetVehicleApiController extends AbstractRestfulController
{
    public function getList()
    {
	  	header('Access-Control-Allow-Origin: *'); 
			
		function ping($host, $port, $timeout) { 
		  $tB = microtime(true); 
		  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout);  
		  if (!$fP) { return "down"; } 
		  $tA = microtime(true); 
		  return round((($tA - $tB) * 1000), 0)." ms"; 
		}

		//Echoing it will display the ping if the host is up, if not it'll say "down".
		return new JsonModel(array(
			'details'	  => $data,
		));
		
    }
   public function get($country)
    {
		header('Access-Control-Allow-Origin: *'); 
    }
    public function create($data)
    {
		header('Access-Control-Allow-Origin: *');
		
		function get_string_between($string, $start, $end){
			$string = ' ' . $string;
			$ini = strpos($string, $start);
			if ($ini == 0) return '';
			$ini += strlen($start);
			$len = strpos($string, $end, $ini) - $ini;
			return substr($string, $ini, $len);
		} 	
		
		$msg = "Registration does not Exist";
		
		$msg        = "nodata";		
		if(isset($data['v_email_address']) && $data['v_email_address']!=""){
			$vno     = $data['v_email_address'];
		}else{
			$vno     = "";
		}
		if(isset($data['mobile']) && $data['mobile']!=""){
			$mobile     = $data['mobile'];
		}else{
			$mobile     = "No";
		}
		if(isset($data['getfromdb']) && $data['getfromdb']!=""){
			$getfromdb  = $data['getfromdb'];
		}else{
			$getfromdb  = "";
		}
		if(isset($data['captcha']) && $data['captcha']!=""){
			$captcha  = $data['captcha'];
		}else{
			$captcha  = "";
		}
		if(isset($data['token']) && $data['token']!=""){
			$token  = $data['token'];
		}else{
			$token  = "";
		}
		if(isset($data['session']) && $data['session']!=""){
			$session  = $data['session'];
		}else{
			$session  = "";
		}
		if(isset($data['field_no1']) && $data['field_no1']!=""){
			$field_no1  = $data['field_no1'];
		}else{
			$field_no1  = "";
		}
		if(isset($data['field_no2']) && $data['field_no2']!=""){
			$field_no2  = $data['field_no2'];
		}else{
			$field_no2  = "";
		} 
		
		$tf_reg_no1 = substr($vno, 0, strlen($vno)-4);
		$tf_reg_no2 = substr($vno, strlen($vno)-4, strlen($vno)); 
		
		$reg_number = trim($tf_reg_no1).trim($tf_reg_no2);
		$reg_number = str_replace(" ", "", $reg_number);
		
		$ipadd = $_SERVER['REMOTE_ADDR'];
		//$insertedValue = $this->insertIpaddr($ipadd); 
		
		//if($getfromdb =="yes") { 
		if($data['extra1'] == '11' && $data['extra2'] == '12') { 		
			$reg_no = "";
			$burl = "http://blockopedia.com/rtoinfo.php?vehicle_no=$vno"; 	 
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $burl);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
			curl_setopt($curl, CURLOPT_TIMEOUT, 100); //timeout in seconds
			$result = curl_exec($curl); 
			curl_close();
			$details = json_decode($result);
			
			if($details->msg != 'nodata') {
				$msg = "dbsuccess";
				$reg_no = $details->reg_no; 
				$reg_at = $details->reg_at; 
				$reg_date = $details->reg_date; 
				$chasi_no = $details->chasi_no; 
				$engine_no = $details->engine_no; 
				$owner_name = $details->owner_name; 
				$vehicle_class = $details->vehicle_class; 
				$fuel_type = $details->fuel_type; 
				$maker_model = $details->maker_model; 
				$mobile = $details->mobile; 
				
				$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
				
				return new JsonModel(array(
					'details'	  => $data,
				));
			} else {
				//$msg = "Registration does not Exist"; 
				$msg = "dbfail"; 
				
				$reg_no = $reg_number; 
				$reg_at = "N/A"; 
				$reg_date = "N/A";  
				$chasi_no = "N/A"; 
				$engine_no = "N/A";  
				$owner_name = "N/A"; 
				$vehicle_class = "N/A"; 
				$fuel_type = "N/A"; 
				$maker_model = "N/A"; 
				$mobile = ""; 
				
				$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);

				return new JsonModel(array(
					'details'	  => $data,
				));
				
			}
			
		} else {
			//$msg = "Registration does not Exist"; 
			$msg = "dbsuccess"; 
			
			$reg_no = $reg_number; 
			$reg_at = "Download Suitableapps RTO vehicle information app to know owner name"; 
			$reg_date = "Download Suitableapps RTO vehicle information app to know registration date";  
			$chasi_no = "N/A"; 
			$engine_no = "N/A";  
			$owner_name = "Download Suitableapps RTO vehicle information app to know owner name"; 
			$vehicle_class = "N/A"; 
			$fuel_type = "N/A"; 
			$maker_model = "N/A"; 
			$mobile = ""; 
			
			$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);

			return new JsonModel(array(
				'details'	  => $data,
			));
		}		
		// End New code
	    exit;
		
		
		if($getfromdb =="yes") { 
			$reg_no = "";
			// $resultSet = $this->getViechInfo($reg_number);
			// if(empty($resultSet)) {
				// $burl = 'http://chinanovation.com/rtopull.php?reg_no='.$reg_number; 	 
				// $curl = curl_init();
				// curl_setopt($curl, CURLOPT_URL, $burl);
				// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
				// $result = curl_exec($curl); 
				// curl_close();
			// }
			// $dbquery = 'yes';
			$resultSet = $this->getViechInfo($reg_number);
			if(isset($resultSet) && !empty($resultSet)){
			// if($dbquery != 'yes'){
				$msg = "dbsuccess";
				$noofview      = $resultSet['noofviews'];
				$reg_at        = $resultSet['regrto'];
				$reg_no        = $resultSet['regno'];
				$reg_date      = $resultSet['regdate'];
				$chasi_no      = $resultSet['chasis'];
				$engine_no     = $resultSet['engine'];
				$owner_name    = $resultSet['owner'];
				$vehicle_class = $resultSet['class'];
				$fuel_type     = $resultSet['vtype'];
				$maker_model   = $resultSet['model'];
				
				$chasi_no = substr($chasi_no, 0, -5) . str_repeat('X', 5);
				$engine_no = substr($engine_no, 0, -5) . str_repeat('X', 5);
						
				$mobile        = "";
				$noofview      = $noofview +1;
				$updateViewCount = $this->updatenoofviews($noofview,$reg_no);
				$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
				return new JsonModel(array(
					'details'	  => $data,
				));
			}else {
				
				if($reg_no == "") {
					$state = strtoupper(substr($reg_number, 0, 2));  		
					
					if($state == "AP") {
						$ch = curl_init();
						
						//set the url, number of POST vars, POST data
						curl_setopt($ch,CURLOPT_URL, 'https://aptransport.in/APCFSTONLINE/Reports/VehicleRegistrationSearch.aspx'); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
						curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout in seconds

						//execute post
						$result = curl_exec($ch);   
								
						//close connection
						curl_close($ch);    

						$viewstate = get_string_between($result, '__VIEWSTATE" value="', '" />');
						$prevstate = get_string_between($result, '__PREVIOUSPAGE" value="', '" />');
						 
						
						$url = 'https://aptransport.in/APCFSTONLINE/Reports/VehicleRegistrationSearch.aspx'; 
						
						$fields = array(
							'ctl00$OnlineContent$ddlInput' => 'R',
							'ctl00$OnlineContent$txtInput' => $reg_number,
							'ctl00$OnlineContent$btnGetData' => 'Get%20Data',
							'__VIEWSTATE' => $viewstate,
							'__PREVIOUSPAGE' => $prevstate 
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
						//execute post
						$result = curl_exec($ch);  
						curl_close($ch);  
						
						preg_match("'<td id=\"ctl00_OnlineContent_tdRegnNo\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match1);	
						$reg_no = trim(strip_tags($match1[1])); 
						
						preg_match("'<td id=\"ctl00_OnlineContent_tdAuthority\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match9);	
						
						$reg_at = 'Registration Authority '.trim(strip_tags($match9[1])); 
						preg_match("'<td id=\"ctl00_OnlineContent_tdDOR\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match2);	
						$reg_date = trim(strip_tags($match2[1]));
						preg_match("'<td id=\"ctl00_OnlineContent_tdChassisno\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match3);	
						$chasi_no = trim(strip_tags($match3[1]));
						preg_match("'<td id=\"ctl00_OnlineContent_tdEngNo\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match4); 
						$engine_no = trim(strip_tags($match4[1])); 
						preg_match("'<td id=\"ctl00_OnlineContent_tdOwner\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match5);	
						$owner_name = trim(strip_tags($match5[1]));
						preg_match("'<td id=\"ctl00_OnlineContent_tdVehClass\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match6);	
						$vehicle_class = trim(strip_tags($match6[1]));
						preg_match("'<td id=\"ctl00_OnlineContent_tdFuelType\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match7);	
						$fuel_type = trim(strip_tags($match7[1]));
						preg_match("'<td id=\"ctl00_OnlineContent_tdMkrClass\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match8);	
						$maker_model = trim(strip_tags($match8[1]));  
						
						$chasi_no = substr($chasi_no, 0, -5) . str_repeat('X', 5);
						$engine_no = substr($engine_no, 0, -5) . str_repeat('X', 5);
						
						if($reg_no !="") {
							$msg = "dbsuccess";
							$rtoInfo = array(
								'reg_no'        => $reg_no,  
								'reg_at' 	    => $reg_at, 
								'reg_date' 	    => $reg_date,
								'chasi_no'      => $chasi_no,
								'engine_no'     => $engine_no,
								'owner_name'    => $owner_name, 
								'vehicle_class' => $vehicle_class,
								'fuel_type' 	=> $fuel_type,
								'maker_model' 	=> $maker_model,
								'mobile' 	    => $mobile,
							);
							$insertedvalue = $this->insertRtoData($rtoInfo);
			
							$chasi_no = substr($chasi_no, 0, -5) . str_repeat('X', 5);
							$engine_no = substr($engine_no, 0, -5) . str_repeat('X', 5);
							
							$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
							
							return new JsonModel(array(
								'details'	  => $data,
							));
						
						} else {
						    //$msg = "Registration does not Exist"; 
							$msg = "dbfail"; 
							
							$reg_no = $reg_number; 
							$reg_at = "N/A"; 
							$reg_date = "N/A";  
							$chasi_no = "N/A"; 
							$engine_no = "N/A";  
							$owner_name = "N/A"; 
							$vehicle_class = "N/A"; 
							$fuel_type = "N/A"; 
							$maker_model = "N/A"; 
							$mobile = ""; 
							
							$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);

							return new JsonModel(array(
								'details'	  => $data,
							));
							
						}				
						
						
						
					}
					else {
							//$msg = "Registration does not Exist"; 
							$msg = "dbfail";  
							
							$reg_no = $reg_number; 
							$reg_at = "N/A"; 
							$reg_date = "N/A";  
							$chasi_no = "N/A"; 
							$engine_no = "N/A";  
							$owner_name = "N/A"; 
							$vehicle_class = "N/A"; 
							$fuel_type = "N/A"; 
							$maker_model = "N/A"; 
							$mobile = ""; 
							
							$rtoInfo = array(
								'reg_number'  => $reg_no,  
							);
							$insertedvalue = $this->insertRtomissData($rtoInfo);
							
							$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);

							return new JsonModel(array(
								'details'	  => $data,
							));
							
						}
								
				}
				
			$state = strtoupper(substr($reg_number, 0, 2));  
			/*
			if($reg_no == "") { 
					$data = array('reg_no'=>$reg_number,'token'=>'d803e435200498ba04c3c1354f29ebf7');
					$data_json = json_encode($data);

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, "http://echallanweb.gov.in/api/get-rc-details");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);//Setting post data as xml
					$headers = array(
						'Auth-Token:MTI4MTY0Y2ZkZTkwOWFhMmNlODY3NmVkZDdkMTM2M2M6QUV5ZDB0NFZVeUYyY3ZuMGFNUDhTZz09',
						'Content-Type:application/json',
						'Accept:application/json'
					);

					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					$result = curl_exec($ch);
					$data = json_decode($result)->result; 	
					$inputText = $data;
					$inputKey = "eECHALLAN@JSON$#";
					$blockSize = 128;
					$enc = decrp($inputText, $inputKey, $blockSize);
					$stautsMessage = trim(get_string_between($enc, '"stautsMessage":"', '","rc_regn_no"'));
					
					
					if($stautsMessage == "OK") {
						
						$reg_no = $reg_number; 
						//$reg_at_details = explode('in', $details['0']); 
						$reg_at = "Registration Authority: ".get_string_between($enc, '"rc_registered_at":"', '","rc_status_as_on"'); 
						$reg_date = get_string_between($enc, '"rc_regn_dt":"', '","rc_owner_sr"');
						//$chasi_details = explode(':', $details['1']); 
						$chasi_no = get_string_between($enc, '"rc_chasi_no":"', '","rc_eng_no"');
						$engine_no = get_string_between($enc, '"rc_eng_no":"', '","rc_maker_desc"');
						$owner_name = get_string_between($enc, '"rc_owner_name":"', '","rc_f_name"'); 
						//$vehicle_details = explode(':', $details['2']); 
						$vehicle_class = get_string_between($enc, '"rc_vh_class_desc":"', '","rc_chasi_no"'); 
						$fuel_type = get_string_between($enc, '"rc_fuel_desc":"', '","rc_color"'); ;
						$maker_model = get_string_between($enc, '"rc_maker_model":"', '","rc_body_type_desc"'); ;
						
						//New Data Captured 
						
						$rc_f_name = get_string_between($enc, '"rc_f_name":"', '","rc_present_address"');
						
						$rc_present_address = get_string_between($enc, '"rc_present_address":"', '","rc_permanent_address"');
						
						$rc_permanent_address = get_string_between($enc, '"rc_permanent_address":"', '","rc_vh_class_desc"'); 
						
						$rc_maker_desc = get_string_between($enc, '"rc_maker_desc":"', '","rc_maker_model"'); 
						
						$rc_body_type_desc = get_string_between($enc, '"rc_body_type_desc":"', '","rc_fuel_desc"'); 
						
						$rc_color = get_string_between($enc, '"rc_color":"', '","rc_norms_desc"'); 
						
						$rc_owner_sr = get_string_between($enc, '"rc_owner_sr":"', '","rc_owner_name"'); 
						
						$rc_norms_desc = get_string_between($enc, '"rc_norms_desc":"', '","rc_fit_upto"'); 
						
						$rc_fit_upto = get_string_between($enc, '"rc_fit_upto":"', '","rc_financer"'); 
						
						$rc_financer = get_string_between($enc, '"rc_financer":"', '","rc_insurance_comp"'); 
						
						$rc_insurance_comp = get_string_between($enc, '"rc_insurance_comp":"', '","rc_insurance_policy_no"'); 
						
						$rc_insurance_policy_no = get_string_between($enc, '"rc_insurance_policy_no":"', '","rc_insurance_upto"'); 
						
						$rc_insurance_upto = get_string_between($enc, '"rc_insurance_upto":"', '","rc_manu_month_yr"'); 
						
						$rc_manu_month_yr = get_string_between($enc, '"rc_manu_month_yr":"', '","rc_unld_wt"'); 
						
						$rc_unld_wt = get_string_between($enc, '"rc_unld_wt":"', '","rc_gvw"'); 
						
						$rc_gvw = get_string_between($enc, '"rc_gvw":"', '","rc_no_cyl"'); 
						
						$rc_no_cyl = get_string_between($enc, '"rc_no_cyl":"', '","rc_cubic_cap"'); 
						
						$rc_cubic_cap = get_string_between($enc, '"rc_cubic_cap":"', '","rc_seat_cap"'); 
						
						$rc_seat_cap = get_string_between($enc, '"rc_seat_cap":"', '","rc_sleeper_cap"'); 
						
						$rc_sleeper_cap = get_string_between($enc, '"rc_sleeper_cap":"', '","rc_stand_cap"'); 
						
						$rc_stand_cap = get_string_between($enc, '"rc_stand_cap":"', '","rc_wheelbase"'); 
						
						$rc_wheelbase = get_string_between($enc, '"rc_wheelbase":"', '","rc_registered_at"'); 

						$rc_status_as_on = get_string_between($enc, '"rc_status_as_on":"', '"}'); 

						if($rc_present_address!=""){
							$rc_present_address = str_replace(" \ ", "", $rc_present_address);
						}
						if($rc_permanent_address!=""){
							$rc_permanent_address = str_replace(" \ ", "", $rc_permanent_address);
						}
						if($rc_insurance_policy_no!=""){
							$rc_insurance_policy_no = str_replace(" \ ", "", $rc_insurance_policy_no);
						}
						if($rc_manu_month_yr!=""){
							$rc_manu_month_yr = str_replace(" \ ", "", $rc_manu_month_yr);
						}
						
						$msg = "dbsuccess";
						
						$rtoInfo = array(
								'reg_no'        		=> $reg_no,  
								'reg_at' 	    		=> $reg_at, 
								'reg_date' 	    		=> $reg_date,
								'chasi_no'      		=> $chasi_no,
								'engine_no'     		=> $engine_no,
								'owner_name'    		=> $owner_name, 
								'vehicle_class' 		=> $vehicle_class,
								'fuel_type' 			=> $fuel_type,
								'maker_model' 			=> $maker_model,
								'mobile' 	    		=> $mobile,
								'rc_f_name' 			=> $rc_f_name,
								'rc_present_address' 	=> $rc_present_address,
								'rc_permanent_address' 	=> $rc_permanent_address,
								'rc_maker_desc' 		=> $rc_maker_desc,
								'rc_body_type_desc' 	=> $rc_body_type_desc,
								'rc_color' 				=> $rc_color,
								'rc_owner_sr' 			=> $rc_owner_sr,
								'rc_norms_desc' 		=> $rc_norms_desc,
								'rc_fit_upto' 			=> $rc_fit_upto,
								'rc_financer' 			=> $rc_financer,
								'rc_insurance_comp' 	=> $rc_insurance_comp,
								'rc_insurance_policy_no'=> $rc_insurance_policy_no,
								'rc_insurance_upto' 	=> $rc_insurance_upto,
								'rc_manu_month_yr' 		=> $rc_manu_month_yr,
								'rc_unld_wt' 			=> $rc_unld_wt,
								'rc_gvw' 				=> $rc_gvw,
								'rc_cubic_cap' 			=> $rc_cubic_cap,
								'rc_seat_cap' 			=> $rc_seat_cap,
								'rc_sleeper_cap' 		=> $rc_sleeper_cap,
								'rc_stand_cap' 			=> $rc_stand_cap,
								'rc_wheelbase' 			=> $rc_wheelbase,
								'rc_status_as_on' 		=> $rc_status_as_on,
							);
						 
						 
						 
						$insertedvalue = $this->insertRtoData($rtoInfo);
							
						$chasi_no = substr($chasi_no, 0, -5) . str_repeat('X', 5);
						$engine_no = substr($engine_no, 0, -5) . str_repeat('X', 5);
						if($ipadd !="122.161.63.64") {
							
							// $msg = "dbsuccess";
							// $reg_no = $reg_number; 
							// $reg_no = $reg_no.rand(0,100);
							// $reg_at = $reg_no; 
							// $reg_date = $reg_no; 
							// $chasi_no = $reg_no; 
							// $engine_no = $reg_no;  
							// $owner_name = "".$reg_no ; 
							// $vehicle_class = $reg_no; 
							// $fuel_type = $reg_no; 
							// $maker_model = "Thanks for using our app. Dont forget to write review."; 
							// $mobile = $reg_no;
							
							
							// $msg = "dbfail"; 						
							// $reg_no = $reg_number; 
							// $reg_at = "N/A"; 
							// $reg_date = "N/A";  
							// $chasi_no = "N/A"; 
							// $engine_no = "N/A";  
							// $owner_name = "N/A"; 
							// $vehicle_class = "N/A"; 
							// $fuel_type = "N/A"; 
							// $maker_model = "N/A"; 
							// $mobile = ""; 
							
							//mysql_close($conn);
							$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
						} else {
							//$msg = "Registration does not Exist"; 						
							$msg = "dbfail"; 		
							$reg_no = $reg_number; 
							$reg_at = "N/A"; 
							$reg_date = "N/A";  
							$chasi_no = "N/A"; 
							$engine_no = "N/A";  
							$owner_name = "N/A"; 
							$vehicle_class = "N/A"; 
							$fuel_type = "N/A"; 
							$maker_model = "N/A"; 
							$mobile = ""; 
							$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
						}
						return new JsonModel(array(
							'details'	  => $data,
						));
					} 
					//close connection
					curl_close($ch);
				}
*/				
				/*
				if($reg_no == "") {
					$msg = "dbsuccess";
					$ch = curl_init();
		
					//set the url, number of POST vars, POST data
					curl_setopt($ch,CURLOPT_URL, 'https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp'); 
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
					curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout in seconds
					
					$result = curl_exec($ch);   		
					//close connection
					curl_close($ch);    
					
					$token = urlencode(get_string_between($result, 'id="javax.faces.ViewState" value="', '" />'));  
					 
					
					$url = 'https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp'; 					
				 
					$fields = array(
						'vehiclesearchstatus' => 'vehiclesearchstatus', 
						'vehiclesearchstatus:j_id_jsp_1162919312_2' => '', 
						'vehiclesearchstatus:j_id_jsp_1162919312_10' => 'j_id_jsp_1162919312_11', 
						'vehiclesearchstatus:regn_no1_exact' => $tf_reg_no1,
						'vehiclesearchstatus:regn_no2_exact' => $tf_reg_no2, 
						'vehiclesearchstatus:j_id_jsp_1162919312_21' => 'Search+Vehicle',  
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
					curl_setopt($ch, CURLOPT_COOKIE, "JSESSIONID=2B500B0A239D6BC58D136DE61DBD3167.worker3");

					//execute post
					$result = curl_exec($ch);
					$data = get_string_between($result, '<span id="vehiclesearchstatus:msg" style="color: red;font-size: small;">', '<br/></span><br/>');
					
					$details = explode('<br/>', $data); 
					
					if(count($details) > 2 ) {
						$reg_no = $reg_number; 
						$reg_at_details = explode('in', $details['0']); 
						$reg_at = 'Registration Authority '.trim($reg_at_details['1']);  
						$reg_date = "N/A"; 
						$chasi_details = explode(':', $details['1']); 
						$chasi_no = trim($chasi_details['1']); 
						$engine_no = "N/A";  
						$owner_name = "N/A"; 
						$vehicle_details = explode(':', $details['2']); 
						$vehicle_class = trim($vehicle_details['1']); 
						$fuel_type = "N/A"; 	
						$maker_model = "N/A"; 	 	
						
						$sql = mysql_query("INSERT INTO rtodata (`regno`,`regrto`,`owner`,`regdate`,`model`,`class`,`vtype`,`chasis`,`engine`,`noofviews`,`appname`, `createddate`) 
			VALUES ('$reg_no','$reg_at','$owner_name','$reg_date','$maker_model','$vehicle_class','$fuel_type','$chasi_no','$engine_no',1, 'AP Site', NOW())");
			
					} else {
						$reg_no = $reg_number; 
						$reg_at_details = "N/A"; 
						$reg_at = "Your vehicle registration details doesn't exists in the database. Please send your vehicle number to suitableapps@gmail.com, we will verify and get back to you as soon as possible."; 
						$reg_date = "N/A"; 
						$chasi_details = "N/A"; 
						$chasi_no = "N/A"; 
						$engine_no = "N/A";  
						$owner_name = "N/A"; 
						$vehicle_details ="N/A"; 
						$vehicle_class = "N/A"; 
						$fuel_type = "N/A"; 	
						$maker_model = "N/A"; 	
						
						$sql = mysql_query("INSERT INTO rtomissdata (`vehicleno`,`appname`, `phone`, `createddate`) VALUES ('$reg_number', 'Hangover RTO', '$mobile', NOW())");
					}		
					
					$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
					
					return new JsonModel(array(
						'details'	  => $data,
					)); 
				}
				*/
				
				$msg = "dbfail";
				
				// API call to return session, token, field no and captcha 
				
				$ch = curl_init();
	
				//set the url, number of POST vars, POST data
				curl_setopt($ch, CURLOPT_URL, 'https://parivahan.gov.in/rcdlstatus/?pur_cd=102'); 
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout in seconds
				
				$result = curl_exec($ch);   
				$result = str_replace("/rcdlstatus/vahan/","https://parivahan.gov.in/rcdlstatus/vahan/",$result); 
				$result = str_replace("/rcdlstatus/DispplayCaptcha","https://parivahan.gov.in/rcdlstatus/DispplayCaptcha",$result); 
						
				//close connection
				curl_close($ch);    
				
				$session = get_string_between($result, 'action="https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml;jsessionid=', '" enctype="application/x-www-form-urlencoded">');  
				
				$token = urlencode(get_string_between($result, 'id="j_id1:javax.faces.ViewState:0" value="', '" autocomplete="off"')); 
				
				/*
				$captcha = get_string_between($result, '<img id="form_rcdl', 'alt="" />');
				$captcha = '<img id="form_rcdl'.$captcha.'alt="" />';
				
				$captchaSrc = get_string_between($captcha, 'src="', '" alt="" />');
				*/
			
				$captcha = "<img src='https://raw.githubusercontent.com/Samarasa/appicons/master/images/captcha.png' alt='' />";
				$captchaSrc = 'https://raw.githubusercontent.com/Samarasa/appicons/master/images/captcha.png';
			
				$field_no = get_string_between($result, '<button id="form_rcdl', '" name="form_rcdl');  
				$field_no = substr($field_no, 0, strlen($field_no));
				
				$data = array("msg"=>$msg,"session"=>$session,"token"=>$token, "field_no1"=>$field_no, "field_no2"=>$field_no, "tf_reg_no1"=>$tf_reg_no1, "tf_reg_no2"=>$tf_reg_no2, "mobile"=>$mobile, "captcha"=>$captcha, "captchaSrc"=>$captchaSrc); 
				
				return new JsonModel(array(
					'details'	  => $data,
				));

			}
		} 
		
		
		// Generate OTP with mobile and captcha
		if($mobile !="" && $captcha !="") {
				$conn = mysql_connect("54.70.144.42","AapthiAlbums","AapthiTech@1234");
				mysql_select_db("myquotes",$conn);
				
				$url = 'https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml;jsessionid='.$session; 
					
				$fields = array(
					'form_rcdl' => 'form_rcdl',
					'form_rcdl:tf_reg_no1' => $tf_reg_no1,
					'form_rcdl:tf_reg_no2' => $tf_reg_no2,
					'form_rcdl:tf_Mobile' => $mobile, 
					'form_rcdl'.$field_no1.':CaptchaID' => $captcha,
					'form_rcdl'.$field_no1 => "",
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
				curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout in seconds
				//execute post
				$result = curl_exec($ch); 
				$result = str_replace("/rcdlstatus/vahan/","https://parivahan.gov.in/rcdlstatus/vahan/",$result); 
				curl_close($ch);  
				$session = get_string_between($result, 'action="https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml;jsessionid=', '" enctype=');  
				
				$token = urlencode(get_string_between($result, 'id="j_id1:javax.faces.ViewState:0" value="', '" autocomplete="off"'));
				
				$field_no1 = get_string_between($result, '<div class="col-md-8"><button id="form_rcdl', '" name="form_rcdl'); 
				$field_no1 = substr($field_no1, 0, strlen($field_no1));
				
				$data = array("msg"=>'Samarasa',"session"=>$session,"token"=>$token, "field_no1"=>$field_no1, "field_no2"=>$field_no1, "tf_reg_no1"=>$tf_reg_no1, "tf_reg_no2"=>$tf_reg_no2, "mobile"=>$mobile, "captcha"=>$captcha);
				
				return new JsonModel(array(
					'details'	  => $data,
				)); 
		}  
	}
	function getViechInfo($regno){
		$vechInfo = "";
		$rtomissTable=$this->getServiceLocator()->get('Models\Model\RtomissDataFactory');		
		$rtodataTable=$this->getServiceLocator()->get('Models\Model\RtoDataFactory');
		$vechInfo = $rtodataTable->getvechinfo($regno);
		if(isset($vechInfo->id) && $vechInfo->id!=""){
			return $vechInfo; 	
		}else{
			return $vechInfo;			
		}	
	}
	function updatenoofviews($viewCount,$regno){
		$rtodataTable=$this->getServiceLocator()->get('Models\Model\RtoDataFactory');
		$updatevalue = $rtodataTable->updateViews($viewCount,$regno);
		return $updatevalue;
	}
	function insertRtoData($rtoinfo){
		$rtodataTable=$this->getServiceLocator()->get('Models\Model\RtoDataFactory');
		$generatedvalue = $rtodataTable->insertRtoData($rtoinfo);
		return $generatedvalue;
	}
	function insertIpaddr($ipaddr){
		$ipaddressesTable=$this->getServiceLocator()->get('Models\Model\IpaddressesFactory');
		$generatedvalue = $ipaddressesTable->insertIpaddr($ipaddr);
		return $generatedvalue;
	}
	function getCntForIpAccess(){
		$ipaddressesTable=$this->getServiceLocator()->get('Models\Model\IpaddressesFactory');
		$resultSet = $ipaddressesTable->getCountIpAccess();
		return $resultSet;
	}
	function insertRtomissData($rtomissinfo){
		$rtomissTable=$this->getServiceLocator()->get('Models\Model\RtomissDataFactory');
		$generatedvalue = $rtomissTable->insertRtomissData($rtomissinfo);
		return $generatedvalue;
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
		$msg        = "nodata";		
		$vno        = $data['v_email_address'];
		$mobile     = $data['mobile'];
		$getfromdb  = $data['getfromdb'];
		$captcha    = $data['captcha'];
		$token      = $data['token'];
		$session    = $data['session'];
		$field_no1  = $data['field_no1'];
		$field_no2  = $data['field_no2']; 
		
		$tf_reg_no1 = substr($vno, 0, strlen($vno)-4);
		$tf_reg_no2 = substr($vno, strlen($vno)-4, strlen($vno)); 
		
		$reg_number = trim($tf_reg_no1).trim($tf_reg_no2);
		$reg_number = str_replace(" ", "", $reg_number);
		
		$reg_no = "";		
		if($getfromdb =="yes") {
			$resultSet = $this->getViechInfo($regno);
			if(isset($resultSet) && !empty($resultSet)){
				$msg = "dbsuccess";
				$noofview      = $resultSet['noofviews'];
				$reg_at        = $resultSet['regrto'];
				$reg_no        = $resultSet['regno'];
				$reg_date      = $resultSet['regdate'];
				$chasi_no      = $resultSet['chasis'];
				$engine_no     = $resultSet['engine'];
				$owner_name    = $resultSet['owner'];
				$vehicle_class = $resultSet['class'];
				$fuel_type     = $resultSet['vtype'];
				$maker_model   = $resultSet['model'];
				$mobile        = "";
				$noofview      = $noofview +1;
				$updateViewCount = $this->updatenoofviews($noofview,$reg_no);
				$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
				return new JsonModel(array(
					'details'	  => $data,
				));
			}else{
				if($reg_no==""){
					$rtoInfo = array();
					$state = strtoupper(substr($reg_number, 0, 2));					
					if($reg_no !="") {
						if($state == "AP") {
							$ch = curl_init();						
							//set the url, number of POST vars, POST data
							curl_setopt($ch,CURLOPT_URL, 'https://aptransport.in/APCFSTONLINE/Reports/VehicleRegistrationSearch.aspx'); 
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
							curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
							curl_setopt($ch, CURLOPT_TIMEOUT, 80); //timeout in seconds

							//execute post
							$result = curl_exec($ch);   
									
							//close connection
							curl_close($ch);    

							$viewstate = get_string_between($result, '__VIEWSTATE" value="', '" />');
							$prevstate = get_string_between($result, '__PREVIOUSPAGE" value="', '" />');
							 
							
							$url = 'https://aptransport.in/APCFSTONLINE/Reports/VehicleRegistrationSearch.aspx'; 
							
							$fields = array(
								'ctl00$OnlineContent$ddlInput' => 'R',
								'ctl00$OnlineContent$txtInput' => $reg_number,
								'ctl00$OnlineContent$btnGetData' => 'Get%20Data',
								'__VIEWSTATE' => $viewstate,
								'__PREVIOUSPAGE' => $prevstate 
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
							//execute post
							$result = curl_exec($ch);  
							curl_close($ch);  
							
							preg_match("'<td id=\"ctl00_OnlineContent_tdRegnNo\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match1);	
							$reg_no = trim(strip_tags($match1[1])); 
							
							preg_match("'<td id=\"ctl00_OnlineContent_tdAuthority\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match9);	
							
							$reg_at = 'Registration Authority '.trim(strip_tags($match9[1])); 
							preg_match("'<td id=\"ctl00_OnlineContent_tdDOR\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match2);	
							$reg_date = trim(strip_tags($match2[1]));
							preg_match("'<td id=\"ctl00_OnlineContent_tdChassisno\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match3);	
							$chasi_no = trim(strip_tags($match3[1]));
							preg_match("'<td id=\"ctl00_OnlineContent_tdEngNo\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match4); 
							$engine_no = trim(strip_tags($match4[1])); 
							preg_match("'<td id=\"ctl00_OnlineContent_tdOwner\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match5);	
							$owner_name = trim(strip_tags($match5[1]));
							preg_match("'<td id=\"ctl00_OnlineContent_tdVehClass\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match6);	
							$vehicle_class = trim(strip_tags($match6[1]));
							preg_match("'<td id=\"ctl00_OnlineContent_tdFuelType\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match7);	
							$fuel_type = trim(strip_tags($match7[1]));
							preg_match("'<td id=\"ctl00_OnlineContent_tdMkrClass\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match8);	
							$maker_model = trim(strip_tags($match8[1]));  
							if($reg_no !="") {
								$rtoInfo = array(
									'reg_no'        => $reg_no,  
									'reg_at' 	    => $reg_at, 
									'reg_date' 	    => $reg_date,
									'chasi_no'      => $chasi_no,
									'engine_no'     => $engine_no,
									'owner_name'    => $owner_name, 
									'vehicle_class' => $vehicle_class,
									'fuel_type' 	=> $fuel_type,
									'maker_model' 	=> $maker_model,
									'mobile' 	    => $mobile,
								);
								$insertedvalue = $this->insertRtoData($rtoInfo);							
							}else{
								$msg = "dbsuccess";
								$reg_at = "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back on Monday, 20th Feb 2017.";
								$reg_date = "N/A";
								$chasi_no = "N/A";
								$engine_no = "N/A";
								$owner_name = "N/A";
								$vehicle_class = "N/A";
								$fuel_type = "N/A";
								$maker_model = "N/A";
								$mobile = "N/A";
								$reg_no = $reg_number;								
							}							
							$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
							return new JsonModel(array(
								'details'	  => $data,
							));
						} 
					}
				}
				$msg           = "dbsuccess";				
				$reg_at        = "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back on Monday, 27th Feb 2017.";
				$reg_date      = "N/A";
				$chasi_no      = "N/A";
				$engine_no     = "N/A";
				$owner_name    = "N/A";
				$vehicle_class = "N/A";
				$fuel_type     = "N/A";
				$maker_model   = "N/A";
				$mobile        = "N/A";
				$reg_no        = $reg_number;
				$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
				return new JsonModel(array(
					'details'	  => $data,
				));
			}
		}
		// Generate OTP with mobile and captcha
		if($mobile !="" && $captcha !="") {
				
			$url = 'https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml;jsessionid='.$session; 
				
			$fields = array(
				'form_rcdl' => 'form_rcdl',
				'form_rcdl:tf_reg_no1' => $tf_reg_no1,
				'form_rcdl:tf_reg_no2' => $tf_reg_no2,
				'form_rcdl:tf_Mobile' => $mobile, 
				'form_rcdl'.$field_no1.':CaptchaID' => "",
				'form_rcdl'.$field_no1 => "",
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
			curl_setopt($ch, CURLOPT_TIMEOUT, 80); //timeout in seconds
			//execute post
			$result = curl_exec($ch); 
			$result = str_replace("/rcdlstatus/vahan/","https://parivahan.gov.in/rcdlstatus/vahan/",$result); 
			curl_close($ch);  
			$session = get_string_between($result, 'action="https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml;jsessionid=', '" enctype=');  
			
			$token = urlencode(get_string_between($result, 'id="j_id1:javax.faces.ViewState:0" value="', '" autocomplete="off"'));
			
			$field_no1 = get_string_between($result, '<div class="col-md-8"><button id="form_rcdl', '" name="form_rcdl'); 
			$field_no1 = substr($field_no1, 0, strlen($field_no1));
			
			$data = array("msg"=>'Samarasa',"session"=>$session,"token"=>$token, "field_no1"=>$field_no1, "field_no2"=>$field_no1, "tf_reg_no1"=>$tf_reg_no1, "tf_reg_no2"=>$tf_reg_no2, "mobile"=>$mobile, "captcha"=>$captcha);
			
			return new JsonModel(array(
				'details'	  => $data,
			)); 
		} 
    }
    public function delete($id)
    {
       header('Access-Control-Allow-Origin: *');
    }
}