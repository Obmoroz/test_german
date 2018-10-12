<?php
<?
$client = new GearmanClient();

/*Эта ф-я вернет true независимо от того, есть такой сервер или нет. Для проверки доступности сервера нужно использовать echo(‘’), установив на всякий случай таймаут в миллисекундах во избежание затыка скрипта при недоступности сервера */
$client->addServer('127.0.0.1','4730');


$client->setTimeout(29000);

/*true/false в зависимости от доступности сервера*/
$haveGoodServer = $client->echo('');
var_dump($haveGoodServer);

$data = ‘slon yooo’;

/*Отправляем задачу и данные на Gearman и ждем выполнения*/
$res = $client->do('function_revert_string_and_caps', $data);

/*Мы увидим результат, как только его вернет сервер, ну или выскочим по таймауту*/
echo $res;





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