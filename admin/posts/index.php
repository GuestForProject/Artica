<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $str = $root . '/components/OpenAdminLayout.php';
    require $str;
?>

<div style="width: 50%; margin: 0 auto">
    <div class="button row" >
        <a href="creates.php" class="col-3 btn btn-success">Создать пост</a>
        <span class="col-1"></span>
        <a href="index.php" class="col-3 btn btn-warning">Редактирование постов</a>
    </div>
    <div class="row title-table" style="text-align: center; margin-top: 25px">
        <h2>Управление записями</h2>
    </div>
    <table class="table">
        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Автор</th>
            <th scope="col">Управление</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Какая-то там статья</td>
            <td>Admin</td>
            <td class="text-warning" role="button">edit</td>
            <td class="text-danger" role="button">delete</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Какая-то там статья</td>
            <td>Admin</td>
            <td class="text-warning" role="button">edit</td>
            <td class="text-danger" role="button">delete</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Какая-то там статья</td>
            <td>Admin</td>
            <td class="text-warning" role="button">edit</td>
            <td class="text-danger" role="button">delete</td>
        </tr>

        </tbody>
    </table>
    
</div>

