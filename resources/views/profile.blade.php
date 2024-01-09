<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Профиль</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

</head>
<body>
<header>

    <a class="header_nav" href="/"><div class="logo"><div class="flexbox"> <picture style="width: 35%"><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" height="100%" width="100%"></picture><picture><source srcset="img/name.webp" type="image/webp"><img src="img/name.png" height="100%" width="25%"></picture></div></div></a>
    <a class="header_nav" href="profile">{{$name}}</a><a class="header_nav" href="/logout">выйти</a>
</header>
<main>
    <div class="plate">
    <h2 class="header_1">Аккаунт</h2>
        <div class="profile_dat">
        <div class="profile_data"> <p class="profile_data">имя</p></div>
            <div class="profile_data"> <p class="profile_data"></p></div>
        <div class="profile_upd"> <a class="profile_upd" href="profile.html">Изменить</a></div>
        </div>
        <hr>
            <div class="profile_dat">
                <div class="profile_data"> <p class="profile_data">имя</p></div>
                <div class="profile_upd"> <a class="profile_upd" href="profile.html">Изменить</a></div>
            </div>
        <hr>
                <div class="profile_dat">
                    <div class="profile_data"> <p class="profile_data">имя</p></div>
                    <div class="profile_upd"> <a class="profile_upd" href="profile.html">Изменить</a></div>
                </div>
        <hr>
                    <div class="profile_dat">
                        <div class="profile_data"> <p class="profile_data">имя</p></div>
                        <div class="profile_upd"> <a class="profile_upd" href="profile.html">Изменить</a></div>
                    </div>
        <hr>
                        <table class="profile_tab" >
                            <caption>Заказы</caption>
                            <tr>
                                <th>заказ</th>
                                <th>адрес</th>
                                <th>дата</th>
                                <th>статус</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>ул. пушкина д. колотушкина</td>
                                <td>январь 2023</td>
                                <td><div class="status_finish">завершен</div></td>
                                <td><a href="#">Отменить заказ</a> </td>
                                <td><a href="#">Оставить отзыв</a> </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ул. пушкина д. колотушкина</td>
                                <td>май 2021</td>
                                <td><div class="status_dev">в разработке</div></td>
                                <td><a href="#">Отменить заказ</a> </td>
                                <td><a href="#">Оставить отзыв</a> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>ул. пушкина д. колотушкина</td>
                                <td>январь 2023</td>
                                <td><div class="status_finish">завершен</div></td>
                                <td><a href="#">Отменить заказ</a> </td>
                                <td><a href="#">Оставить отзыв</a> </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>ул. пушкина д. колотушкина</td>
                                <td>май 2021</td>
                                <td><div class="status_dev">в разработке</div></td>
                                <td><a href="#">Отменить заказ</a> </td>
                                <td><a href="#">Оставить отзыв</a> </td>
                            </tr>
                        </table>

                      </div>
    </div>
</main>
<footer>
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
