<?php
header('Content-Type: text/html; charset=UTF-8');

//$response['status'] = 0;
//$response['id'] = 5;

if (!empty($_POST)) {
    if ($_POST['email'] !== '' && $_POST['pass'] !== '') {
        $response['status'] = 1; //данные есть
        $response['id'] = 'undefined';
    } elseif ($_POST['email'] === '' && $_POST['pass'] !== '') {
        $response['status'] = 3; //только мыло
        $response['id'] = 'undefined';
    } elseif ($_POST['email'] !== '' && $_POST['pass'] === '') {
        $response['status'] = 2; //только пасворд
        $response['id'] = 'undefined';
    } else {
        $response['status'] = 4; //нет мыла нет пароля
        $response['id'] = 'undefined';
    }
}

echo json_encode($response);


