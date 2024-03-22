<?php
define ('DS', DIRECTORY_SEPARATOR );
define ('ROOT',dirname(__FILE__));
define ('CLASSES', ROOT.DS.'classes');
define ('CONTROLLERS', CLASSES.DS.'controllers');
define ('MODELS', CLASSES.DS.'models');
define ('VIEWS', CLASSES.DS.'views');

require CLASSES.DS.'Router.php';
$r=new Router();
$r->processrequest();
