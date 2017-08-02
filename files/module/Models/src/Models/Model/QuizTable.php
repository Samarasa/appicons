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
class QuizTable
{
    protected $tableGateway;
	protected $select;
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
		$this->select = new Select();
    }
	public function insertUser($data){
		$data = array(
				'user_id'            => $data['userId'],  
				'quiz_name' 	     => $data['quizeName'], 
				'status'             => 1,
				'added_date' 	     => date('Y-m-d H:i:s'), 
		);	
		$resultset=$this->tableGateway->insert($data);
		return $this->tableGateway->lastInsertValue;
	}
	public function getQuizeDetails($id)
    {	
		$select = $this->tableGateway->getSql()->select();
		$select->join('quiz_questions', 'quize_names.id=quiz_questions.id',array('*'),'left');
		$select->where('quize_names.id="'.$id.'"');
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
	public function getQuizeNames($id)
    {	
		$select = $this->tableGateway->getSql()->select();
		$select->where('quize_names.user_id="'.$id.'"');
		$resultSet = $this->tableGateway->selectWith($select);
		return $resultSet;
	}
	
	
}