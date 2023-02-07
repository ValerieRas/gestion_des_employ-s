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

    // les nouvelles données de la table
    $PROJNO=4;
    $PROJLIB='Jardin';
    $SRVNO=5;

    // Ajout d'une ligne dans la table projet
    $BDD->exec("INSERT INTO projets(PROJNO, PROJLIB, SRVNO) VALUES('$PROJNO','$PROJLIB','$SRVNO')");

    echo "Un nouveau projet a été ajouté!";
    ?>
</body>
</html>