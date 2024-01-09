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
        <table class="profile_tab" >
            <caption>Склад</caption>
            <tr>
                <th>индентификатор</th>
                <th>название</th>
                <th>годен до</th>
                <th>группа</th>
                <th>статус</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>122412</td>
                <td>тряпочка</td>
                <td>2023.03.28 22.01</td>
                <td>расходник</td>
                <td><a class="tool" href="#">снять </a></td>
                <td><a class="tool" href="#">выдать</a></td>
            </tr>
            <tr>
                <td>122412</td>
                <td>пылесос</td>
                <td>2023.03.28 22.01</td>
                <td>техника</td>
                <td><a class="tool" href="#">снять </a></td>
                <td><a class="tool" href="#">выдать</a></td>
            </tr>
            <tr>
                <td>122412</td>
                <td>тряпочка</td>
                <td>2023.03.28 22.01</td>
                <td>расходник</td>
                <td><a class="tool" href="#">снять </a></td>
                <td><a class="tool" href="#">выдать</a></td>
            </tr>
        </table>
        <a href="#">показать еще</a><hr>
        <h2>Поиск</h2>
        <div class="toolbar">
            <div> <form action="#" method="post">
                <input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/>
                <input id="saveForm" class="tool" type="submit" name="submit" value="Поиск" style="padding: unset"></div>
            </form>

        </div>
        <hr>
        <h2>внести</h2>
        <div class="toolbar">

            <form action="#" method="post">
                <label class="description" for="name">индентификатор </label><br>
                <input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                <label class="description" for="name">название </label><br>
                <input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                <label class="description" for="name">годен до </label><br>
                <input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                <label class="description" for="name">группа </label><br>
                <input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
                <input id="saveForm" class="tool" type="submit" name="submit" value="внести">
            </form>
        </div>
    </div>
</main>

<footer>
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law.html">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech.html">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
