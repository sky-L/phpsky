<?php
use Nette\Mail\Message;

class HomeController extends BaseController
{
	public function home()
	{
		$article = Article::first()->toArray();
		 
		$mail = new Message;
		
		$mail->addTo("690035384@qq.com");
		
		$mail->setSubject("hello world");
		
	 
		
		$mailer = new Nette\Mail\SmtpMailer(require BASE_PATH ."/config/mail.php");

		$re = $mailer->send($mail);
		
		var_dump($re);
	 
		
	}
}

?>