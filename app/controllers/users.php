<?php

require_once 'app/databases/db.php';

$isSubmit = false;
$errMsg = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['passF']);
    $passS = trim($_POST['passS']);

    if ($login == '' || $email == '' || $passF == '' || $passS == '') {
        $errMsg = 'Не все поля заполнены!';
    } else if (mb_strlen($login, 'UTF-8') < 2) {
        $errMsg = "Логин короче 2-ух символов";
    } else if ($passF !== $passS) {
        $errMsg = 'Пароли в обоих полях должны соотвествовать';
    } else {
        $existance = selectOne('users', ['email' => $email]);

        if ($existance['email'] === $email) {
            $errMsg = 'Пользователь такой с такой почтой уже зарегистрирован!';
        } else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass,
            ];
            $id = insert('users', $post);
            $errMsg = "Пользователь " . "<strong>" . $login . "</strong>" . " успешно зарегестрирован";
        }



    }
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'GET';
    $login = '';
    $email = '';
}

?>