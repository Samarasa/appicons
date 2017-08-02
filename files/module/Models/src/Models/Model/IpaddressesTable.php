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
use Zend\Db\Sql\Have;
class IpaddressesTable
{
    protected $tableGateway;
	protected $select;
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
		$this->select = new Select();
    }
	public function insertIpaddr($ipad){
		$data = array(
			'ipadd'         => $ipad,  
			'createddate' 	=> date('Y-m-d H:i:s'),
		);	
		$resultset=$this->tableGateway->insert($data);
		return $this->tableGateway->lastInsertValue;
	}
	public function getCountIpAccess(){
		$today = date("Y-m-d");
        $select = $this->tableGateway->getSql()->select();    
		$select->columns(array('ipadd','cnt'=>new Expression('COUNT(*)')));
		$select->where('DATE(createddate) ="'.$today.'"');
		$select->group('ipadd');
		$select->having('cnt > 350');
		$select->order('cnt DESC');
		$resultSet = $this->tableGateway->selectWith($select);
        return $resultSet->toArray();
	}
}