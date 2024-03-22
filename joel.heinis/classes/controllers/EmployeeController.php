<?php
require_once MODELS.DS.'EmployeeModel.php';
require_once VIEWS.DS.'EmployeeView.php';

class EmployeeController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new EmployeeModel();
        $this->view = new EmployeeView();
    }

     public function list()
    {
        require_once MODELS.DS.'EmployeeModel.php';
        $m = new EmployeeModel();
        $employees = $m->list();

        require_once VIEWS.DS."EmployeeView.php";
        $v = new EmployeeView();
        $html = $v->genlist($employees); // Pass $employees to the genlist method
        echo $html;
        http_response_code(200);
        exit;
    }

    public function create()
    {
        $html = $this->view->addnew();
        echo $html;
        http_response_code(200);
        exit;
    }

    public function listOne() {}

    public function delete($id) {}

    public function update($id) {}
}
?>
