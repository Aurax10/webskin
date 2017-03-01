<?php

$user = $_POST['email'];
$adresse = "contact@cdinformatique.net";
$site = "cdinformatique.net";

$TO = $adresse;

$head = "From: ".$user."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";

$sujet = "Formulaire de contact CD Informatique";

$informations = "
Nom: ".$_POST['name']." \r\n
Email: ".$_POST['email']." \r\n
Telephone: ".$_POST['phone']." \r\n
Message: ".$_POST['message']." \r\n
";

$res = mail($TO, $sujet ,$informations, $head);

if (true == $res) {
Header("Location: http://".$site."/" );
} else {
Header("Location: http://".$site."/erreur.html" );
}

?>
