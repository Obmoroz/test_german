<?php
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