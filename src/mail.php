<?php

$json = file_get_contents('commonGoods.JSON');
$json = json_decode($json, true);

//Письмо

$message = '';
$message .= '<h1>Заказ в магазине</h1>';
$message .= '<p>Клиент имя: ' . $_POST['ename'] . '</p>';
$message .= '<p>Телефон: ' . $_POST['ephone'] . '</p>';
$message .= '<p>Адресс доставки: ' . $_POST['eadrres'] . '</p>';
$message .= '<p>Комментарий к заказу: ' . $_POST['edescription'] . '</p>';
$message .= '<p> ' . $_POST['datetime'] . '</p>';

$cart = $_POST['cart'];
$sum = 0;
foreach ($cart as $id => $count) {
    $message .= 'Наименование товара : ' . $json[$id]['name'] . ' --- ';
    $message .= 'Количество товара : ' . $count . ' --- ';
    $message .= 'Сумма товара : ' . $count * $json[$id]['cost'];
    $message .= '<br>';
    $sum = $sum + $count * $json[$id]['cost'];
}
$message .= 'Всего сумма заказа: ' . $sum;
// print_r($message);

$to = 'alonso85@mail.ru' . ','; //не забудь поменять!
// $to .= $_POST['email'];
$spectext = '<!DOCTYPE HTML><html><head><title>Заказ</title></head><body>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$m = mail($to, 'Заказ в магазине', $spectext . $message . '</body></html>', $headers);

if ($m) {
    echo 1;
} else {
    echo 0;
}
