<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Details</title>
</head>
<style>
    
</style>
<body class="flex gap-6">
    <x-sidebar/>
    <div class="w-full mb-20">
        
        <header>
            <a href="{{ route('auth.appointment.index') }}">Back</a>
        </header>
        <section class="flex flex-col gap-6 rounded-md">

            {{-- Appointment Details --}}
            <div class="flex w-full flex-col gap-6">
                <h2>Appointment Details</h2>
                <div class="border border-blue-300 bg-blue-100 rounded-md py-4 px-10 flex w-full justify-between">
                    <div class="flex min-w-fit items-center gap-3">
                        <?xml version="1.0" encoding="utf-8"?><svg preserveAspectRatio="xMidYMin slice" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 4L7 20M17 4L14 20M5 8H20M4 16H19" stroke="#000000" stroke-width="2" stroke-linecap="round"/></svg>
                        <div class="flex items-center gap-3">
                            <h1 class="">{{ $appointmentDetails['id'] }}</h1>
                            <p class="">Appointment Number</p>  
                        </div>  
                    </div>
                    
                    <ul class="w-[70%] grid grid-cols-3 gap-6 justify-items-center">
                        <li class="flex gap-3 justify-center items-center overflow-hidden">
                            <svg preserveAspectRatio="xMidYMin slice" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"/></svg>
                            <p title="{{ $appointmentDetails['appointment_type'] }}" class="cursor-pointer text-nowrap overflow-hidden text-ellipsis">{{ $appointmentDetails['appointment_type'] }}</p>
                        </li>
                        <li class="flex gap-3 justify-center items-center overflow-hidden">
                            <svg preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M3 9H21M7 3V5M17 3V5M6 12H10V16H6V12ZM6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#000000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                            <p title="{{ $appointmentDetails['appointment_date'] }}" class="cursor-pointer text-nowrap overflow-hidden text-ellipsis">{{ $appointmentDetails['appointment_date'] }}</p>
                        </li>
                        <li class="flex gap-3 justify-center items-center overflow-hidden">
                            <svg preserveAspectRatio="xMidYMin slice" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M12 7V12L9.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                            <p title="{{ $appointmentDetails['appointment_time'] }}" class="cursor-pointer text-nowrap overflow-hidden text-ellipsis">{{ $appointmentDetails['appointment_time'] }}</p>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Doctor & Patient Details --}}
            <div class="flex w-full items-center gap-6">
                <a href="{{ route('auth.doctors.index') }}" class="border rounded-md bg-gray-200 border-gray-300 gap-3 py-8 px-10 flex flex-col w-full">
                    <h3>Doctor</h3>
                    <div class="flex items-center gap-10">
                        <img class="aspect-square size-40 rounded-full" src="{{ asset('images/userpfp/default-userpfp.jpg') }}" alt="">
                        <div class="flex flex-col justify-start">
                            <h3>{{ $appointmentDetails->docFullName }}</h3>
                            <p>{{ $appointmentDetails->docSpecialization }}</p>
                        </div>
                    </div>
                </a>

                <a class="border rounded-md bg-gray-200 border-gray-300 gap-3 py-8 px-10 flex flex-col w-full">
                    <h3>Patient</h3>
                    <div class="flex items-center gap-10">
                        <img class="aspect-square size-40 rounded-full" src="{{ asset('images/userpfp/default-userpfp.jpg') }}" alt="">
                        <div class="flex flex-col justify-start">
                            <h3>{{ $appointmentDetails->patFullName }}</h3>
                            <p>Patient</p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Additional Info --}}
            <div class="py-4 px-10 border rounded-md border-gray-300 space-y-2.5">
                <h3>Notes</h3>
                <p class="">{{ $appointmentDetails->notes }}</p>
            </div>
            
            <form class="flex justify-end" action="{{ route('auth.appointment.delete', ["appointment_id" => $appointmentDetails['id']]) }}" method="POST">
                @csrf
                <button type="submit" class="hover:outline rounded-md hover:outline-red-400 hover:outline-2 active:bg-red-800 active:text-white active:outline-red-800 hover:text-red-600 hover:bg-red-200 bg-gray-300 py-2.5 px-5 w-[25%]">Cancel Appointment</button>
            </form>
        </section>

    </div>
</body>
</html>