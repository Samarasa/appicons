<?php
namespace UserApi\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class QuestionsApiController extends AbstractRestfulController
{
    public function getList()
    {	
		
    }
    public function get($id)
    {	
		header('Access-Control-Allow-Origin: *');	
		$userAppTable=$this->getServiceLocator()->get('Models\Model\QuizTableFactory');
		$quizeDetails = $userAppTable->getQuizeNames($id);
		if(count($quizeDetails)!=0){
			return new JsonModel(array(
				'value'		 => 1,
				'quizeDetails'  	 => json_encode($quizeDetails->toArray()),
			));
		}else{
			return new JsonModel(array(
				'value'		 => 0,
				'quizeDetails'  	 => 'No record is found',
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