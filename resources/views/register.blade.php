<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <title>Register</title>
</head>
<body>

    <header>
        <a href="/">Back</a>
    </header>

    <form action="">
        @csrf
        <h1>Register an Account</h1>
        <fieldset>
            <h2>Personal Information</h2>
            <fieldset>
                <label for="firstName">First Name</label>
                <input id="firstName" type="text" required>
        
                <label for="middleName">Middle Name</label>
                <input id="middleName" type="text">
        
                <label for="lastName">Last Name</label>
                <input id="lastName" type="text" required>
        
                <label for="birthDate">Birthdate</label>
                <input id="birthDate" type="date" required>
    
                <h3>User Type</h3>
                <input id="doctor" type="radio" value="Doctor" name="userType" required>
                <label for="doctor">Doctor</label>
    
                <input id="patient" type="radio" value="Patient" name="userType" required>
                <label for="patient">Patient</label>
            </fieldset>
    
            <h2>Account Credentials</h2>
            <fieldset>
                <label for="userEmail">Email</label>
                <input id="userEmail" type="email" required>
                
                <label for="userPassword">Password</label>
                <input id="userPassword" type="password" required>
            </fieldset>
    
            <input type="submit" value="Register">
        </fieldset>
        
    </form>
</body>
</html>