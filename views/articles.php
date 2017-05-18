<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>
        Мой Первый Блог
    </h1>
    <div>
        <?php foreach ($articles as $a): ?>
        <div class="articale">
            <h3>
<!--                --><?//=$article['title']?>
                <a href="article.php?id=<?=$a['id']?>"<?=$a['title']?></a>
            </h3>
            <em>
                Опубликовано: <?=$a['date']?>
            </em>
            <p>
                <?=$a['content']?>
            </p>
        </div>
        <?php endforeach ?>
        <!--        <div class="articale">
                    <h3>
                        PHP
                    </h3>
                    <em>
                        Опубликовано: 2017-05-17
                    </em>
                    <p>
                        Most popular web-lang.
                    </p>
                </div>-->
    </div>
    <footer>
        <p>
            Мой первый блог<br>
            Copyright &copy; 2017
        </p>
    </footer>
</div>
</body>
</html>