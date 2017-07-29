<?php
namespace Models;
use Models\Model\Country;
use Models\Model\CountryTable;
use Models\Model\Quiz;
use Models\Model\QuizTable;
use Models\Model\Questions;
use Models\Model\QuestionsTable;
use Models\Model\Kabaddi;
use Models\Model\KabaddiTable;
use Models\Model\RtoData;
use Models\Model\RtoDataTable;
use Models\Model\RtomissData;
use Models\Model\RtomissDataTable;
use Models\Model\Ipaddresses;
use Models\Model\IpaddressesTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    { 
        return array(
			'factories' => array(
				'Models\Model\CountryFactory'	      => 'Models\Factory\Model\CountryTableFactory',
				'Models\Model\QuizTableFactory'	      => 'Models\Factory\Model\QuizTableFactory',
				'Models\Model\QuestionsTableFactory'  => 'Models\Factory\Model\QuestionsTableFactory',
				'Models\Model\KabaddiFactory'	      => 'Models\Factory\Model\KabaddiTableFactory',
				'Models\Model\RtoDataFactory'	      => 'Models\Factory\Model\RtoDataTableFactory',
				'Models\Model\RtomissDataFactory'	  => 'Models\Factory\Model\RtomissDataTableFactory',
				'Models\Model\IpaddressesFactory'	  => 'Models\Factory\Model\IpaddressesTableFactory',
			),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}