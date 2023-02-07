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
        #liste{
            margin-left:35%;
        }
        #valid{
            margin-left:10%;
            color:black;
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
    <br><br><br>
    <fieldset>
        <div id="liste">
        <h1 id="valid">Employés</h1>
        <br><br>
        Accéder à la section de gestion des employés:
        <ul>
            <li>Ajouter un nouveau employé, modifier, supprimer</li>
            <li>Afficher un état</li>
            <li>etc</li>
        </ul>
        Cliquer sur le bouton ci-dessus 
        <br><br><br><br>
        <a href="employes.php"><button id="valid">Accéder à la page employés</button></a>
        </div>
        <br><br>
    </fieldset>
    <br><br><br>
</body>
<footer>
<img id="logo" src="simplonlogo.png" alt="logo simplon">
</footer>
</html>