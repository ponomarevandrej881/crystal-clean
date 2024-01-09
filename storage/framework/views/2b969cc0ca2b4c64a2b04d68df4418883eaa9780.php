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
        <br>
        <div class="back">
            <div class="result">
                <p class="profile_data">Имя <?php echo e($name); ?></p>
                <p class="profile_data">Фамилия <?php echo e($surname); ?></p>
                <p class="profile_data">Телефон <?php echo e($telephone); ?></p>
                <p class="profile_data">Адрес <?php echo e($adres); ?></p>
            <p class="profile_data">Сумма <?php echo e($cost); ?> </p>
            <p class="profile_data">Сумма к оплате</p>
            <p class="profile_data">Скидка</p>
            </div>

        <div class="pay_info">
            <form action="#" method="post">
                <label class="description" for="name">Номер карты</label><br>
                <input id="name" name="name" class="element text medium" type="number" value="" minlength="16" maxlength="16" style="width: 70%"/>
                <div class="card_st" style="display: flex">
                    <label class="description" for="name">Держатель</label><br>
                    <input id="name" name="name" class="element text medium" type="text" maxlength="255" value="" style="width: 50%"/>
                <label class="description" for="name">До</label><br>
                <input id="name" name="name" class="element text medium" type="date" maxlength="255" value=""/>
                </div>
                <label class="description" for="name" >Код CVV</label><br>
                <input id="name" name="name" class="element text medium" type="number" minlength="3" maxlength="3" value="" style="width: 20%"/>

        </div>
            <input id="saveForm" class="button" type="submit" name="submit" value="Заказать"style="margin-left: 43%; margin-top: 3%; margin-bottom: 3%;">
            </form>
            <br>

        </div>
        <br>
    </div>

</main>
<footer>
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Andrey\Desktop\crystal_clean\lar\crystal\resources\views/pay.blade.php ENDPATH**/ ?>