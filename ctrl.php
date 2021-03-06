<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow'); 
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcShow',    'KalkCtrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'KalkCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);
getRouter()->addRoute('history',     'HistoryCtrl', ['user','admin']);

getRouter()->go(); 
?>