<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    // Entrer dans la base de données

    try{
        $BDD= new PDO('mysql:host=localhost;dbname=societe;charset=utf8','root','');
    }catch(Exception $e){die ('Erreur:'.$e->getMessage()); }

    // Suppression d'une ligne

    $nb_supp = $BDD->exec("DELETE FROM projets WHERE PROJNO='4' ");

    // impossible d'effacer projet lié à projet et intervenir, 
    // il faut effacer les relations pour pouvoir supprimer.

    echo $nb_supp .'     '. ' entrées supprimées !';

?>
</body>
</html>