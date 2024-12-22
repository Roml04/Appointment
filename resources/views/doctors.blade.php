<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('/css/doctors.css') }}">
    <title>Doctors</title>
</head>
<body>
    <x-header/>
    <ul>
        @foreach($doctors as $doctor)
            <li>
                <div>
                    <h2>{{ $doctor->firstname }}</h2>
                    <p>{{ $doctor->specialization }}</p>
                </div>
                <a href="/schedule"><button>Schedule an Appointment</button></a>
            </li>
        @endforeach
        
    </ul>

</body>
</html>