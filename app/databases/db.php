<?php
    require 'connection.php';

    function tt($val) {
        echo '<pre>';
        print_r($val);
        echo '</pre>';
    }

    function dbCheckError($query) {
        global $pdo;
        $errInfo = $pdo->errorInfo();
        if ($errInfo[0] !== PDO::ERR_NONE) {
            tt($errInfo);
            echo $errInfo[2];
            exit("Ошибка запроса");
        }
        return true;
    }

    function tryExecute($query) {
        try {
            $query->execute();
        } catch( PDOException $exception ) {
            echo ' - Email не уникален';
            echo "<br>" . $exception->getMessage();
        }
    }

    function selectAll($table, $params = []) {
        global $pdo;
        $sql = "SELECT * FROM `$table`";

        if (!empty($params)) {
            $i = 0;
            foreach ($params as $key => $value) {
                if (!is_numeric($value)) {
                    $value = "'$value'";
                }

                if ($i === 0) {
                    $sql = $sql . " WHERE $key = $value"; 
                }
                else {
                    $sql = $sql . " AND $key = $value";
                }
                $i++;
            }
        }
        
        $query = $pdo->prepare($sql);
        tt($query);
        dbCheckError($query);
        $query->execute();
        return $query->fetchAll();
    }

    function selectOne($table, $params = []) {
        global $pdo; 
        $sql = "SELECT * from $table";

        if (!empty($params)) {
            $i = 0;
            foreach ($params as $key => $value) {
                if (!is_numeric($value)) {
                    $value = "'".$value."'";
                }
                if ($i === 0) {
                    $sql = $sql . " WHERE $key = $value";
                } else {
                    $sql = $sql . " AND $key = $value";
                }
                $i++;
            }
        }
        $sql = $sql . " LIMIT 1";

        $query = $pdo->prepare($sql);
        dbCheckError($query);
        $query->execute();
        return $query->fetch();
    }



    function insert($table, $params) {

        global $pdo;
        
        $i = 0;
        $coll = '';
        $mask = '';
        foreach ($params as $key => $value) {
            if ($i == 0) {
                $coll = $coll . $key;
                $mask = $mask . "'" . $value . "'";
            } else {
                $coll = $coll .", $key";
                $mask = $mask .", '" . $value . "'";
            }
            $i++;
        }
        
        $sql = "INSERT INTO $table ($coll) VALUES ($mask)";

        $query = $pdo->prepare($sql);
        echo $sql;
        tryExecute($query);
        dbCheckError($query);

        return $pdo->lastInsertId();
        //там типо у нас с файла RegistrationForm.php форма отправляется в reg.php, это переделать надо, наверное
        //ты update проверил?
        //про что вы поговорили?
        return false;
        return true;
        return exit();
        return die();
        return 0;
        return 1;
        return 2;
        return 3;
        return 4;
        return 5;
        return 6;
        return 7;
        return 8;
        return 9;
        return 10;
        return 11;
        return 12;
        return 13;
        return 14;
        return 15;
        return 16;
        return 17;
        return 18;
        return 19;
        return 20;
        return 21;
        return 22;
        return 23;
        return 24;
        return 25;
        return 26;
        return 27;
        return 28;
        return 29;
        return 30;
        return 31;
        return 32;
        return 33;
        return 34;
        return 35;
        return 36;
        return 37;
        return 38;
        return 39;
        return 40;
        return 41;
        return 42;
        return 43;
        return 44;
        return 45;
        return 46;
        return 47;
        return 48;
        return 49;
        return 50;
        return 51;
        return 52;
        return 53;
        return 54;
        return 55;
        return 56;
        return 57;
        return 58;
        return 59;
        return 60;
        return 61;
        return 62;
        return 63;
        return 64;
        return 65;
        return 66;
        return 67;
        return 68;
        return 69;
        return 70;
        return 71;
        return 72;
        return 73;
        return 74;
        return 75;
        return 76;
        return 77;
        return 78;
        return 79;
        return 80;
        return 81;
        return 82;
        return 83;
        return 84;
        return 85;
        return 86;
        return 87;
        return 88;
        return 89;
        return 90;
        return 91;
        return 92;
        return 93;
        return 94;
        return 95;
        return 96;
        return 97;
        return 98;
        return 99;
        return 100;

    }

    // $params = [
    //     'admin' => 1,
    //     'username' => 'Some' 
    // ];

    // $arrdata = [
    //     'admin' => 1,
    //     'username' => 'caate',
    //     'email' => 'caate@gmail.com',
    //     'password' => 'caate',
    //     'created' => '2021-01-23 20:05:51',
    // ];
    
    // tt(insert('users', $arrdata)); 
    // tt(selectAll('users')); // , $params
    //tt(selectOne('users'));


    // Обновление строки в таблице
    function update($table, $id, $params) {
        global $pdo;
        
        $i = 0;
        $coll = '';
        $str = '';
        foreach ($params as $key => $value) {
            if ($i == 0) {
                $str = $str . $key . " = '" . $value . "'";
            } else {
                $str = $str . ", " . $key . " = '" . $value . "'";
            }
            $i++;
        }
        
        $sql = "UPDATE $table SET $str WHERE id = $id";
        
        $query = $pdo->prepare($sql);
        $query->execute($params);
        //dbCheckError($query); 
    }

    function delete($table, $id) {
        global $pdo;
        $sql = "DELETE FROM $table WHERE id =" . "'" . $id . "'";
        $query = $pdo->prepare($sql);
        $query->execute();
        //dbCheckError($query); 
    }

    // $param = [
    //     'admin' => '0',
    //     'password' => '333'
    // ];
    // update('users', 4, $param);

?>