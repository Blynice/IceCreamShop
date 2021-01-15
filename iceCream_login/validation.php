<?php
$serveur = "localhost";
$dbname = "user";
$user = "root";
$pass = " ";

$firstname = valid_donnees($_POST["firstname"]);
$name = valid_donnees($_POST["name"]);
$mail = valid_donnees($_POST["mail"]);
$pswd = valid_donnees($_POST["pswd"]);
$pswd2 = valid_donnees($_POST["pswd2"]);

function valid_donnees($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

if (!empty($_POST["firstname"]) && !empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["pswd"]) && !empty($_POST["pswd2"])) {
    echo $_POST["firstname"];
}
/*Si les champs prenom et mail ne sont pas vides et si les donnees ont
     *bien la forme attendue...*/
/*if (
    !empty($prenom)
    && strlen($prenom) <= 20
    && preg_match("^[A-Za-z '-]+$", $prenom)
    && !empty($mail)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)
) {

    try {
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //On insère les données reçues
        $sth = $dbco->prepare("
                INSERT INTO form(prenom, mail, age, sexe, pays)
                VALUES(:prenom, :mail, :age, :sexe, :pays)");
        $sth->bindParam(':prenom', $prenom);
        $sth->bindParam(':mail', $mail);
        $sth->bindParam(':age', $age);
        $sth->bindParam(':sexe', $sexe);
        $sth->bindParam(':pays', $pays);
        $sth->execute();
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:form-merci.html");
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    header("Location:formulaire.html");
}*/
