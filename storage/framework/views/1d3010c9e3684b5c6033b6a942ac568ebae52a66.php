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
    <a class="header_nav" href="profile"><?php echo e($name); ?></a><a class="header_nav" href="/logout">выйти</a>
</header>
<main>
    <div class="plate">
        <h2 class="header_1">Аккаунт <?php echo e($name); ?></h2>
        <table class="sort_tab" >
            <tr>
                <th>сотрудник</th>
                <th>адрес</th>
                <th>задачи</th>
            </tr>
        </table>
        <?php $__currentLoopData = $cardes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="back_sort">
                <div class="grid_block_two">

                    <div>
                        <div class="flexbox">
                            <div class="fieldsort"><?php echo e($card['adres']); ?></div>
                            <div class="fieldsort"><?php echo e($card['type']); ?></div>
                            <div class="fieldsort"><?php echo e($card['date']); ?></div>
                        </div>
                        <div class="comm_field">
                            <?php echo e($card['comment']); ?>

                        </div>
                    </div>
                    <div class="sort_tool">
                        <form>
                            <label class="description" for="element_6">работник</label><br>
                            <select class="submit_sort" id="element_6" name="element_6">
                                <option value="" selected="selected"></option>
                                <option value="1" >работник 1</option>
                                <option value="2" >работник 2</option>
                                <option value="3" >работник 3</option>
                            </select><br>
                            <div >
                                <input id="saveForm" class="submit_sort" type="submit" name="submit" value="назначить" style="margin-top: 1%" \>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <br>
</main>
<footer>
    <span><div class="footer_text">2023 - crystal-clean (proto) <br> <a class="ref_footer" href="law.html">Лицензионное соглашение</a> <br> <a class="ref_footer" href="tech.html">Техподдержка</a></div></span>
</footer>
<script src="js/app.min.js"></script>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\crystal\resources\views/sortcab.blade.php ENDPATH**/ ?>