<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    // Entrer dans la base de données

    try{
        $BDD= new PDO('mysql:host=localhost;dbname=societe;charset=utf8','root','');
    }catch(Exception $e){die ('Erreur:'.$e->getMessage()); }

    

?>

</body>
</html>