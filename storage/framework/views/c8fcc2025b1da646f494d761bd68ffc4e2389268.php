<!DOCTYPE html>
    <html lang="ru">
        <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Главная</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
<style>
    .b {
        background: #A1C8F5;
        color: white;
        padding: 1%;
        border-radius: 10%;
    }
</style>
</head>
    <body>
        <header>

            <a class="header_nav" href="/"><div class="logo"><div class="flexbox"> <picture style="width: 35%"><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" height="100%" width="100%"></picture><picture><source srcset="img/name.webp" type="image/webp"><img src="img/name.png" height="100%" width="25%"></picture></div></div></a>
    <a class="header_nav" href="profile"><?php echo e($name); ?></a><a class="header_nav" href="/logout">выйти</a>
</header>
        <main>
    <div class="plate">
    <h2 class="header_1">Заказать услугу</h2>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    <div class="form">
        <div class="form_pl">
        <form action="/createorder" method="post">
            <?php echo csrf_field(); ?>
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

            <label class="description" for="area">Площадь помещения</label><br>
            <input id="area" name="area" class="element text medium" type="number" maxlength="255" value="" style="width: 80%"/>М<sup>2</sup><br>
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
            <textarea name="commord" class="bd" style="width: 100%"></textarea>
        </div>
            <div class="form_description">
                <div class="form_image"><picture><source srcset="img/formdeco.webp" type="image/webp"><img src="img/formdeco.png" height="100%"></picture></div>
                <div class="card_button"><input id="saveForm" class="button_text" type="submit" name="submit" value="Заказать" style="//margin: 10%"/></div>

                <div style="margin-left: 2%">
                <p>Продолжая использовать сайт</p>
                <p>вы соглашаетесь с лицензионным соглашением </p>
                    <p>а так же с нашей политикой о ПД</p>
                </div>
            </div>
        </form>
    </div>
    <br>
    <div class="banner_frame"><div class="banner"><div class="banner_text">Купи абонемент на уборку и экономь до 40%</div> <a class="banner_button" href="contract">Узнать больше</a></div></div>
<h2 class="header_1">Наши услуги</h2>
<br>
<div class="services">
    <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="service_card" id="<?php echo e($offers['id']); ?>">
            <picture><source srcset="img/<?php echo e($offers['img']); ?>.webp" type="image/webp"><img src="img/<?php echo e($offers['img']); ?>.jpg" width="100%" height="75%"></picture>
            <a class="ref_card" href="card?id=<?php echo e($offers['id']); ?>"><p class="card_text"><?php echo e($offers['name']); ?> <?php echo e($offers['price']); ?> руб.*</p></a>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
        <p>
        <?php if($cards->hasPages()): ?>
            <?php if($cards->hasMorePages()): ?>
                <a class="b" href="<?php echo e($cards->previousPageUrl()); ?>">Предыдущая</a>
                <a class="b" href="<?php echo e($cards->nextPageUrl()); ?>">Следующяя</a>
            <?php else: ?>
                <a class="b" href="<?php echo e($cards->previousPageUrl()); ?>">Предыдущая</a>
            <?php endif; ?>
        <?php endif; ?>
        </p>
       <p>*за квадратный метр</p>

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
<?php /**PATH C:\OpenServer\domains\crystal\resources\views/index.blade.php ENDPATH**/ ?>