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
        <h2 class="header_1">Расчитать контракт</h2>
            <div class="form_pl">
                <div class="form" id="1">
                    <form action="act" method="get" class="contract_form">
                <label class="description" for="area">Площадь помещения</label><br>
                         <input id="area" name="name" class="element text medium" type="number" minlength="0" maxlength="255" value=""/>М<sup>2</sup><br>
                <label class="description" for="element_6">Тип уборки</label><br>
                <select class="element select medium" id="element_6" name="element_6">
                    <option value="" selected="selected"></option>
                    <option value="1" >Чистка дымохода</option>
                    <option value="2" >Мытье окон</option>
                    <option value="3" >Уборка после ремонта</option>
                    <option value="4" >Мытье пола</option>
                    <option value="5" >Комплексная уборка</option>
                    <option value="6" >Чистка ковров</option>
                </select><br>
                        <label class="description" for="element_6">план</label><br>
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
                        </select><br>
                        <h2>Период между уборками</h2>
                        <div class="flexbox">
                            <div class="field_calc">1</div>
                            <div class="stick">раз в</div>
                            <input id="area" name="name" class="element text medium" type="number" minlength="0" maxlength="255" value="" style="width: 50%"/>
                            <div class="stick">дней</div>
                        </div>
                        <h2>Или в днях недели</h2>
                        <div class="flexbox">
                            <div><input type="checkbox" name="answer" value="a2">пн</div>
                            <div><input type="checkbox" name="answer" value="a2">вт</div>
                            <div><input type="checkbox" name="answer" value="a2">ср</div>
                            <div><input type="checkbox" name="answer" value="a2">чт</div>
                            <div><input type="checkbox" name="answer" value="a2">пт</div>
                            <div><input type="checkbox" name="answer" value="a2">сб</div>
                            <div><input type="checkbox" name="answer" value="a2">вс</div>
                        </div>
                        <div class="flexbox">
                        <div class="stick">продолжительность</div>
                        <input id="area" name="name" class="element text medium" type="number" minlength="0" maxlength="255" value="" style="width: 50%"/>
                        <div class="stick">дней</div>
                        </div>
                        <label class="description" for="tel">Время</label><br>
                        <input id="tel" name="name" class="element text medium" type="time" maxlength="255" value="" style="/*width: 45%*/"/><br>
                        <label class="description" for="area">коментарий к заказу</label><br>
                        <textarea class="bd" style="width: 100%"></textarea>
            </div>
                <br>
            </div>
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
<?php /**PATH C:\Users\Andrey\Desktop\crystal_clean\lar\crystal\resources\views/contract.blade.php ENDPATH**/ ?>