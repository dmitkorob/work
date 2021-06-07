<?
if($_POST['submit'] == 1) {
	$email = $_POST['email'];
	$email = htmlspecialchars($email);
	$email = strip_tags($email);

	$to = "dimakorobejnikoff@yandex.ru";
	$subject = "Подписка";
	$text = "<b>Здравствуйте!</b> Хочу подписаться на новости.\n".$email."\nСпасибо!";
	$header = "Content-Type: text/html; charset=utf-8\r\n";
	$mail = mail($to, $subject, $text, $header);

	if($mail) {
		echo "Письмо отправлено!"."<br>";
		echo "<a href='index.php'>На главную</a>";
	} else {
		echo "Письмо не отправлено :(";
		echo "<a href='index.php'>На главную</a>";
	}
}
?>