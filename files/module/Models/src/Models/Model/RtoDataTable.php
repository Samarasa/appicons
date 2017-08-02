<?php
namespace Models\Model;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql;
use Zend\Db\Sql\Where;
use Zend\Db\Sql\Select;
use Zend\Paginator\Adapter\DbSelect;
use Zend\Paginator\Paginator;
use Zend\Db\Sql\Predicate;
use Zend\Db\Sql\Expression;
class RtoDataTable
{
    protected $tableGateway;
	protected $select;
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
		$this->select = new Select();
    }
	public function insertRtoData($info){
		if(isset($info['rc_f_name']) && $info['rc_f_name']!=""){
			$rc_f_name = $info['rc_f_name'];
		}else{
			$rc_f_name = "";
		}
		if(isset($info['rc_present_address']) && $info['rc_present_address']!=""){
			$rc_present_address = $info['rc_present_address'];
		}else{
			$rc_present_address = "";
		}
		if(isset($info['rc_permanent_address']) && $info['rc_permanent_address']!=""){
			$rc_permanent_address = $info['rc_permanent_address'];
		}else{
			$rc_permanent_address = "";
		}
		if(isset($info['rc_maker_desc']) && $info['rc_maker_desc']!=""){
			$rc_maker_desc = $info['rc_maker_desc'];
		}else{
			$rc_maker_desc = "";
		}
		if(isset($info['rc_body_type_desc']) && $info['rc_body_type_desc']!=""){
			$rc_body_type_desc = $info['rc_body_type_desc'];
		}else{
			$rc_body_type_desc = "";
		}
		if(isset($info['rc_color']) && $info['rc_color']!=""){
			$rc_color = $info['rc_color'];
		}else{
			$rc_color = "";
		}
		if(isset($info['rc_owner_sr']) && $info['rc_owner_sr']!=""){
			$rc_owner_sr = $info['rc_owner_sr'];
		}else{
			$rc_owner_sr = "";
		}
		if(isset($info['rc_norms_desc']) && $info['rc_norms_desc']!=""){
			$rc_norms_desc = $info['rc_norms_desc'];
		}else{
			$rc_norms_desc = "";
		}
		if(isset($info['rc_fit_upto']) && $info['rc_fit_upto']!=""){
			$rc_fit_upto = $info['rc_fit_upto'];
		}else{
			$rc_fit_upto = "";
		}
		if(isset($info['rc_financer']) && $info['rc_financer']!=""){
			$rc_financer = $info['rc_financer'];
		}else{
			$rc_financer = "";
		}
		if(isset($info['rc_insurance_comp']) && $info['rc_insurance_comp']!=""){
			$rc_insurance_comp = $info['rc_insurance_comp'];
		}else{
			$rc_insurance_comp = "";
		}
		if(isset($info['rc_insurance_policy_no']) && $info['rc_insurance_policy_no']!=""){
			$rc_insurance_policy_no = $info['rc_insurance_policy_no'];
		}else{
			$rc_insurance_policy_no = "";
		}
		if(isset($info['rc_insurance_upto']) && $info['rc_insurance_upto']!=""){
			$rc_insurance_upto = $info['rc_insurance_upto'];
		}else{
			$rc_insurance_upto = "";
		}
		if(isset($info['rc_manu_month_yr']) && $info['rc_manu_month_yr']!=""){
			$rc_manu_month_yr = $info['rc_manu_month_yr'];
		}else{
			$rc_manu_month_yr = "";
		}
		if(isset($info['rc_unld_wt']) && $info['rc_unld_wt']!=""){
			$rc_unld_wt = $info['rc_unld_wt'];
		}else{
			$rc_unld_wt = "";
		}
		if(isset($info['rc_gvw']) && $info['rc_gvw']!=""){
			$rc_gvw = $info['rc_gvw'];
		}else{
			$rc_gvw = "";
		}
		if(isset($info['rc_no_cyl']) && $info['rc_no_cyl']!=""){
			$rc_no_cyl = $info['rc_no_cyl'];
		}else{
			$rc_no_cyl = "";
		}
		if(isset($info['rc_cubic_cap']) && $info['rc_cubic_cap']!=""){
			$rc_cubic_cap = $info['rc_cubic_cap'];
		}else{
			$rc_cubic_cap = "";
		}
		if(isset($info['rc_seat_cap']) && $info['rc_seat_cap']!=""){
			$rc_seat_cap = $info['rc_seat_cap'];
		}else{
			$rc_seat_cap = "";
		}
		if(isset($info['rc_sleeper_cap']) && $info['rc_sleeper_cap']!=""){
			$rc_sleeper_cap = $info['rc_sleeper_cap'];
		}else{
			$rc_sleeper_cap = "";
		}
		if(isset($info['rc_stand_cap']) && $info['rc_stand_cap']!=""){
			$rc_stand_cap = $info['rc_stand_cap'];
		}else{
			$rc_stand_cap = "";
		}
		if(isset($info['rc_wheelbase']) && $info['rc_wheelbase']!=""){
			$rc_wheelbase = $info['rc_wheelbase'];
		}else{
			$rc_wheelbase = "";
		}
		if(isset($info['rc_status_as_on']) && $info['rc_status_as_on']!=""){
			$rc_status_as_on = $info['rc_status_as_on'];
		}else{
			$rc_status_as_on = "";
		}
		$data = array(
			'regno'         		=> $info["reg_no"],  
			'regrto' 	    		=> $info["reg_at"], 
			'owner' 	    		=> $info["owner_name"],
			'regdate'       		=> $info["reg_date"],
			'model'         		=> $info["maker_model"], 
			'class' 	    		=> $info["vehicle_class"],
			'vtype' 	    		=> $info["fuel_type"],
			'chasis' 	    		=> $info["chasi_no"],
			'engine' 	    		=> $info["engine_no"],
			'noofviews' 			=> 1,
			'appname' 	    		=> 'AP Site',
			'createddate' 			=> date('Y-m-d H:i:s'),
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
		$resultset=$this->tableGateway->insert($data);
		return $this->tableGateway->lastInsertValue;
	}
	public function getvechinfo($regnum){
		$select 	= $this->tableGateway->getSql()->select();
		$select->where('regno = :regno');		
		$statement 	= $this->tableGateway->getSql()->prepareStatementForSqlObject($select);
		$data 		= array('regno' => $regnum); 
		$result 	= $statement->execute($data)->current();
		return $result;	
	}
	public function updateViews($cnt,$regno){
		$data = array(
			'noofviews'		    =>	$cnt,
		);
		$select = $this->tableGateway->getSql()->update();
		$select->set($data);
		$select->where('regno = "'.$regno.'"');
		$statement = $this->tableGateway->getSql()->prepareStatementForSqlObject($select);
		$updateSet =  $statement->execute();
		return $updateSet=1;
	}
	
}