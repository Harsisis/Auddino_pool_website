<?php
if($_POST){
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $message = $_POST['contenu'];

//send email
    mail("cadetgauthier4@gmail.com", "Demande client de :" .$email, "name : " . $name . "\n\n" . $message);
}
?>
