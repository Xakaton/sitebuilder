<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sitebuilder',
    'aliases' => array(
        'bootstrap' => 'ext.bootstrap',
        'yiistrap' => 'ext.yiistrap',
    ),
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.factory.models.*',
        'application.modules.factory.components.*',
        'bootstrap.behaviors.*',
        'bootstrap.helpers.*',
        'bootstrap.widgets.*',
        'yiistrap.behaviors.*',
        'yiistrap.helpers.*',
        'yiistrap.widgets.*'
	),
	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1','95.172.144.116'),
            'generatorPaths' => array('bootstrap.gii'),
		),
        'factory' => array('class' => 'application.modules.factory.FactoryModule'),
        'admin' => array('class' => 'application.modules.admin.AdminModule'),
	),

	// application components
	'components'=>array(
		'user'=>array(
            'class'=>'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
                'admin'=>'admin',
                'factory'=>'factory',
                '<module:\w+>/<controller:\w+>' => '<module>/<controller>',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>/<id>',
                'gii'=>'gii',
                'gii/<controller:\w+>'=>'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
            'showScriptName'=>false,
		),
        'bootstrap' => array(
            'class' => 'bootstrap.components.BsApi'
        ),
        'yiistrap' => array(
            'class' => 'yiistrap.components.TbApi'
        ),
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=sitebulder.mysql.eu1.frbit.com;dbname=sitebulder',
			'emulatePrepare' => true,
			'username' => 'sitebulder',
			'password' => 'bQ0uhYCUW9heZMxO',
			'charset' => 'utf8',
		),
        'authManager' => array(
            'class' => 'PhpAuthManager',
            'defaultRoles' => array(guest),
        ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'proggergood@gmail.com',
	),
);