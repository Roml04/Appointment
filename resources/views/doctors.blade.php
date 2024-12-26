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
    <div class="w-full px-6">
        <x-headerauth/>
        <ul>
            @foreach($doctors as $doctor)
                <li>
                    <div>
                        <h2>{{ $doctor->firstname }}</h2>
                        <p>{{ $doctor->specialization }}</p>
                        <p></p>
                    </div>
                    <a href="/schedule"><button>Schedule an Appointment</button></a>
                </li>
            @endforeach
            
        </ul>
    </div>

</body>
</html>