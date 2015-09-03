<?php
require './model/news.php';
if (!empty($_POST))
{
    $data=[];
    if(!empty($_POST['tittle']))
    {
        $data['tittle']=$_POST['tittle'];
        $data['text']=$_POST['text'];
    }

    if(isset($data['tittle']) and isset($data['text']))
    {
        News_insert($data);
        header('Location: ./');
        die;
    }
}