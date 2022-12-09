<?php 
    require_once 'connection.php';



    if ($_POST) {
        // if ($_POST['first']) { //  == 'Паспорт Гаврюшова Никиты Сергеевича'
        //     // drawTourists($connection);

        //     $query = "SELECT * FROM tourist WHERE name = 'Никита' and surname = 'Гаврюшов' and patronymic = 'Сергеевич'";
        //     drawData($connection, $query, ['Фамилия', 'Имя', 'Отчество', 'Серия паспорта', 'Номер паспорта'], ['surname', 'name', 'patronymic', 'passportseries', 'passportnumber']);

        // } else if ($_POST['second']) {
        //     // drawTouristsInHotel($connection);
        //     $query = "SELECT * FROM `tourist` JOIN ticket on ticket.touristid = tourist.id JOIN hotel on hotel.id = ticket.hotelid WHERE hotel.name = 'Joy World Palace'";
        //     drawData($connection, $query, ['Фамилия', 'Имя', 'Отчество', 'Серия паспорта', 'Номер паспорта', 'Отель'], ['surname', 2, 'patronymic', 'passportseries', 'passportnumber', 'name']);
        // } else if ($_POST['third']) {
        //     // drawTicketsCount($connection);
        //     drawData($connection, "SELECT count(id) FROM `ticket`", ['Кол-во проданных билетов'], [0]);
        // }
        
        $sql = "INSERT INTO StupidData (Name, Email, Subject, Message, Date) VALUES (?,?,?,?,?)";
        $connection->prepare($sql)->execute([$_POST['name'], $_POST['email'], $_POST['theme'], $_POST['content'], date('Y-m-d')]);
        header('Refresh: 0; url="index3.php"');
    } 
?>