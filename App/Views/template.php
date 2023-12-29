<?php
$STATIC_DIR = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php $STATIC_DIR ?>/public/css/style.css">
    <title>Document</title>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__brand">
            <ul class="header__ul">
                <li class="header_li"><img src="<?php $STATIC_DIR ?>/public/img/icon.png" alt="logo" class="header__logo"></li>
                <li class="header_li"><a href="/public/news/1">Главная</a></li>
                <li class="header_li"><a href="/public/news/add">Добавить новость</a></li>
            </ul>
            </div>
        </div>
    </header>
    <main class="main">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/App/Views/' . $content_view; ?>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__line"></div>
            <div class="footer__text">2023©</div>
        </div>
    </footer>
    <script src="<?php $STATIC_DIR ?>/public/js/main.js"></script>
</div>
</body>
</html>
