<?php
 class Router
{
    public function processrequest(){
        require CONTROLLERS.DS.'EmployeeController.php';
        $controller=new EmployeeController();
        $employees = $controller->create();
    }
}
