<?php

require_once dirname (__FILE__).'/../Config.php';


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
	default : 
		include_once $conf->root_path.'/app/calc/KalkCtrl.class.php';
		$ctrl = new KalkCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/calc/KalkCtrl.class.php';
		$ctrl = new KalkCtrl ();
		$ctrl->process ();
	break;
    }
?>