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

        // Modification des valeurs
        $PROJNO=4;
        $PROJLIB='DANSE';
        $SRVNO=3;

        // Modification d'une ligne dans la table projet
        $nb_modifs = $BDD->exec("UPDATE projets SET PROJLIB='$PROJLIB',SRVNO='$SRVNO' WHERE PROJNO='$PROJNO' ");
        echo $nb_modifs .'    '.'Les entrées ont été modifiées !';  
    ?>
</body>
</html>