<?php
require '/../functions/news_func.php';
$res=NEWS_getAll();

function  News_insert($arr)
{
    News_add($arr);
}

