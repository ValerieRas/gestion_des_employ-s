<!-- Entraînement sur la table projet -->

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

    // Affichage de la table

    $reponse = $BDD->query('SELECT PROJNO,PROJLIB,SRVNO FROM projets');
        while ($donnees = $reponse->fetch())
        {
            echo $donnees['PROJNO'].'    '. $donnees['PROJLIB'].'    '. $donnees['SRVNO'] . '<br/><br/>';
        }
?>

</body>
</html>






