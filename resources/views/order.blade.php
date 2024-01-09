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
    <a class="header_nav" href="profile">Аккаунт</a>
</header>
<main>
    <div class="plate">
        <h2 class="header_1">Заказать услугу</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="form_pl">
                <form class="form" action="/createorder" method="post" id="1">
                    @csrf
                    <label class="description" for="name">Имя </label><br>
                    <input id="name" name="name" class="element text medium" type="text" maxlength="255" value="" style="width: 100%"/><br>
                    <label class="description" for="surname">Фамилия </label><br>
                    <input id="surname" name="surname" class="element text medium" type="text" maxlength="255" value="" style="width: 100%"/><br>
                    <label class="description" for="adres">Адрес</label><br>
                    <input id="adres" name="adres" class="element text medium" type="text" maxlength="255" value="" style="width: 100%"/><br>
                    <label class="description" for="tel">Телефон</label><br>
                    <input id="tel" name="telephone" class="element text medium" type="tel" maxlength="255" value="" style="width: 100%"/><br>
                    <div class="flexbox">
                        <div>
                            <label class="description" for="date">Дата уборки</label><br>
                            <input id="date" name="date" class="element text medium" type="date" maxlength="255" value="" style="/*width: 45%*/"/>
                        </div>
                        <div style="margin-left: 1%">
                            <label class="description" for="tel">Время</label><br>
                            <input id="tel" name="time" class="element text medium" type="time" maxlength="255" value="" style="/*width: 45%*/"/></div>

                    </div>
<br>
                    <label class="description" for="area">Площадь помещения</label><br>
                    <div class="flexbox" ><input id="area" name="area" class="element text medium" type="number" maxlength="255" value="" style="width: 80%"/>М<sup>2</sup> </div><br>
                    <label class="description" for="element_6">Тип уборки</label><br>
                    <select class="element select medium" id="element_6" name="type">
                        <option value="" selected="selected"></option>
                        <option value="1" >Чистка дымохода</option>
                        <option value="2" >Мытье окон</option>
                        <option value="3" >Уборка после ремонта</option>
                        <option value="4" >Мытье пола</option>
                        <option value="5" >Комплексная уборка</option>
                        <option value="6" >Чистка ковров</option>
                    </select> <br>
                    <label class="description" for="area">коментарий к заказу</label><br>
                    <textarea class="bd" style="width: 100%"></textarea>
            </div>
            <br>

        <div class="form_descriptionn">
            <div class="form button g1" >
                <input id="saveForm" class="button_text" type="submit" name="submit" value="Заказать" \>
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
