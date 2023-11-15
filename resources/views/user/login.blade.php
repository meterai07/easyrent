<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    @if(auth()->check())
        <h1>Selamat Datang {{ auth()->user()->name }}</h1>
        <a href="/logout">Logout</a>
    @else
        <a href="/register">register</a>
        <form action="/login" method="post">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Login</button>
        </form>
    @endif
</body>
</html>