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
            margin-left:5%;
            color:white;
            background-color:pink;
            border:none;
        }
        .displaytable{
            margin-left:8%;
            text-align:center;
        }
        .displaytable th{
            background-color:pink;
            width:150px;
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
<a href="createmploye.php"><button id="valid">Nouvel employé</button></a>
<br><br><br><br><br>
        <table class="displaytable">
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>SEXE</th>
                    <th>SALAIRE</th>
                    <th>PRIME</th>
                    <th>NUM SERVICE</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

                // Entrer dans la base de données
                include "connexion.php";

                // Affichage de la table

                $reponse = $BDD->query('SELECT EMPNO, EMPNOM, EMPPREN, EMPSEXE, EMPSALAIRE, EMPPRIME, SRVNO FROM employes');
                while ($donnees = $reponse->fetch()){
                ?>
                <tr>
                <td><?php echo $donnees['EMPNO']?></td>
                <td><?php echo $donnees['EMPNOM']?></td>
                <td><?php echo $donnees['EMPPREN']?></td>
                <td><?php echo $donnees['EMPSEXE']?></td>
                <td><?php echo $donnees['EMPSALAIRE']?></td>
                <td><?php echo $donnees['EMPPRIME']?></td>
                <td><?php echo $donnees['SRVNO']?></td>
                <td><a href='table_delete.php?EMPNO=<?= $donnees["EMPNO"] ?>'><input type='submit' id='valid' value='supprimer'></a>
                <a href='table_modif.php?EMPNO=<?= $donnees["EMPNO"] ?>'><input type='submit' id='valid'value='modifier'></a></td>
                </tr>
                <?php }   ?>
            </tbody>
        </table>
</body>
<footer>
<img id="logo" src="simplonlogo.png" alt="logo simplon">
</footer>
</html>
