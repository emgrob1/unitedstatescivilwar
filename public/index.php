<?php

use Phalcon\Mvc\View\Simple as SimpleView;
use Phalcon\Mvc\Router as router;

error_reporting(E_ALL);

define('APP_PATH', realpath('..'));

try {

    /**
     * Read the configuration
     */
    $config = include APP_PATH . "/app/config/config.php";

    /**
     * Read auto-loader
     */
    include APP_PATH . "/app/config/loader.php";

    /**
     * Read services
     */
    include APP_PATH . "/app/config/services.php";

	/**
	 * Render views
	 */
//	$di->set(
//	"view",
//	function () {
//		$view = new SimpleView();
//		$view->setViewsDir("../app/views/");
//		return $view;
//	},
//	TRUE
	
//	);
	
	// create the router
	$router = new router();
	// Define a route
	$router->add(
	"/admin/:controller/a/:action/:params",
	array(
		"controller" => 1,
		"action" => 2,
		"params" => 3,
	)
	
	);
	
    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
