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
class QuestionsTable
{
    protected $tableGateway;
	protected $select;
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
		$this->select = new Select();
    }
	public function insertQuestions($question,$options,$correctAnsId,$ckeckedAnsId,$userRowId){
		$data = array(
				'id'                    => $userRowId,  
				'question' 	            => $question, 
				'question_options' 	    => $options,
				'status'                => 1,
				'correct_answer_id'     => $correctAnsId, 
				'checked_answer_id' 	=> $ckeckedAnsId,
		);	
		$resultset=$this->tableGateway->insert($data);
		return $this->tableGateway->lastInsertValue;
	}
	
}