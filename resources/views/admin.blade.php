<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление товара</title>
    <link href="css/dobav.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="text-align: center; margin-top: 15%;">
    <form method="post" action="/admin">
        @csrf
        @method('put')
        <h2>Панель администратора</h2>
        <p><input required type="text" placeholder="Login" name="login"></p>
        <p><input required type="Password" placeholder="Password" name="pass"></p>
        <p><button type="submit" name="vxod">Вход</button></p>
    </form>
    </div>
</body>
</html>