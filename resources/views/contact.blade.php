<!doctype html>
<!--suppress ALL -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('contact')}}" method="post">
     @csrf
        <input type="text"  name="name" placeholder="введите свое имя">
        <input type="email" name="email" placeholder="введите свой email">
    <button type="submit">Отправить</button>
</form>
</body>
</html>
