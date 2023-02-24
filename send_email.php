<?php
// Ontvang de formuliervelden
$naam = $_POST['naam'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];

// Stel de e-mailparameters in
$to = 'ontvanger@voorbeeld.com'; // vervang dit door het e-mailadres van de ontvanger
$subject = 'Nieuwe e-mail van ' . $naam;
$message = 'Naam: ' . $naam . "\r\n" .
           'E-mail: ' . $email . "\r\n" .
           'Bericht: ' . $bericht;

// Verzend de e-mail
$headers = 'From: ' . $email . "\r\n" .
           'Reply-To: ' . $email . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

// Bevestiging weergeven aan de gebruiker
echo 'Bedankt voor uw bericht. We nemen zo spoedig mogelijk contact met u op.';
?>
