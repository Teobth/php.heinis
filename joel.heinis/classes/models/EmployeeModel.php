<?php
require_once(CLASSES.DS.'dbConnection.php');

class EmployeeModel
{
    private $dbConnection;

    public function __construct() {
        $this->dbConnection = new DBConnection();
    }

    public function list(){
        $pdo = $this->dbConnection->getConnection();
        $query = "SELECT employee.EmployeeID, contact.FirstName, contact.LastName, contact.EmailAddress 
                  FROM employee 
                  INNER JOIN contact on employee.contactID=Contact.ContactID 
                  ORDER BY employee.EmployeeID";

        $stmt = $pdo->query($query);
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $employees;
    }
}

?>