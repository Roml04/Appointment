<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctors</title>
    @vite('resources/css/app.css')
</head>
<body class="flex gap-6">
    <x-sidebar/>
    <div class="w-full mb-20">
        <x-headerauth>
            <h2>{{ $pagename }}</h2>
        </x-headerauth>
        <ul class="doctor-list space-y-5">

            @foreach($doctors as $doctor)
                <li class="group  flex w-full justify-between px-5 py-2.5">
                    <div>
                        <h2>{{ $doctor['docFullName'] }}</h2>
                        <p>{{ $doctor['specialization'] }}</p>
                        <p></p>
                    </div>
                    
                    {{-- @dump($doctor) --}}
                    <a class="hidden hover:bg-blue-900 group-hover:block bg-blue-500 group-hover:text-white px-5 py-2 my-auto rounded-full" href="{{ route('auth.doctors.schedule', ["doctor_id" => $doctor['id']]) }}">Schedule an Appointment</a>
                </li>
            @endforeach
            
        </ul>
    </div>

</body>
</html>