<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $str = $root . '/components/OpenAdminLayout.php';
    require $str;
?>

<div class="posts col-9" style="width: 50%; margin: 0 auto;">
    <div class="button row">
        <a href="admin/users/create.php" class="col-2 btn btn-success">Создать</a>
        <span class="col-1"></span>
        <a href="admin/users/index.php" class="col-3 btn btn-warning">Редактировать</a>
    </div>
    <div class="row title-table mt-3">
        <h2>Создать пользователя</h2>
    </div>
    <div class="row add-post">
        <form action="create.php" method="post">
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                <input name="login" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин...">
            </div>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите ваш email...">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
            </div>
            <div class="col">
                <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="повторите ваш пароль...">
            </div>
            <select class="form-select mt-3 mb-3" aria-label="Default select example">
                <option selected>User</option>
                <option value="1">Admin</option>
            </select>
            <div class="col">
                <button name="create-user" class="btn btn-primary" type="submit">Создать</button>
            </div>
        </form>
    </div>
</div>