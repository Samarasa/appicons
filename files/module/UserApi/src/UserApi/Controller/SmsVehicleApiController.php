<?php
namespace UserApi\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class SmsVehicleApiController extends AbstractRestfulController
{
    public function getList()
    {
	  	header('Access-Control-Allow-Origin: *'); 		
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
		
		$option = $data['option'];
		$conn = mysql_connect("54.70.144.42","AapthiAlbums","AapthiTech@1234");
		mysql_select_db("myquotes",$conn);
		
		$sql = mysql_query("INSERT INTO sms (`option`, `created_date`) 
	VALUES ('$option', NOW())");
	
		$msg = "success";
		$data = array("msg"=>$msg);
		
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