<?php


function connect()
{
    $conn = mysqli_connect("localhost", "virtyoz777_aleks", "%O5HhBc5", "virtyoz777_aleks");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // mysqli_set_charset($conn, "utf8");
    return $conn;
}



$conn = connect();
$sql = "SELECT *  FROM goods ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    $out = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $out[$row["id"]] = $row;
    }
    $goods = $out;
}
mysqli_close($conn);



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
    $message .= 'Наименование товара : ' . $goods[$id]['name'] . ' --- ';
    $message .= 'Количество товара : ' . $count . ' --- ';
    $message .= 'Сумма товара : ' . $count * $goods[$id]['cost'];
    $message .= '<br>';
    $sum = $sum + $count * $goods[$id]['cost'];
}
$message .= 'Всего сумма заказа: ' . $sum;
// print_r($message);

$to = 'cool-spart2010@mail.ru' . ','; //не забудь поменять!
$to2 = 'alonso85@mail.ru' . ',';
// $to .= $_POST['email'];
$spectext = '<!DOCTYPE HTML><html><head><title>Заказ</title></head><body>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$m = mail($to, 'Заказ в магазине', $spectext . $message . '</body></html>', $headers);
$m2 = mail($to2, 'Заказ в магазине', $spectext . $message . '</body></html>', $headers);

if ($m) {
    echo 1;
} else {
    echo 0;
}

if ($m2) {
    echo 1;
} else {
    echo 0;
}
