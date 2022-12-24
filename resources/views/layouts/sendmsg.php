<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACe6d4c562eefee1791068d70f6634b1bc"; 
$token  = "[Redacted]"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("whatsapp:+6282178330027", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "Pendakian Anda telah dikonfirmasi" 
                           ) 
                  ); 
 
print($message->sid);