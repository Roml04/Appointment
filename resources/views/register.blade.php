<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col">
    <x-headerguest/>    

    <form action="{{ route('user.register') }}" method="POST" class="flex flex-col flex-1 items-center gap-6 w-full pb-10">
        @csrf
        <h1>Register an Account</h1>
        <fieldset class="flex flex-col gap-6 w-2/4">
            <fieldset class="flex flex-col gap-2 mb-6">

                <h2>Personal Information</h2>

                <fieldset class="flex flex-col gap-2">
                    <label for="firstName">First Name</label>
                    <input placeholder="Enter your First Name" name="firstname" id="firstName" type="text" required>
            
                    <label for="middleName">Middle Name</label>
                    <input placeholder="Enter your Middle Name" name="middlename" id="middleName" type="text">
            
                    <label for="lastName">Last Name</label>
                    <input placeholder="Enter your Last Name" name="lastname" id="lastName" type="text" required>
            
                    <label for="birthDate">Birthdate</label>
                    <input name="birthdate" id="birthDate" type="date" required>
                </fieldset>
    
                <fieldset class="flex flex-col gap-2">
                    <h3>User Type</h3>
                    <fieldset class="flex gap-2">
                        <fieldset class="flex justify-center items-center w-full">
                            <label class="cstm-radio-label text-center border border-1 border-solid rounded-2xl border-black w-full py-1" for="doctor">
                                <input class="hidden" id="doctor" type="radio" value="isDoctor" name="usertype" required>
                                Doctor
                            </label>
                        </fieldset>
            
                        <fieldset class="flex justify-center items-center w-full">
                            <label class="cstm-radio-label text-center border border-1 border-solid rounded-2xl border-black w-full py-1" for="patient">
                                <input class="hidden" id="patient" type="radio" value="isPatient" name="usertype" required>
                                Patient
                            </label>
                        </fieldset>
                    </fieldset>
                </fieldset>
            </fieldset>
    
            <fieldset class="flex flex-col gap-2">
                <h2>Account Credentials</h2>

                <fieldset class="flex flex-col gap-2">
                    <label for="userEmail">Email</label>
                    <input placeholder="Email" id="userEmail" type="email" name="email" required>
                    
                    <label for="userPassword">Password</label>
                    <input placeholder="Password" id="userPassword" type="password" name="password" required>
                </fieldset>

            </fieldset>
    
            <input class="cstm-button" type="submit" value="Register">
        </fieldset>
        
    </form>
</body>
</html>