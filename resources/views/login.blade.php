<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <title>Log In</title>
</head>
<body>

    <header>
        <a href="/">Back</a>
    </header>
    <form action="">
        @csrf
        <h1>Log In</h1>
        <fieldset>
            <label for="username">Username</label>
            <input id="username" type="text">
            <label for="password">Password</label>
            <input id="password" type="password">
            <input id="checkBox" type="checkbox">
            <label for="checkBox">Remember me</label>
            <input type="submit" value="Log In">
        </fieldset>
    </form>
</body>
</html>