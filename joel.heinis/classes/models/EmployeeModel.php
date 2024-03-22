<?php

//class EmployeeModel
//{
//    public function getall(){
//        return null;
//    }
//}
?>

<?php

class EmployeeModel
{
    private $db;

    public function __construct()
    {
        // Initialise la connexion à la base de données
        $this->db = new mysqli("localhost", "root", "", "adwfull");
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        } 
    }

    public function getall()
    {
        // Exécute une requête SQL pour récupérer toutes les données des employés
        $sql = "SELECT * FROM employee";
        $result = $this->db->query($sql);

        // Vérifie si la requête s'est exécutée avec succès
        if ($result) {
            // Initialise un tableau pour stocker les données des employés
            $employees = [];

            // Parcours le résultat de la requête et stocke les données des employés dans le tableau
            while ($row = $result->fetch_assoc()) {
                $employees[] = $row;
            }

            // Retourne le tableau contenant les données des employés
            return $employees;
        } else {
            // En cas d'erreur lors de l'exécution de la requête, affiche un message d'erreur
            echo "Error: " . $sql . "<br>" . $this->db->error;
            return null;
        }
    }
}