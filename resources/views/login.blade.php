<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body class="flex flex-col items-center">
    <x-headerguest/>
    <form class="flex flex-col flex-1 items-center justify-center w-fit gap-5" action="">
        @csrf
        <h1>Log In</h1>
        <p>Log in with your credentials to continue</p>
        <fieldset class="flex flex-col w-full gap-5">

            <fieldset class="flex flex-col gap-2">
                <label class="" for="username">Username</label>
                <input placeholder="Username" class="mb-2 px-2.5 py-2 rounded-xl" id="username" type="text">
            </fieldset>
            
            <fieldset class="flex flex-col gap-2">
                <label class="" for="password">Password</label>
                <input placeholder="Password" class="mb-2 px-2.5 py-2 rounded-xl" id="password" type="password">
            </fieldset>

            <fieldset class="flex justify-center gap-2">
                <input class="mb-0" id="checkBox" type="checkbox">
                <label for="checkBox">Remember me</label>
            </fieldset>
        </fieldset>
        <input class="cstm-button" type="submit" value="Log In">
    </form>
</body>
</html>