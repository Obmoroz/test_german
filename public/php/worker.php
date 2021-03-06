<?php
$worker = new GearmanWorker();
$worker->addServer('127.0.0.1','4730');

/*Тут мы говорим, что готовы обработать ф-ю function_revert_string_and_caps, и что заниматься этим будет ф-я 'revCaps*/
$worker->addFunction('function_revert_string_and_caps', 'revCaps');

/*Запускаем воркер. В таком варианте он отработает один раз*/
//$worker->work();

/*А это вариант будет висеть демоном - есть на видео*/
while($worker->work()){};


//Ну и сама ф-я обработчик, аргумент один - объект-задание job
function revCaps($job){

    /*Извлекаем из job данные, переданные клиентом*/
    $content = $job->workload();

    return mb_strtoupper(strrev($content));
}