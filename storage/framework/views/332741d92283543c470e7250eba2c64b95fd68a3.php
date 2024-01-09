<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Главная</title>
</head>
<body>
<header>

    <a class="header_nav" href="index"><div class="logo"><picture><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" height="15%" width="15%"></picture></div></a>
    <a class="header_nav" href="profile">Аккаунт</a>
</header>
<main>
    <div class="plate">
        <h2 class="header_1">Заказать услугу</h2>
        <div class="form">
            <div class="form_pl">
                <form action="pay" method="get">
                    <label class="description" for="name">Имя </label><br>
                    <input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                    <label class="description" for="surname">Фамилия </label><br>
                    <input id="surname" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                    <label class="description" for="adres">Адрес</label><br>
                    <input id="adres" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                    <label class="description" for="tel">Телефон</label><br>
                    <input id="tel" name="name" class="element text medium" type="tel" maxlength="255" value=""/><br>
                    <label class="description" for="date">Дата уборки</label><br>
                    <input id="date" name="name" class="element text medium" type="date" maxlength="255" value=""/><br>
                    <label class="description" for="area">Площадь помещения</label><br>
                    <input id="area" name="name" class="element text medium" type="number" maxlength="255" value=""/>М<sup>2</sup><br>
                    <label class="description" for="element_6">Тип уборки</label><br>
                    <select class="element select medium" id="element_6" name="element_6">
                        <option value="" selected="selected"></option>
                        <option value="1" >Нет</option>
                        <option value="2" >Конина</option>
                        <option value="3" >Туш. гов.</option>
                        <option value="4" >Колб. копч.</option>
                        <option value="5" >Колб. ферм.</option>
                        <option value="6" >Туш. свин.</option>
                        <option value="7" >Мясо дино</option>
                        <option value="8" >Крыса. жар</option>
                        <option value="9" >Свин. жар</option>

                    </select>
            </div>
            <div class="form_description">
                <div class="form_image"><picture><source srcset="img/formdeco.webp" type="image/webp"><img src="img/formdeco.png" height="100%"></picture></div>
                <div class="card_button"><input id="saveForm" class="button_text" type="submit" name="submit" value="Заказать" style="margin: 10%"/></div>
            </div>
            </form>
        </div>
        <br>
        <div class="banner_frame"><div class="banner"><div class="banner_text">Купи абонемент на уборку и экономь до 40%</div> <a class="banner_button" href="contract">Узнать больше</a></div></div>
        <h2 class="header_1">Наши услуги</h2>
        <br>
        <div class="services">
            <div class="service_card">
                <picture><source srcset="img/furclean.webp" type="image/webp"><img src="img/furclean.jpg" width="100%"></picture>
                <a class="ref_card" href="card"><p class="card_text">Чистка дымохода владельца</p></a>
            </div>
            <div class="service_card">
                <picture><source srcset="img/furclean.webp" type="image/webp"><img src="img/furclean.jpg" width="100%"></picture>
                <a class="ref_card" href="card"><p class="card_text">Чистка дымохода</p></a>
            </div>
            <div class="service_card">
                <picture><source srcset="img/furclean.webp" type="image/webp"><img src="img/furclean.jpg" width="100%"></picture>
                <a class="ref_card" href="auth.html"><p class="card_text">Чистка дымохода</p></a>
            </div>
            <div class="service_card">
                <picture><source srcset="img/furclean.webp" type="image/webp"><img src="img/furclean.jpg" width="100%"></picture>
                <a class="ref_card" href="card"><p class="card_text">Чистка дымохода</p></a>
            </div>
            <div class="service_card">
                <picture><source srcset="img/furclean.webp" type="image/webp"><img src="img/furclean.jpg" width="100%"></picture>
                <a class="ref_card" href="card"><p class="card_text">Чистка дымохода</p></a>
            </div>
            <div class="service_card">
                <picture><source srcset="img/furclean.webp" type="image/webp"><img src="img/furclean.jpg" width="100%"></picture>
                <a class="ref_card" href="card"><p class="card_text">Чистка дымохода</p></a>
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
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law.html">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech.html">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Andrey\Desktop\crystal_clean\lar\crystal\resources\views/main.blade.php ENDPATH**/ ?>