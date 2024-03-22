<?php
/*
class EmployeeController
{
    public function list(){
        require MODELS.DS.'EmployeeModel.php';
        $m = new EmployeeModel();
        $employees=$m->getall();

        require VIEWS.DS.'EmployeeView.php';
        $v= new EmployeeView();
        $html=$v->genlist($employees);
        echo $html;
        http_response_code(200);
        exit;
    }
    public function create(){
        require MODELS.DS.'EmployeeModel.php';
        $m = new EmployeeModel();
        $employees=$m->getall();

        require VIEWS.DS.'EmployeeView.php';
        $v= new EmployeeView();
        $html=$v->addnew();
        echo $html;
        http_response_code(200);
        exit;
    }
    public function listone(){}
    public function delete(){}
    public function update(){}
}
*/
class EmployeeController
{
    public function create()
    {
        // Appel de la vue pour afficher la liste des employés
        require VIEWS.DS.'EmployeeView.php';
        return $employees;
    }
}

?>