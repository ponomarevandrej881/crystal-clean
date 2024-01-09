<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Оформить контракт</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

</head>
<body>
<header>

    <a class="header_nav" href="/"><div class="logo"><div class="flexbox"> <picture style="width: 35%"><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" height="100%" width="100%"></picture><picture><source srcset="img/name.webp" type="image/webp"><img src="img/name.png" height="100%" width="25%"></picture></div></div></a>
    <a class="header_nav" href="profile">Аккаунт</a>
</header>
<main>
    <div class="plate">
        <h2 class="header_1">Оформление контракта</h2>

        <div class="form_pl">
            <div class="result" style="padding: unset">
                <p class="profile_data">Сумма</p>
                <p class="profile_data">Сумма к оплате</p>
                <p class="profile_data">Скидка</p>
            </div>
            <div class="form" id="1">
                <form action="pay" method="get" class="contract_form">
                    <label class="description" for="name">Имя </label><br>
                    <input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                    <label class="description" for="surname">Фамилия </label><br>
                    <input id="surname" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                    <label class="description" for="adres">Адрес</label><br>
                    <input id="adres" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                    <label class="description" for="tel">Телефон</label><br>
                    <input id="tel" name="name" class="element text medium" type="tel" maxlength="255" value=""/><br>
            </div>
            <br>
        </div>
        <div class="form_descriptionn">
            <div class="form button g1" style="display: flex" >
                <input id="saveForm" class="button_text" type="submit" name="submit" value="Заказать" \>
                <a class="banner_button" href="contract.html" style="margin-left: 2%">Назад</a></div>
            </div>
        </div>
        </form>
    </div>
    </div>
    <br>
</main>
<footer>
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
