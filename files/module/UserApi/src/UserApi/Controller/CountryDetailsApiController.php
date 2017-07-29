<?php
namespace UserApi\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class CountryDetailsApiController extends AbstractRestfulController
{
    public function getList()
    {
	  	header('Access-Control-Allow-Origin: *');
		$countryTable=$this->getServiceLocator()->get('Models\Model\CountryFactory');		
		$countryWithFlaglist = $countryTable->getCountryWithFlagList()->toarray();
		if(count($countryWithFlaglist)!=0){
			return new JsonModel(array(
				'value' 	=> 1,
				'countryWithFlagList'	    =>
			$countryWithFlaglist
			));						
		}else{
			return new JsonModel(array(
				'value'		 => 0,
				'data'  	 => 'No Data',
			));			
		}
		
		// return new JsonModel(array(
			// 'countryWithFlagList'	    => json_encode($countryWithFlaglist)
			// ));
//echo json_encode($countryWithFlaglist);exit;	
    }
    public function get($country)
    {
		header('Access-Control-Allow-Origin: *');		
		$countrydetailsTable=$this->getServiceLocator()->get('Models\Model\CountryFactory');				
		$countryDetails = $countrydetailsTable->countryDetails($country)->toarray();
		if(count($countryDetails)!=0){
			return new JsonModel(array(
				'value' 	=> 1,
				'countryDetails'	=> json_encode($countryDetails),
			));			
		}else{
			return new JsonModel(array(
				'value' => 0,
				'data'  => 'No Data',
			));			
		}
    }
    public function create($data)
    {
		header('Access-Control-Allow-Origin: *');		
		$countrydetailsTable=$this->getServiceLocator()->get('Models\Model\CountryFactory');
		$getCountriesInfo = $countrydetailsTable->getCountriesInfo($data)->toarray();
	//	echo '<pre>';print_r($getCountriesInfo);
		if(count($getCountriesInfo)!=0){
		//	echo '<pre>';print_r($getCountriesInfo[0]['country_capital']);
		$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
		//echo '<pre>';print_r($getCapitals);
		$a=$getCapitals[0]['country_currency'];
		$b=$getCapitals[1]['country_currency'];
		$c=$getCapitals[2]['country_currency'];
		$d=$getCapitals[3]['country_currency'];
		$e=$getCapitals[4]['country_currency'];
		$f=$getCapitals[5]['country_currency'];
		$g=$getCapitals[6]['country_currency'];
		$h=$getCapitals[7]['country_currency'];
		$i=$getCapitals[8]['country_currency'];
		$j=$getCapitals[9]['country_currency'];
		$k=$getCapitals[10]['country_currency'];
		$l=$getCapitals[11]['country_currency'];
		$m=$getCapitals[12]['country_currency'];
		$n=$getCapitals[13]['country_currency'];
		$o=$getCapitals[14]['country_currency'];
		$p=$getCapitals[15]['country_currency'];
		$q=$getCapitals[16]['country_currency'];
		$r=$getCapitals[17]['country_currency'];
		$s=$getCapitals[18]['country_currency'];
		$t=$getCapitals[19]['country_currency'];
		$A=$getCapitals[0]['country_official_language'];
		$B=$getCapitals[1]['country_official_language'];
		$C=$getCapitals[2]['country_official_language'];
		$D=$getCapitals[3]['country_official_language'];		
		$E=$getCapitals[4]['country_official_language'];		
		$F=$getCapitals[5]['country_official_language'];		
		$G=$getCapitals[6]['country_official_language'];		
		$H=$getCapitals[7]['country_official_language'];		
		$I=$getCapitals[8]['country_official_language'];		
		$J=$getCapitals[9]['country_official_language'];		
		$K=$getCapitals[10]['country_official_language'];		
		$L=$getCapitals[11]['country_official_language'];		
		$M=$getCapitals[12]['country_official_language'];		
		$N=$getCapitals[13]['country_official_language'];		
		$O=$getCapitals[14]['country_official_language'];		
		$P=$getCapitals[15]['country_official_language'];		
		$Q=$getCapitals[16]['country_official_language'];		
		$R=$getCapitals[17]['country_official_language'];		
		$S=$getCapitals[18]['country_official_language'];		
		$T=$getCapitals[19]['country_official_language'];	
		if($a==$b || $a==$c || $a==$d ||$b==$c ||$b==$d ||$c==$d){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($e==$f || $e==$g || $e==$h ||$f==$g ||$f==$h ||$g==$h){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($i==$j || $i==$k || $i==$l ||$j==$k ||$j==$l ||$k==$l){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($m==$n || $m==$o || $m==$p ||$n==$o ||$n==$p ||$o==$p){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($q==$r || $q==$s || $q==$t ||$r==$s ||$r==$t ||$s==$t){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		if($A==$B || $A==$C || $A==$D ||$B==$C ||$B==$D ||$C==$D){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($E==$F || $E==$G || $E==$H ||$F==$G ||$F==$H ||$G==$H){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($I==$J || $I==$K || $I==$L ||$J==$K ||$J==$L ||$K==$L){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($M==$N || $M==$O || $M==$P ||$N==$O ||$N==$P ||$O==$P){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($Q==$R || $Q==$S || $Q==$T ||$R==$S ||$R==$T ||$S==$T){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}			
			return new JsonModel(array(
				'value' 	=> 1,
				'redd' 	=> 5,
				'capitalInfo'	=> $getCountriesInfo,
				'countryInfo'	=>$getCapitals,
			));			
		}else{
			return new JsonModel(array(
				'value' => 0,
				'data'  => 'No Data',
			));			
		}
	}
    public function update($id, $data)
    {
        
    }
    public function delete($id)
    {
       
    }
	public function testOptions($data,$getCountriesInfo,$getCapitals){
		$countrydetailsTable=$this->getServiceLocator()->get('Models\Model\CountryFactory');
		$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
		$a=$getCapitals[0]['country_currency'];
		$b=$getCapitals[1]['country_currency'];
		$c=$getCapitals[2]['country_currency'];
		$d=$getCapitals[3]['country_currency'];
		$e=$getCapitals[4]['country_currency'];
		$f=$getCapitals[5]['country_currency'];
		$g=$getCapitals[6]['country_currency'];
		$h=$getCapitals[7]['country_currency'];
		$i=$getCapitals[8]['country_currency'];
		$j=$getCapitals[9]['country_currency'];
		$k=$getCapitals[10]['country_currency'];
		$l=$getCapitals[11]['country_currency'];
		$m=$getCapitals[12]['country_currency'];
		$n=$getCapitals[13]['country_currency'];
		$o=$getCapitals[14]['country_currency'];
		$p=$getCapitals[15]['country_currency'];
		$q=$getCapitals[16]['country_currency'];
		$r=$getCapitals[17]['country_currency'];
		$s=$getCapitals[18]['country_currency'];
		$t=$getCapitals[19]['country_currency'];
		$A=$getCapitals[0]['country_official_language'];
		$B=$getCapitals[1]['country_official_language'];
		$C=$getCapitals[2]['country_official_language'];
		$D=$getCapitals[3]['country_official_language'];		
		$E=$getCapitals[4]['country_official_language'];		
		$F=$getCapitals[5]['country_official_language'];		
		$G=$getCapitals[6]['country_official_language'];		
		$H=$getCapitals[7]['country_official_language'];		
		$I=$getCapitals[8]['country_official_language'];		
		$J=$getCapitals[9]['country_official_language'];		
		$K=$getCapitals[10]['country_official_language'];		
		$L=$getCapitals[11]['country_official_language'];		
		$M=$getCapitals[12]['country_official_language'];		
		$N=$getCapitals[13]['country_official_language'];		
		$O=$getCapitals[14]['country_official_language'];		
		$P=$getCapitals[15]['country_official_language'];		
		$Q=$getCapitals[16]['country_official_language'];		
		$R=$getCapitals[17]['country_official_language'];		
		$S=$getCapitals[18]['country_official_language'];		
		$T=$getCapitals[19]['country_official_language'];			
		if($a==$b || $a==$c || $a==$d ||$b==$c ||$b==$d ||$c==$d){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($e==$f || $e==$g || $e==$h ||$f==$g ||$f==$h ||$g==$h){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($i==$j || $i==$k || $i==$l ||$j==$k ||$j==$l ||$k==$l){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($m==$n || $m==$o || $m==$p ||$n==$o ||$n==$p ||$o==$p){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($q==$r || $q==$s || $q==$t ||$r==$s ||$r==$t ||$s==$t){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		if($A==$B || $A==$C || $A==$D ||$B==$C ||$B==$D ||$C==$D){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($E==$F || $E==$G || $E==$H ||$F==$G ||$F==$H ||$G==$H){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($I==$J || $I==$K || $I==$L ||$J==$K ||$J==$L ||$K==$L){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($M==$N || $M==$O || $M==$P ||$N==$O ||$N==$P ||$O==$P){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		else if($Q==$R || $Q==$S || $Q==$T ||$R==$S ||$R==$T ||$S==$T){
			$getCapitals = $countrydetailsTable->getCapitals($getCountriesInfo[0]['country_capital'])->toarray();
			return $this->testOptions($data,$getCountriesInfo,$getCapitals);
		}
		return new JsonModel(array(
			'value' 	=> 1,
			'redd' 	=> 3,
			'capitalInfo'	=> $getCountriesInfo,
			'countryInfo'	=> $getCapitals,
		));	
	}
}