<?php

define("CONTACT_FORM", 'partyboxua@gmail.com');


$post = (!empty($_POST)) ? true : false;

if ($post) {

    $phone = stripslashes($_POST['tel']);
    $subject = 'Заявка на перезвон';
    $error = '';
    $message = '
			<html>
					<head>
							<title>Заявка</title>
					</head>
					<body>					
							<p>Телефон : ' . $phone . '</p>	
					</body>
			</html>';


    if (!$error) {
        $mail = mail(CONTACT_FORM, $subject, $message,
            "From: perezvon@party-box.com.ua\r\n"
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