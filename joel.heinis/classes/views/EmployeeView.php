<?php
/*
class EmployeeView 
{
    public function genlist($emp){
        ob_start();
        $toto='employee';
        $titi='list';
        require VIEWS.DS.'template.php';
        $html = ob_get_clean();
        //$html="<html><body>Ma liste</body></html>";
        return $html;
    }
    public function addnew(){
        ob_start();
        $ressource='employee';
        $methode='add';
        require VIEWS.DS.'template.php';
        $html = ob_get_clean();
        //$html="<html><body>Ma liste</body></html>";
        return $html;
    }
}*/
?>

<?php

// On utilise les variables pour afficher du contenu dynamique
echo "<h1>Liste des employés</h1>";

// On boucle sur les employés (ici $emp) pour afficher chaque élément
foreach ($employees as $employee) {
    echo "<p>Nom : " . $employee['nom'] . "</p>";
    echo "<p>Prénom : " . $employee['prenom'] . "</p>";
}

?>
