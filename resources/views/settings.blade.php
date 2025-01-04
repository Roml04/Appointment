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
        width: 100%; class="flex flex-col gap-3"
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
            <form action="{{ route('auth.settings.edit') }}" method="POST" class="w-full flex flex-col gap-6">

                @csrf
                <div>
                    <div id="parent-container" class="flex flex-col gap-12">
                        <div class="flex flex-col gap-3">
                            <h2 class="">Personal Information</h2>
                            <ul class="pl-6 flex flex-col gap-3" id="personal-info-container">
                                <li>
                                    <p>First Name</p>
                                    <div class="flex justify-center gap-6">
                                        <input placeholder="First Name" name="firstname" class="focus:outline-none py-1 px-5" id="inputFirstName" type="text" value="{{ $userInfo['firstname'] }}" >
                                        <div class="flex justify-center gap-6">
                                            <button type="button" class="hidden" id="saveButton">Save</button>
                                            <button type="button" class="" id="editButton">Edit</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Middle Name</p>
                                    <div class="flex justify-center gap-6">
                                        <input placeholder="Middle Name" name="middlename" class="focus:outline-none py-1 px-5" id="inputMiddleName" type="text" value="{{ $userInfo['middlename'] }}">
                                        <div class="flex justify-center gap-6">
                                            <button type="button" class="hidden" id="saveButton">Save</button>
                                            <button type="button" class="" id="editButton">Edit</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Last Name</p>
                                    <div class="flex justify-center gap-6">
                                        <input placeholder="Last Name" name="lastname" class="focus:outline-none py-1 px-5" id="inputLastName" type="text" value="{{ $userInfo['lastname'] }}">
                                        <div class="flex justify-center gap-6">
                                            <button type="button" class="hidden" id="saveButton">Save</button>
                                            <button type="button" class="" id="editButton">Edit</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Birthdate</p>
                                    <div class="flex justify-center gap-6">
                                        <input placeholder="Birthdate" name="birthdate" class="focus:outline-none py-1 px-5" id="inputBirthDate" type="date" value="{{ $userInfo['birthdate'] }}">
                                        <div class="flex justify-center gap-6">
                                            <button type="button" class="hidden" id="saveButton">Save</button>
                                            <button type="button" class="" id="editButton">Edit</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Contact Number</p>
                                    <div class="flex justify-center gap-6">
                                        <input placeholder="Phone Number" name="contact" class="focus:outline-none py-1 px-5" id="inputContact" type="text" value="{{ $userInfo['contact'] }}">
                                        <div class="flex justify-center gap-6">
                                            <button type="button" class="hidden" id="saveButton">Save</button>
                                            <button type="button" class="" id="editButton">Edit</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h2>Account Information</h2>
                            <ul class="pl-6 flex flex-col gap-3" id="account-info-container">
                                <li>
                                    <p>Email</p>
                                    <div class="flex justify-center gap-6">
                                        <input placeholder="Email" name="email" class="focus:outline-none py-1 px-5" id="inputEmail" type="text" value="{{ $userInfo['email'] }}">
                                        <div class="flex justify-center gap-6">
                                            <button type="button" class="hidden" id="saveButton">Save</button>
                                            <button type="button" class="" id="editButton"">Edit</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Password</p>
                                    <div class="flex justify-center gap-6">
                                        <input placeholder="Password" name="password" class="focus:outline-none py-1 px-5" id="inputPassword" type="text" value="">
                                        <div class="flex justify-center gap-6">
                                            <button type="button" class="hidden" id="saveButton">Save</button>
                                            <button type="button" class="" id="editButton"">Edit</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="w-full flex justify-end gap-6">
                    <input class="hidden" id="save-button" type="submit" value="Save">
                    <input class="hidden" id="discard-button" type="button" value="Discard Changes">
                </div>
            </form>
        </section>
    </div>    
</body>
</html>