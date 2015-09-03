<?php

function NEWS_getAll()
{
    $sql='SELECT * FROM news';
    $result=sql_select($sql);
    $res=[];
    foreach($result as $a)
    {
        $res[]=['id'=>$a['id'],
            'news_text'=>$a['news_text'],
            'data'=>$a['data'],
            'tittle'=>$a['tittle']
        ];

    }
    return $res;
}

function sql_select($select){
    require 'sql_connect.php';
    try
    {
        $result=$pdo->query($select);
    }
    catch(PDOException $e)
    {
        $outpute='Помилка команди SELECT: '.$e->getMessage();
        echo $outpute;
        exit();
    }
    return $result;
}

function  News_add($arr)
{
    $dat=date("Y-m-d H:i:s");
    $sql="
        INSERT INTO news
        (tittle,news_text,data)
        VALUES
        ('".$arr['tittle']."','".$arr['text']."','".$dat."')
        ";
    SQL_exec($sql);
}

function SQL_exec($str)
{
    require 'sql_connect.php';

    try
    {
        $sql=$str;
        $result=$pdo->exec($sql);
    }
    catch(PDOException $e)
    {
        $outpute='Помилка виконання запиту: '.$e->getMessage();
        echo $outpute;
        exit();
    }
    return $result;
}