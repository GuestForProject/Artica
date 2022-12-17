<header>
    <p class="navbar-logo" href=""><img src="../../3.png" alt="Лого"></p>
    <ul class="menu-main">
        <li><a href="../../index.php">Главная</a></li>
        <li><a href="../../Services.php" >Услуги</a></li>  <!-- class="current" !-->
        <li><a href="../../Contacts.php">Контакты</a></li>
        <?
        ?>

        <? if (isset($_SESSION['id'])): ?>
            <a><? echo($_SESSION['login']) ?></a>
            <li><a href="../../logout.php">Выйти</a></li>

            <? if ($_SESSION['admin'] == '1'): ?>
                <li><a href="admin/posts">Админка</a></li>
            <? endif; ?>

        <? else: ?>
            <li><a href="../../reg.php">Регистрация</a></li>
            <li><a href="../../auth.php">Авторизация</a></li>
        <? endif; ?>

    </ul>
</header>
