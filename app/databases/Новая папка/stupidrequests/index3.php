<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h3>Пример формы с сохранением</h3>
    <form method="POST" action="index2.php">
        <label for="name">Имя</label>
        <input type="text" id="name" name="name">

        <label for="name">Email</label>
        <input type="email" id="email" name="email">

        <label for="theme">Тема сообщения</label>
        <input type="text" id="theme" name="theme">

        <label for="content">Текст сообщения</label>
        <textarea name="content" id="content"></textarea>
        <div style="display: flex; width: 103%;">
            <input type='submit' class="button" value="Отправить запрос">
            <div style="width: 10px;"></div>
            <input type='submit' class="button" name="CLEAR" value="Очистить">
        </div>
    </form>

    <form>
        <input type='submit' class="button" value="Посмотреть ранее сохранённые данные">
    </form>

    <form method="POST" action="delForm.php">
        <input type='submit' class="button" value="Удаление данных">
    </form>

    <form>
        <input type='submit' class="button" value="Редактирование и обновление">
    </form>

</body>
</html>
