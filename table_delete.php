<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background-color: black; 
            color: white;
            font-size: 30px;
        }
        a{
            color: white;
            text-decoration: none;
        }
        #logo{
            width:150px;
            length:100px;
        }
        #valid{
            padding:1%;
            color:white;
            background-color:pink;
            border:none;
        }
        .clearfloat input{
            float: right;
            margin-right:75%; 
        }
        footer{
            position: absolute;
            bottom:0;
            min-height:0%;
            margin-left:45%;
        }
    </style>
</head>
<header>
    Gestion des employés
    &nbsp;&nbsp;&nbsp;<a href="index.php">Home</a>
    &nbsp;&nbsp;&nbsp;<a href="employes.php">Employés</a>
</header>
<body>
    <?php
    include "connexion.php";

    // récupérer le numéro employé

    $EMPNO=$_GET['EMPNO'];

    // Suppression d'une ligne

    $nb_supp = $BDD->exec("DELETE FROM employes WHERE EMPNO='$EMPNO'");
    
    // message si requête ok ou pas

    if ($nb_supp){
        echo "$nb_supp <br><br> Employé supprimé !<br><br>";
    }else{
        echo "<br><br>supression impossible<br><br>";
    }
    // impossible d'effacer projet lié à projet et intervenir, 
    // il faut effacer les relations pour pouvoir supprimer.

    ?>
</body>
<footer>
<img id="logo" src="simplonlogo.png" alt="logo simplon">
</footer>
</html>