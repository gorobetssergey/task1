<?php
try
{
    $pdo=new PDO('mysql:host=localhost;dbname=news','root','qscvhuki');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch(PDOException $e)
{
    $outpute='Невозможно подключиться к скрверу баз данных: '.$e->getMessage();
    exit();
}