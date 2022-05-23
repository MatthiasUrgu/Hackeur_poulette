
<?php 
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant


$name = $_GET["name"];
$lastname = $_GET["lastname"];
$gender = $_GET["answer"];
$email = $_GET["email"];
$textearea = $_GET["textearea"];


$msg = "FirstName:\t$name\n";
$msg = "Lastname:\t$lastname\n";
$msg = "sexe:\t$gender\n";
$msg = "E-Mail:\t$email\n";
$msg = "Commentaire:\t$textearea \n\n";
//Pourait continuer ainsi jusqu'à la fin du formulaire

$recipient = "test@mail.com";
$subject = "Formulaire";

$mailheaders = "From: Mon test de formulaire<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>formulaire php</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $name </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "Voici un petit récapitulatif de vos informations :</P>";
echo "<li>$name</li>
<li>$lastname</li>
<li>$gender</li>
<li>$email</li>
<li>$textearea</li>
</P>";

echo "</BODY></HTML>";

?>