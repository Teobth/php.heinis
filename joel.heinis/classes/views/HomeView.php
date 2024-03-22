<?php
class HomeView
{
    public function public($emp){
        ob_start();
        $ressource='home';
        $methode='public';
        require VIEWS.DS.'template.php';
        $html = ob_get_clean();
        //$html="<html><body>Ma liste</body></html>";
        return $html;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
</head>
<body>
    <h1>Liste des Employés</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date de Naissance</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "adwfull";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Requête SQL pour récupérer les employés
            $sql = "SELECT * FROM employee";
            $result = $conn->query($sql);

            // Affichage des employés dans le tableau
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["EmployeeID"] . "</td>";
                    echo "<td>" . $row["BirthDate"] . "</td>";
                    echo "<td>" . $row["Gender"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Aucun employé trouvé</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
