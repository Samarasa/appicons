<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'UserApi\Controller\CountryDetailsApi' 	    	=> 	'UserApi\Controller\CountryDetailsApiController',	
            'UserApi\Controller\SearchApi' 	    	        => 	'UserApi\Controller\SearchApiController',
			'UserApi\Controller\QuizApi' 	=>'UserApi\Controller\QuizApiController',
            'UserApi\Controller\QuestionsApi' 	=>'UserApi\Controller\QuestionsApiController',
            'UserApi\Controller\GetInfoApi' 	=>'UserApi\Controller\GetInfoApiController',
            'UserApi\Controller\GetVehicleApi' 	=>'UserApi\Controller\GetVehicleApiController',
			'UserApi\Controller\ReadVehicleApi' 	=>'UserApi\Controller\ReadVehicleApiController',
			'UserApi\Controller\SmsVehicleApi' 	=>'UserApi\Controller\SmsVehicleApiController',
            'UserApi\Controller\kabaddiInfoApi' 	=>'UserApi\Controller\kabaddiInfoApiController',
            'UserApi\Controller\DIStatusApi' 	=>'UserApi\Controller\DIStatusApiController',
		),
    ),
    // The following section is new` and should be added to your file
    'router' => array(
        'routes' => array(		
            'registration' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/registration[/:id]',
                    'constraints' => array(
                        'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'UserApi\Controller\RegistrationApi',
                    ),
                ),
            ),
			
			'country' => array(
				'type'    => 'Segment',
				'options' => array(
					'route'    => '/country[/:id]',
					'constraints' => array(
						'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
					),
					'defaults' => array(
						'controller' => 'UserApi\Controller\CountryDetailsApi',
					),
				),
			),
			'search' => array(
				'type'    => 'Segment',
				'options' => array(
					'route'    => '/search[/:id]',
					'constraints' => array(
						'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
					),
					'defaults' => array(
						'controller' => 'UserApi\Controller\SearchApi',
					),
				),
			),
			'insert-user-quiz-name' => array(
			'type'    => 'Segment',
				'options' => array(
					'route'    => '/insert-user-quiz-name[/:id]',
					'constraints' => array(
						'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
					),
					'defaults' => array(
						'controller' => 'UserApi\Controller\QuizApi',
					),
				),
			),
			'get-user-quizs' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/get-user-quizs[/:id]',
                    'constraints' => array(
                        'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'UserApi\Controller\QuestionsApi',
                    ),
                ),
            ),
			'get-info' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/get-info[/:id]',
                    'constraints' => array(
                        'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'UserApi\Controller\GetInfoApi',
                    ),
                ),
            ),
			'get-vehicle' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/get-vehicle[/:id]',
                    'constraints' => array(
                        'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'UserApi\Controller\GetVehicleApi',
                    ),
                ),
            ),
			'read-vehicle' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/read-vehicle[/:id]',
                    'constraints' => array(
                        'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'UserApi\Controller\ReadVehicleApi',
                    ),
                ),
            ),
			'sms-vehicle' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/sms-vehicle[/:id]',
                    'constraints' => array(
                        'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'UserApi\Controller\SmsVehicleApi',
                    ),
                ),
            ),
			'get-kabaddi-info' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/get-kabaddi-info[/:id]',
                    'constraints' => array(
                        'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'UserApi\Controller\kabaddiInfoApi',
                    ),
                ),
            ),
			'distatus' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/distatus[/:id]',
                    'constraints' => array(
                        'id' => '[%&@*.;a-zA-Z0-9][%&@*.;a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'UserApi\Controller\DIStatusApi',
                    ),
                ),
            ),
	    ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
	
);