<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "./assets/php/src/Exception.php";
    require "./assets/php/src/PHPMailer.php";

    $mail = new PHPMailer(true); /* Создаем объект MAIL */
    $mail->CharSet = "UTF-8"; /* Задаем кодировку UTF-8 */
    $mail->IsHTML(true); /* Разрешаем работу с HTML */

    $name = $_POST["name"]; /* Принимаем имя пользователя с формы .. */
    $title = $_POST["title"]; /* Почту */
    $message = $_POST["message"]; /* Сообщение с формы */

    $body = $name . ' ' . $title . ' ' . $message;

    $theme = "[Заявка с Портфолио]";

    $mail->addAddress("ituichiev127@gmail.com")

    $mail->Subject = $theme;
    $mail->Body = $body;

    if (!$mail->send()) {
        $message = "Ошибка отправки";
    } else {
        $message = "Данные отправлены!";
}

    
?>