<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Войти</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

</head>
<body>
<header>

    <a class="header_nav" href="/"><div class="logo"><div class="flexbox"> <picture style="width: 35%"><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" height="100%" width="100%"></picture><picture><source srcset="img/name.webp" type="image/webp"><img src="img/name.png" height="100%" width="25%"></picture></div></div></a>
    <a class="header_nav" href="profile">Аккаунт</a>
</header>
<main>
    <div class="plate">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="auth_form">
    <form action="regist" method="post" style="padding-left: 20%">
        @csrf
        <label class="description" for="surname">Имя </label><br>
        <input id="surname" name="name" class="element text medium" type="text" maxlength="255" value=""/><br>
        <label class="description" for="surname">Фамилия </label><br>
        <input id="surname" name="surname" class="element text medium" type="text" maxlength="255" value=""/><br>
        <label class="description" for="name">Телефон </label><br>
        <input id="name" name="tel" class="element text medium" type="text" maxlength="255" value=""/><br>
        <label class="description" for="surname">Пароль </label><br>
        <input id="surname" name="pass" class="element text medium" type="text" maxlength="255" value=""/><br>
        <label class="description" for="surname">Повторите пароль </label><br>
        <input id="surname" name="secpass" class="element text medium" type="text" maxlength="255" value=""/><br>
        <div class="form button"><input id="saveForm" class="button_text" type="submit" name="submit" value="Войти" /></div>
        {{$message}}
    </form>
    <a class="ref_auth" href="auth">Авторизация</a>
</div>


</div>

</main>
<footer>
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
