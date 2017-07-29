<?php
namespace UserApi\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class QuizApiController extends AbstractRestfulController
{
    public function getList()
    {	
		
    }
    public function get($id)
    {
			header('Access-Control-Allow-Origin: *');	
			$userAppTable=$this->getServiceLocator()->get('Models\Model\QuizTableFactory');
			$quizeDetails = $userAppTable->getQuizeDetails($id);
			if(count($quizeDetails)!=0){
				//echo "<pre>";print_r($quizeDetails);exit;
				return new JsonModel(array(
					'value'		 => 1,
					'quizeDetails'  	 => json_encode($quizeDetails->toArray()),
				));
			}else{
				return new JsonModel(array(
					'value'		 => 0,
					'data'  	 => 'No record is found',
				));			
			}
	
    }
    public function create($data)
    {
		header('Access-Control-Allow-Origin: *');
		$question="";
		$options="";
		$correctAnsId="";
		$ckeckedAnsId="";
		$userAppTable=$this->getServiceLocator()->get('Models\Model\QuizTableFactory');
		$insertUser = $userAppTable->insertUser($data);	
		if(count($insertUser)!=0){
			$questionsTable=$this->getServiceLocator()->get('Models\Model\QuestionsTableFactory');
			foreach($data as $key => $questions){
				for($i=1;$i<count($questions);$i++){
					$question=$questions[$i][0];
					$options=$questions[$i][1].'**'.$questions[$i][6].'***'.$questions[$i][2].'**'.$questions[$i][7].'***'.$questions[$i][3].'**'.$questions[$i][8].'***'.$questions[$i][4].'**'.$questions[$i][9];
					$correctAnsId=$questions[$i][5];
					if(isset($questions[$i][10]) && $questions[$i][10]!=""){
					 $ckeckedAnsId=$questions[$i][10];
					}else{
						 $ckeckedAnsId='0';
					}
					$insertQuestions = $questionsTable->insertQuestions($question,$options,$correctAnsId,$ckeckedAnsId,$insertUser);
				}			
			
			}
				
			if(count($insertQuestions)!=0){
				return new JsonModel(array(
					'id'	=> $insertUser,
					'value' 			=> 1,
				));	
			}else{
				return new JsonModel(array(
					'value'		 => 0,
					'id'  	 => 'No record is inserted',
				));
			}				
				
		}else{
			return new JsonModel(array(
				'value'		 => 0,
				'id'  	 => 'No Data',
			));			
		}
	}
    public function update($id, $data)
    {
        
    }
    public function delete($id)
    {
       
    }
}