<?
function sendMail()
{
	global $DEPARTMENT;

	if ($_POST) {

		$to = $DEPARTMENT['email'];

		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: Кухни 365 <$to>\r\n";

		$name = trim($_POST['name']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$message = trim($_POST['message']);
		$link = trim($_POST['link']);

		$txt = "<b>Имя:</b> $name 
				<br> <b>Телефон:</b> $phone 
				<br> <b>Email:</b> $email
				<br> <b>Сообщение:</b> $message
				<br><br> <b>Страница заявки:</b> $link";

		$subject = "Заявка c сайта Кухни 365 ($link)";
		mail($to, $subject, $txt, $headers);
	}
}
