<?php

define("CONTACT_FORM", 'kateryna.starcheus@gmail.com ');


$post = (!empty($_POST)) ? true : false;

if ($post) {

    $name = stripslashes($_POST['name']);
    $phone = stripslashes($_POST['tel']);
    $subject = 'Заявка';
    $error = '';
    $message = '
			<html>
					<head>
							<title>Заявка</title>
					</head>
					<body>
							<p>Имя: ' . $name . '</p>
							<p>Телефон : ' . $phone . '</p>	
					</body>
			</html>';


    if (!$error) {
        $mail = mail(CONTACT_FORM, $subject, $message,
            "From: zayavka@photobox.in.ua\r\n"
            . "Reply-To: " . $email . "\r\n"
            . "Content-type: text/html; charset=utf-8 \r\n"
            . "X-Mailer: PHP/" . phpversion());

        if ($mail) {
            echo 'OK';
        }
    } else {
        echo '<div class="has-danger">' . $error . '</div>';
    }

}
?>