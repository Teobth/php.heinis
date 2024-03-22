<?php
class EmployeeView
{
    public function genlist($employees)
    {
        ob_start();
        require_once VIEWS.DS.'employee'.DS.'list.php'; // Load the list.php file
        $html= ob_get_clean();
        return $html;
    }

    public function addnew(){
        ob_start();
        require_once VIEWS.DS.'template.php';
        $ressource='employee';
        $methode='add';
        $html = ob_get_clean();
        return $html;
    }
}

?>
