<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Главная</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

</head>
<body>
<header>

    <a class="header_nav" href="/"><div class="logo"><div class="flexbox"> <picture style="width: 35%"><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" height="100%" width="100%"></picture><picture><source srcset="img/name.webp" type="image/webp"><img src="img/name.png" height="100%" width="25%"></picture></div></div></a>
    <a class="header_nav" href="profile.html">Аккаунт</a>
</header>
<main>

    <div class="plate">
        <div class="toolbar">
            <div> <form action="#" method="post">
                <input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/>
            <input id="saveForm" class="tool" type="submit" name="submit" value="Поиск" style="padding: unset"></div>
            </form>
            <hr>
            <h2>сейчас выполняются</h2>
            <table class="profile_tab" >
                <caption>Заказы</caption>
                <tr>
                    <th>заказ</th>
                    <th>адрес</th>
                    <th>дата</th>
                    <th>статус</th>
                    <th></th>

                </tr>
                <tr>
                    <td>1</td>
                    <td>ул. пушкина д. колотушкина</td>
                    <td>январь 2023</td>
                    <td><div class="status_finish">выполняется</div></td>
                    <td><a href="#">Отменить заказ</a> </td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>ул. пушкина д. колотушкина</td>
                    <td>май 2021</td>
                    <td><div class="status_dev">выполняется</div></td>
                    <td><a href="#">Отменить заказ</a> </td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>ул. пушкина д. колотушкина</td>
                    <td>январь 2023</td>
                    <td><div class="status_finish">выполняется</div></td>
                    <td><a href="#">Отменить заказ</a> </td>

                </tr>
                <tr>
                    <td>4</td>
                    <td>ул. пушкина д. колотушкина</td>
                    <td>май 2021</td>
                    <td><div class="status_dev">выполняется</div></td>
                    <td><a href="#">Отменить заказ</a> </td>

                </tr>
            </table>

            <hr>
    <table class="profile_tab" >
        <caption>Последние действия в системе</caption>
        <tr>
            <th>Действие</th>
            <th>Пользователь</th>
            <th>Время</th>
        </tr>
        <tr>
            <td>Вход в аккаунт</td>
            <td>88005553535</td>
            <td>2023.03.28 22.01</td>
        </tr>
        <tr>
            <td>Вход в аккаунт</td>
            <td>88005553535</td>
            <td>2023.03.28 22.01</td>
        </tr>
        <tr>
            <td>Вход в аккаунт</td>
            <td>88005553535</td>
            <td>2023.03.28 22.01</td>
        </tr>
    </table>
    <a href="#">показать еще</a><hr>
    <div class="flexbox">
        <a class="tool" href="#">скачать отчет</a><br>
        <a class="tool" href="#">промежуток времени</a><br>
        <a class="tool" href="#">тип данных</a><br>
        <a class="tool" href="#">сортировать по</a><br>
    </div>
        <h2>Действия</h2>
            <ul>
                <li><a href="#">отчет по действиям сотрудников</a></li>
                <li><a href="#">все заказы</a></li>
                <li><a href="#">склад</a></li>
                <li><a href="#">менеджмент сотрудников</a></li>
                <li><a href="#">обращения в техподдержку</a></li>
            </ul>
        </div>
    </div>
</main>
<footer>
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law.html">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech.html">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Andrey\Desktop\crystal_clean\lar\crystal\resources\views/mainadmin.blade.php ENDPATH**/ ?>