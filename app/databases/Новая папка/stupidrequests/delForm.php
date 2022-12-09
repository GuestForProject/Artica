<?php
    require_once 'connection.php';

    function drawDat($querry, Array $ths, Array $tds) {
        global $connection;
        $result1 = $connection->query($querry);
        if (!$result1) die('Умер из-за ошибки в запросе');
    
        echo '<table border="1px">';
        echo '<tr>';
            foreach ($ths as $th) {
                echo '<th>' . $th . '</th>';
            }
        echo '</tr>';
        
        foreach ($result1->fetchAll() as $key) {
            echo '<tr>';
            foreach ($tds as $td) {
                echo '<td>' . $key[$td] . '</td>';
                
            }
            echo '<td><form method="POST" action="delForm.php">';

            echo("<input type='submit' name='value' value=" . $key['ID'] .">");
            echo '</form></td>';

            echo '</tr>';
        }
        echo '</table><br><a href="index.php">Домой</a>';
    }



    drawDat("SELECT * FROM StupidData", ['Имя','Email', 'Тема', 'Сообщение', 'Дата', 'Удаление'], ['Name','Email', 'Subject', 'Message', 'Date']);

    if ($_POST) {
        $id = $_POST['value'];  
        $query = "DELETE FROM StupidData WHERE id ='$id'";
        $result1 = $connection->query($query);
        print_r($result1);
        header('Refresh: 0');

    }


?>