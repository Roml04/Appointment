<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointments</title>
    @vite('resources/css/app.css')
</head>
<body class="flex gap-6">
    <x-sidebar/>
    <div class="w-full mb-20">
        <x-headerauth>
            <h2>{{ $pagename }}</h2>
        </x-headerauth>
        <h1>Scheduled Appointments</h1>
        <table class="border-separate border-spacing-y-2.5 w-full table-fixed">
            <thead>
                <tr>
                    <th>Appointment Type</th>
                    <th>Doctor</th>
                    <th>Scheduled Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr class="py-20 group hover:bg-blue-100">
                        <td><a href="" class="py-2.5 px-10 flex justify-left">{{ $appointment['appointment_type'] }}</a></td>
                        {{-- <td><a href="" class="py-2.5 px-10 flex justify-left">{{ $appointmentDocFname = $appointment->doctor->user['firstname'] === null ? 'Uknown' : $appointment->doctor->user['firstname'] }}</a></td> --}}
                        <td><a href="" class="py-2.5 px-10 flex justify-left">{{ $appointmentDocFname = $appointment['doctor_id'] === null ? 'Uknown' : $appointment->doctor->user['firstname'] }}</a></td>
                        <td><a href="" class="py-2.5 px-10 flex justify-center"> {{ $appointment['appointment_date'] }} | {{ $appointment['appointment_time'] }} </a></td>
                        {{-- <td><a href="" class="py-2.5 px-10 flex justify-center"> {{ $appointment['notes'] }} </a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>