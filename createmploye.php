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
            margin-right:70%; 
        }
        select{
            margin-left:10%;
            width: 12%;
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
    
    <br><br>
    <h1>Nouvel employé</h1>
    <br><br>    
    <?php
    include "connexion.php";

    // Les nouvelles données de la table
    if (!empty($_POST)){

    $EMPNO=$_POST['num'];
    $EMPNOM=$_POST['nom'];
    $EMPPREN=$_POST['prenom'];
    $EMPSEXE=$_POST['sexe'];
    $EMPSALAIRE=$_POST['salaire'];
    $EMPPRIME=$_POST['prime'];
    $SRVNO=$_POST['service'];
    
    // On écrit la requête
    $sql= "INSERT INTO employes(EMPNO,EMPNOM,EMPPREN,EMPSEXE,EMPSALAIRE,EMPPRIME,SRVNO)
    VALUES(:EMPNO,:EMPNOM,:EMPPREN,:EMPSEXE,:EMPSALAIRE,:EMPPRIME,:SRVNO)";

    //  On prépare la requête
    $query= $BDD->prepare($sql);

    // On injecte les valeurs
    $query->bindvalue(":EMPNO",$EMPNO);
    $query->bindvalue(":EMPNOM",$EMPNOM);
    $query->bindvalue(":EMPPREN",$EMPPREN);
    $query->bindvalue(":EMPSEXE",$EMPSEXE);
    $query->bindvalue(":EMPSALAIRE",$EMPSALAIRE);
    $query->bindvalue(":EMPPRIME",$EMPPRIME);
    $query->bindvalue(":SRVNO",$SRVNO);
    
    // On execute la requête
    $query->execute();

    if ($query){
        echo "Un nouvel employé a été ajouté <br> <br>";
    }else{
        echo "impossible de créer un nouvel employé <br> <br>";
    }
}

    ?>
    <form action="#" method=post>
    <div class="clearfloat">
        <label for="num">Numéro employé</label>
        <input type="text" id="num" name="num" value="" >
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="" >
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="" >
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="sexe">Sexe</label>
        <select name="sexe" id="sexe">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="salaire">Salaire</label>
        <input type="text" id="salaire" name="salaire" value="" >
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="prime">Prime</label>
        <input type="text" id="prime" name="prime" value="" >
    </div>
    <br><br>
    
    <div class="float">
    <label for="service">Numero Service</label>
        <select name="service" id="service">
        <?php
            include "connexion.php";
            $reponse = $BDD->query('SELECT SRVNO FROM services');
            while ($donnees = $reponse->fetch()){
            ?>
            <option name="service" value="<?php echo strtolower($donnees['SRVNO']); ?>"><?php echo $donnees['SRVNO']; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <br><br><br>
    <div class="clearfloat">
    <input type="submit" id="valid" value="Valider">
    </div>
    </form>
    <br><br>


</body>
<footer>
<img id="logo" src="simplonlogo.png" alt="logo simplon">
</footer>
</html>