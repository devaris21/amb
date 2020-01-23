<?php
namespace Native;

use \Swift_SmtpTransport;
use \Swift_Mailer;
use \Swift_Message;
use \Swift_Plugins_DecoratorPlugin;
use \registerPlugin;
/**
 * 
 */
class EMAIL 
{


	public static function send(Array $destinateurs, String $subject, $lemessage, $format = false){
		// Create the Transport
		$transport = (new Swift_SmtpTransport('mail32.lwspanel.com', 465))
		->setUsername('info@damedoreeconcept.com')
		->setPassword('@dmin_DD2019')
		->setEncryption('ssl');
		$mailer = new Swift_Mailer($transport);

		//create the message 
		$message = (new Swift_Message())
		->setFrom(['info@damedoreeconcept.com' => 'DGIMA | Plateforme de collecte de données'])
		->setSubject($subject)
		->setBody($lemessage,'text/html');

		if ($format) {
			$decorator = new Swift_Plugins_DecoratorPlugin($destinateurs);
			$mailer->registerPlugin($decorator);
			foreach ($destinateurs as $key => $value) {
				$message->addTo($key);
			}
		}else{
			$message->setTo($destinateurs);
		}
		
		//send
		$result = $mailer->send($message);
	}


}

?>