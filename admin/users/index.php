<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $str = $root . '/components/OpenAdminLayout.php';
    require $str;
?>

<div style="width: 50%; margin: 0 auto">
    <div class="button row" >
        <a href="creates.php" class="col-2 btn btn-success">Создать пользователя</a>
        <span class="col-1"></span>
        <a href="index.php" class="col-2 btn btn-warning">Редактировать пользователя</a>
    </div>
    <div class="row title-table" style="text-align: center; margin-top: 25px">
        <h2>Управление пользователями</h2>
    </div>
    <table class="table">
        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">Логин</th>
            <th scope="col">Роль</th>
            <th scope="col">Управление</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Andrey88</td>
            <td>Admin</td>
            <td class="text-warning" role="button">edit</td>
            <td class="text-danger" role="button">delete</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>BedRed99</td>
            <td>User</td>
            <td class="text-warning" role="button">edit</td>
            <td class="text-danger" role="button">delete</td>
        </tr>

        </tbody>
    </table>
    
</div>