<?PHP

if (get_magic_quotes_gpc())
{
    $nom = stripslashes($_POST['nom']); 
	$email = stripslashes($_POST['email']);
	$sujet = stripslashes($_POST['sujet']); 
    $contenu1 = stripslashes($_POST['contenu1']); 
 
} 
else
{  
    $nom = $_POST['nom'];
    $email = $_POST['email'];
	$sujet = $_POST['sujet']; 
    $contenu1 = $_POST['contenu1']; 

	
$to = 'contact@elodie-martin.com';

$subject = 'Site Web';

$headers = "MIME-Version: 1.0\r\n"; 


$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
 

$msg  = 'Bonjour,'."\r\n\r\n";
$msg .= 'Ce mail a été envoyé depuis le site web de Elodie Martin par '.$nom."\r\n\r\n";
$msg .= 'Son adresse mail : '.$email."\r\n\r\n";
$msg .= 'Le sujet du message : '.$sujet."\r\n\r\n";
$msg .= 'Son message : '.$contenu1."\r\n\r\n";
 

$headers = 'From: '.$nom.' <'.$expediteur.'>'."\r\n\r\n";

mail($to, $subject, $msg, $headers);

function redir($url){
echo "<script language=\"javascript\">";
echo "window.location='$url';";
echo "</script>";
}

redir("../message-envoye.html"); 
}?> 