<?php
//    print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];
    $error = '';


    if(trim($email) == '')
    $error = 'Введите ваш Email';
    else if(trim($message) == '')
    $error = 'Введите ваше сообшение';
    else if(strlen($message) < 10)
    $error = 'Соовбщение должно быть более 10 смиволов';


    if($error != ''){
        echo  $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Тестовое сообшение")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('cool-spart2010@mail.ru', $subject,  $message, $headers);

    header('Location: /contacts.php');
?>