<?php
$formData = $_POST;
$message = "Beste, \n U heeft een bericht ontvangen op backstory.be van " . $formData['clientName'] . " met als bericht: \n " . $formData['clientComment'] . " \n
De overige gegevens zijn: \n
Partner naam: " . $formData['partnerName'] . "\n
Client e-mailadres: " . $formData['clientEmail'] . "\n
Telefoonnummer: " . $formData['clientTel'] . "\n
";
$headers = "From: hello@backstory.be" . "\r\n";
$mail = mail('sebastian.vuye@gmail.com', 'Contactformulier Backstory', $message, $headers);
if ($mail) {
    include "contact_s.html";
}
