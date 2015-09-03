<?php include '/../model/news.php'; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <table>
        <tr><th>Новина</th><th>Дата</th></tr>
        <?php
            $new_news=array_reverse($res);
            foreach($new_news as $news):?>
            <tr>
                <td><a href="./views/view_news.php?news=<?php echo htmlspecialchars($news['news_text'])?>"><?php echo $news['tittle']?></a></td>
                <td><?php echo $news['data']?></td>
            </tr>
        <?php endforeach;?>
    </table>
<a href="./views/form.php">Додати новину</a>
</body>
</html>
