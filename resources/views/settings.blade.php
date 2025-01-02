<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
</head>

<style>

    ul li {
        width: 100%;
    }
    ul > li {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

</style>
@vite('resources/js/script.js')
<body class="flex gap-6">
    <x-sidebar/>
    <div class="w-full">
        <header>
            <a href="{{ route('auth.dashboard') }}">Back</a>
        </header>
        <section class="flex flex-col w-full">
            <div class="w-full">
                <div>
                    {{-- <form action="{{ route('auth.settings.edit', ["isInputDisabled" => false]) }}" method="POST"> --}}
                        {{-- @csrf --}}
                        
                    {{-- </form> --}}
                <div>
                    <div>
                        <h2>Personal Information</h2>
                        <ul id="personal-info-container">
                            <li>
                                <strong>First Name</strong>
                                <div>
                                    <input id="inputFirstName" type="text" value="{{ $userInfo['firstname'] }}" disabled>
                                    <button class="hidden" id="saveButton">Save</button>
                                    <button class="" id="editButton">Edit</button>
                                </div>
                            </li>
                            <li>
                                <strong>Middle Name</strong>
                                <div>
                                    <input id="inputMiddleName" type="text" value="{{ $userInfo['middlename'] }}" disabled>
                                    <button class="hidden" id="saveButton">Save</button>
                                    <button class="" id="editButton">Edit</button>
                                </div>
                            </li>
                            <li>
                                <strong>Last Name</strong>
                                <div>
                                    <input id="inputLastName" type="text" value="{{ $userInfo['lastname'] }}" disabled>
                                    <button class="hidden" id="saveButton">Save</button>
                                    <button class="" id="editButton">Edit</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2>Account Information</h2>
                        <ul id="account-info-container">
                            <li>
                                <strong>Email Name</strong>
                                <div>
                                    <input id="inputEmail" type="text" value="{{ $userInfo['email'] }}" disabled>
                                    <button class="" id="editButton"">Edit</button>
                                </div>
                            </li>
                            <li>
                                <strong>Password Name</strong>
                                <div>
                                    <input id="inputPassword" type="text" value="" disabled>
                                    <button class="" id="editButton"">Edit</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>    
</body>
</html>