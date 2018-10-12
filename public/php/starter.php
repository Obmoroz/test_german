<?php
<?
$mail = array(
    'to' => 'test@gmail.com',
    'subject' => 'Привет',
    'body' => 'Это тестовое сообщение',
);


# Подключаемся к серверу Gearman
$client = new GearmanClient();
$client->addServer('127.0.0.1', '4730');


# Шлем сообщение
$client->doBackground('sendmail', json_encode($mail));





if($_POST["button"]==true){
    $login=$_POST["login"];
    $password=$_POST["password"];
    if($login==true){
        echo "Поле Логин: ",$login;
    }
    else{
        echo "Поле Логин не заполнено!";
    }
    if($password==true){
        echo "Поле Пароль: ",$password;
    }
    else{
        echo "Поле Логин не заполнено!";
    }
}
?>