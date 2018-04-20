<?php

namespace App;
use Mailgun\Mailgun;
use App\Config;

class Mail 
{
	public static function send($to, $subject, $text, $html)
	{
		$mg = Mailgun::create(Config::MAILGUN_API_KEY);

		# Now, compose and send your message.
		# $mg->messages()->send($domain, $params);
		$mg->messages()->send(Config::MAILGUN_DOMAIN, [
		  'from'    => 'radojicic.igor@gmail.com',
		  'to'      => $to,
		  'subject' => $subject,
		  'text'    => $text,
		  'html' 	=> $html
		]);
	}
}