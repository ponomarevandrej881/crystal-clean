<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>просмотр услуги</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

</head>
<body>
<header>

    <a class="header_nav" href="/"><div class="logo"><div class="flexbox"> <picture style="width: 35%"><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" height="100%" width="100%"></picture><picture><source srcset="img/name.webp" type="image/webp"><img src="img/name.png" height="100%" width="25%"></picture></div></div></a>
    <a class="header_nav" href="profile">{{$login}}</a><a class="header_nav" href="/logout">выйти</a>
</header>
<main>
    <div class="plate">
        <h2 class="header_1">Заказать услугу {{$name}}</h2>
            <div class="card_pl">

                    <picture><source srcset="img/{{$img}}.webp" type="image/webp"><img src="img/{{$img}}.jpg" width="100%" height="100%"></picture>


            <div class="card_description">
                    <div class="card_texte" >{{$desc}}<br><br><br><br><div class="price">{{$price}} рублей за еденицу</div> </div>
                    <div class="card_button"><a class="card_buttonn" href="order">Заказать услугу</a></div>
            </div>
            </div>
        <h2 class="header_1">Отзывы</h2>
        <hr>
        <div class="feed">
            <div class="icon"><picture><source srcset="img/icon.webp" type="image/webp"><img class="icon" src="img/icon.png" width="64px"></picture></div>
            <div class="feed_t"><p class="user">Пользователь</p><p class="feed_t2">blablabla</p></div>
        </div>
        <hr>
        <div class="feed">
            <div class="icon"><picture><source srcset="img/icon.webp" type="image/webp"><img class="icon" src="img/icon.png" width="64px"></picture></div>
            <div class="feed_t"><p class="user">Пользователь</p><p class="feed_t2">blablabla</p></div>
        </div>
        <hr>
        <div class="feed">
            <div class="icon"><picture><source srcset="img/icon.webp" type="image/webp"><img class="icon" src="img/icon.png" width="64px"></picture></div>
            <div class="feed_t"><div class="user">Пользователь</div><div class="feed_t2">blablabla</div></div>
        </div>
        <hr>
    </div>
</main>

<footer>
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
