<?php
$worker = new GearmanWorker();
$worker->addServer();

$worker->addFunction('sendmail', 'send_mail');

while (1)
{
    $worker->work();
    if ($worker->returnCode() != GEARMAN_SUCCESS) break;
}

function send_mail($job)
{
    $workload = $job->workload();
    $data = json_decode($workload, true);
    var_dump($data);
    //mail($data['to'], $data['subject'], $data['body']);
}