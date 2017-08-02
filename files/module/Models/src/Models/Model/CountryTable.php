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
class CountryTable
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
	public function getCountrysNamelist($search)
    {	
		$select = $this->tableGateway->getSql()->select();
		$select->where->like( 'country_name', '%' . $search . '%' );
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
	public function countryDetails($country)
    {	
		 $explodeId=explode('-',$country);
		 $serch=$explodeId[0];
		 $type=$explodeId[1];
		 $select = $this->tableGateway->getSql()->select();
			if($type==1){
				$select->where('id_con_capital="'.$serch.'"');
			}else{
				$select->where('country_name="'.$serch.'"');
			}
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
	public function countrySearchedDetails($search)
    {	
		$select = $this->tableGateway->getSql()->select();
		$select->where->like( 'country_name', '%' . $search . '%' );
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
	
	public function getCountryColoumn($data)
    {	
		$coloumn=$data['countryinfo'];
		$select = $this->tableGateway->getSql()->select();
		$rand = new \Zend\Db\Sql\Expression('RAND()');
		$select->columns(array('$coloumn'));
		$select->where('country_capital !=""');
		$select->order($rand);
        $select->limit(1);            
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
	public function getCountriesInfo($data)
    {	
		$select = $this->tableGateway->getSql()->select();
		$rand = new \Zend\Db\Sql\Expression('RAND()');
		$select->where('country_capital !=""');
		$select->order($rand);
        $select->limit(1);            
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
	
	public function getCapitals($countrycapital)
    {	
		
		$select = $this->tableGateway->getSql()->select();
		$rand = new \Zend\Db\Sql\Expression('RAND()');
		$select->where('country_capital !="'.$countrycapital.'"');
		$select->where('country_capital !=""');
		$select->order($rand);
        $select->limit(20);            
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
}