<?php
    session_start();
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