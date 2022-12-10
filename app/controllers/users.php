<?php

require_once 'app/databases/db.php';

$isSubmit = false;
$errMsg = '';

function userAuth($array) {
    $_SESSION['id'] = $array['id'];
    $_SESSION['login'] = $array['username'];
    $_SESSION['admin'] = $array['admin'];

    if ($_SESSION['admin'] == 1) {
        header('Location: http://artica-main/admin/posts');
    } else {
        header('Location: http://artica-main/');
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['button-reg'])) {
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

        if ($existance['email'] == $email) {
            $errMsg = "Пользователь $login с такой почтой уже зарегистрирован!";
        } else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass,
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);
            userAuth($user);
        }
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['button-auth'])) {
    $email = trim($_POST['email']);
    $passF = trim($_POST['passF']);

    if ($email == '' || $passF == '') {
        $errMsg = 'Не все поля заполнены!';
    } else {
        $existance = selectOne('users', ['email' => $email]);

        if ($existance && password_verify($passF, $existance['password'])) {
            userAuth($existance);
        } else {
            $errMsg = 'Ошибка входа.';
        }
    }



} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $login = '';
    $email = '';
}

?>