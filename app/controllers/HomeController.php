<?php
use Nette\Mail\Message;

class HomeController extends BaseController
{
	public function home()
	{
	
		echo "hello world";
	
	//数据库
		$article = Article::first()->toArray();
	//发送邮件
		$mail = new Message;
		
		$mail->addTo("690035384@qq.com");
		
		$mail->setSubject("hello world");
	
		$mailer = new Nette\Mail\SmtpMailer(require BASE_PATH ."/config/mail.php");

		$mailer->send($mail);
	}
}

?>