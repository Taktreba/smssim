<?php
header("Content-Type: text/html; charset=UTF-8");

$str = 'Wait please, your payment is processing...';
$host = 'http://'.$_SERVER['HTTP_HOST'];

if($_COOKIE['user_lang'] === 'ru'){
    $host = 'http://simsms.org/';
}

if($_COOKIE['user_lang'] === 'en'){
    $host = 'http://smspva.com/';
}

setcookie('user_lang', '');

if($_GET['lang'] === 'ru' || $_POST['lang'] === 'ru'){
    $str = 'Пожалуйста подождите, Ваш платеж проверяется...';
}
?>

<br>
<br>
<br>
<br>
<h2 align="center"><?php echo $str ?></h2>
<meta http-equiv="Refresh" content="2; url=<?php echo $host ?>">