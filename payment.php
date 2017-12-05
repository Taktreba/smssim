<?php

$url = 'http://smspva.com/index.php?do=static&page=balance&key=dnherttrws';

if ($_GET['lang'] === 'ru' || $_POST['lang'] === 'ru') {
    $url = 'http://simsms.org/index.php?do=static&page=balance&key=sewrfwefw';

}

//file_put_contents('debug.txt', var_export($_POST, true));

$posts = "&payment=".$_GET['payment'];

foreach ($_POST as $key => $val) {
//if ($key!='LMI_PAYMENT_DESC')
    $posts .= '&' . $key . '=' . $val;
}
$posts = str_replace(' ', '%20', $posts);


$url .= $posts;

//file_put_contents('debug2.txt', var_export($url, true));
$ny_array = file_get_contents($url);
if(strripos($ny_array,'error') || strripos($ny_array,'smspva') || strripos($ny_array,'simsms')){
    $ny_array = 'ERROR';
}
//file_put_contents('debug3.txt', var_export($ny_array, true));
echo $ny_array;

?>