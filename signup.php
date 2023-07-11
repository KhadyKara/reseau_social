<?php

include("classes/connect.php");
include("classes/signup.php");

$prenom = "";
$nom = "";
$genre = "";
$email = "";
$datenaiss = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $signup = new Signup();
    $result = $signup->evaluate($_POST);

    if ($result != "") {
        echo "<div style='text-align: center;font-size: 12px;color: white;background-color: grey;'>";
        echo "<br>The following errors occurred:<br><br>";
        echo $result;
        echo "</div>";
    }

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $email = $_POST['email'];
    $datenaiss = $_POST['datenaiss'];
}

?>

<html>
<head>
    <title>Mon réseau social | Inscription</title>
</head>

<style>
    #bar {
        height: 100px;
        background-color: rgb(59, 89, 152);
        color: #d9dfeb;
        padding: 4px;
    }

    #signup_button {
        background-color: #42b72a;
        width: 80px;
        text-align: center;
        padding: 5px;
        border-radius: 5px;
        float: right;
    }

    #bar2 {
        background-color: white;
        width: 800px;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        padding-top: 50px;
        text-align: center;
        font-weight: bold;
    }

    #text {
        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #ccc;
        padding: 4px;
        font-size: 14px;
    }

    #button {
        width: 300px;
        height: 40px;
        border-radius: 4px;
        font-weight: bold;
        border: none;
        background-color: rgb(59, 89, 152);
        color: white;
    }
</style>

<body style="font-family: tahoma;background-color: #e9ebee;">

<div id="bar">
    <div style="font-size: 40px;">Facebook</div>
    <a href="login.php" style="color: white;"><div id="signup_button">Se connecter</div></a>
</div>

<div id="bar2">
    S'inscrire sur Facebook <br><br>
    <form method="post" action="">
        <input value="<?php echo $prenom ?>" name="prenom" type="text" id="text" placeholder="Prénom"><br><br>
        <input value="<?php echo $nom ?>" name="nom" type="text" id="text" placeholder="Nom de famille"><br><br>
        <input name="email" type="email" id="text" placeholder="Adresse Email"><br><br>
        <input name="mdpass" type="password" id="text" placeholder="Mot de passe"><br><br>
        <input name="mdpass2" type="password" id="text" placeholder="Saisir à nouveau le mot de passe"><br><br>
        <span value="<?php echo $prenom ?>" style="font-weight: normal;">Date de naissance :</span><br>
        <input name="datenaiss" type="date" id="text"><br><br>
        <span style="font-weight: normal;">Genre :</span><br>
        <select id="text" name="genre">
            <option value="<?php echo $genre ?>"><?php echo $genre ?></option>
            <option>Homme</option>
            <option>Femme</option>
            <option>Personnalisé</option>
        </select>
        <br><br>
        <input type="submit" id="button" value="S'inscrire">
        <br><br><br>
    </form>
</div>

</body>
</html>
