<?php
namespace UserApi\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class SearchApiController extends AbstractRestfulController
{
    public function getList()
    {
	  	header('Access-Control-Allow-Origin: *');
		$countrysNameTable=$this->getServiceLocator()->get('Models\Model\CountryFactory');		
		$countrysNamelist = $countrysNameTable->getCountrysNamelist()->toarray();
		if(count($countrysNamelist)!=0){
			return new JsonModel(array(
				'value' 	=> 1,
				'countrysNamelist'	    => json_encode($countrysNamelist),
			));			
		}else{
			return new JsonModel(array(
				'value'		 => 0,
				'data'  	 => 'No Data',
			));			
		}
    }
   public function get($country)
    {
	    $hashNames="";
		$hashNameIds="";
		$count="";
		header('Access-Control-Allow-Origin: *');		
		$countrySearchTable=$this->getServiceLocator()->get('Models\Model\CountryFactory');				
		$countrySearchDetails = $countrySearchTable->countrySearchedDetails($country);
		//echo "<pre>";print_r($countrySearchDetails);exit;
		if(count($countrySearchDetails)!=0){
			foreach($countrySearchDetails as $key=>$search){
				$hashNames[$key]=$search->country_name;	
				$hashNameIds[$key]=$key;
				$count=$key;			
			}	
			$combined = array();
			foreach($hashNames as $index => $refNumber) {	
				$combined[] = array(
					'ref'  => $refNumber,
					'part' => $hashNameIds[$index]
				);
			}
			return $view = new JsonModel(
			array(
				'value'			=>	1,
				'searchHashNames'	=>	$combined,
				'countt'				=>	$count,
			));
		}else{
			return $view = new JsonModel(
			array(
				'output'			=>	0,
			));
		}
		
    }
    public function create($data)
    {
	
	}
    public function update($id, $data)
    {
        
    }
    public function delete($id)
    {
       
    }
}