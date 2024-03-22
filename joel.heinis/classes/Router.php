<?php
class Router
{
    public function processRequest()
    {
        // Check if 'controller' parameter is set
        if(isset($_GET['controller'])) {
            // Get the controller name from the URL parameter
            $controllerName = $_GET['controller'].'Controller';
            // Include the controller file
            require_once CONTROLLERS.DS.$controllerName.'.php';
            
            // Instantiate the controller
            $controller = new $controllerName();
            
            // Check if 'method' parameter is set
            if(isset($_GET['method'])) {
                // Get the method name from the URL parameter
                $methodName = $_GET['method'];
                
                // Check if 'id' parameter is set
                if(isset($_GET['id'])) {
                    // Call the controller method with the 'id' parameter
                    $controller->$methodName($_GET['id']);
                } else {
                    // Call the controller method without the 'id' parameter
                    $controller->$methodName();
                }
            } else {
                // If 'method' parameter is not set, call the default method 'list'
                $controller->list();
            }
            
            // Pass the controller name to the template
            return $controllerName;
        } else {
            // If 'controller' parameter is not set, include default controller (EmployeeController)
            require_once CONTROLLERS.DS.'EmployeeController.php';
            // Instantiate the default controller
            $controller = new EmployeeController();
            // Call the default method 'list'
            $controller->list();
            
            // Pass the default controller name to the template
            return 'EmployeeController';
        }
    }
}
?>
