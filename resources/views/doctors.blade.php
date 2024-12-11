<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-header/>
    <ul>
        
        <li>
            <div>
                <h2>{{ $doctorName }}</h2>
                <p>{{ $specialization }}</p>
            </div>
            <a href="/schedule"><button>Schedule an Appointment</button></a>
        </li>
    </ul>

</body>
</html>