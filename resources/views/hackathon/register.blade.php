<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('hackathon.register.store')}}" method="post">
    @csrf
    <input type="number" placeholder="Телефон" name="number">
    <input type="text" placeholder="Имя" name="name">
    <input type="password" placeholder="Пароль" name="password">
    <input type="password" placeholder="Повтор      " name="rep_pas">
    <input type="submit" value="Зарегистрироваться">
</form>
</body>
</html>
