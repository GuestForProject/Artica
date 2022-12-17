<?php 
    $host = '127.0.0.1:3306';
    $data = 'Artica';
    $user = 'root';
    $pass = '';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

    try {
        $pdo = new PDO("mysql:dbname=$data;host=$host;charset=utf8", $user, $pass, $options);
    } catch (PDOException $i) {
        echo $i;
        die('Умер из-за ошибки подключения');
    }



?>