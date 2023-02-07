
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
        .float{
            margin-left:3%;
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
    <h1>Modification employé</h1>
    <?php   
    // Entrer dans la base de données
        include "connexion.php";
        
        $NUMEMP= $_GET['EMPNO'];
        $reponse = $BDD->query("SELECT * FROM employes WHERE EMPNO=$NUMEMP");
        $donnees = $reponse->fetch(); 

    ?>
    <br><br>
    <form action="#" method=POST>
    <div class="clearfloat">
        <label for="num">Numéro employé</label>
        <input type="text" id="num" name ="num" value="<?=$NUMEMP?>" >
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?=$donnees['EMPNOM'];?>" >
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?=$donnees['EMPPREN'];?>" >
    </div>
    <br><br>
    <div class="float">
        <label for="sexe">Sexe</label>
        <select name="sexe" id="sexe">
            <option value="<?=$donnees['EMPSEXE'];?>"><?=$donnees['EMPSEXE'];?></option>
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="salaire">Salaire</label>
        <input type="text" id="salaire" name="salaire" value="<?=$donnees['EMPSALAIRE'];?>" >
    </div>
    <br><br>
    <div class="clearfloat">
        <label for="prime">Prime</label>
        <input type="text" id="prime" name="prime" value="<?=$donnees['EMPPRIME'];?>" >
    </div>
    <br><br>
    <div class="float">
        <label for="service" >Service</label>
        <select name="service" id="service">
            <option value="<?= $donnees['SRVNO'];?>"><?= $donnees['SRVNO'];?></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </div>
    <br><br><br>
    <div class="clearfloat">
    <input type="submit" id="valid" value="Valider">
    </div>
    </form>
    <br><br>

</body>
<?php
    

    // les nouvelles données de la table

    if (!empty($_POST)){

    $EMPNOM=$_POST['nom'];
    $EMPPREN=$_POST['prenom'];
    $EMPSEXE=$_POST['sexe'];
    $EMPSALAIRE=$_POST['salaire'];
    $EMPPRIME=$_POST['prime'];
    $SRVNO=$_POST['service'];
    
    $NUMEMP=$_GET['EMPNO'];

    $query = $BDD->exec("UPDATE employes SET EMPNOM='$EMPNOM', EMPPREN='$EMPPREN', 
    EMPSALAIRE='$EMPSALAIRE', EMPPRIME='$EMPPRIME', EMPSEXE='$EMPSEXE', SRVNO='$SRVNO'   WHERE EMPNO='$NUMEMP'");
    
    if ($query){

        echo " <br><br>Les modifications sont enregistrées pour l'employé n°".$NUMEMP;

    }else{

        echo "<br><br>Modifications impossibles";
    }
    }
    ?>
<footer>
<img id="logo" src="simplonlogo.png" alt="logo simplon">
</footer>
</html>
