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
class KabaddiTable
{
    protected $tableGateway;
	protected $select;
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
		$this->select = new Select();
    }
	public function getCountryWithFlagList()
    {	
		$select = $this->tableGateway->getSql()->select();
		$select->order('country_name ASC');	
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
	
	public function getInformation($data)
    {	
		$select = $this->tableGateway->getSql()->select();
		//$select->where('k_id = "'.$data['kabaddi_id'].'"');
		$select->where('k_type = "'.$data['kabaddi_type'].'"');
		$select->where('k_status = "1"');
		$select->order('k_id DESC');         
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
}