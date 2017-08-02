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
class RtomissDataTable
{
    protected $tableGateway;
	protected $select;
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
		$this->select = new Select();
    }
	public function insertRtomissData($info){
		if(isset($info['mobile']) && $info['mobile']!=""){
			$phone = $info['mobile'];
		}else{
			$phone =  "";
		}
		if(isset($info['reg_number']) && $info['reg_number']!=""){
			$reg_number = $info['reg_number'];
		}else{
			$reg_number =  "";
		}
		$data = array(
			'vehicleno'     => $reg_number,  
			'appname' 	    => 'Hangover RTO', 
			'phone' 	    => $phone,
			'createddate'   => date('Y-m-d H:i:s'),
		);	
		$resultset=$this->tableGateway->insert($data);
		return $this->tableGateway->lastInsertValue;
	}
	
}