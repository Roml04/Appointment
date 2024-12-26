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
    <div class="w-full px-6">
        <x-headerauth/>
        <h1>Scheduled Appointments</h1>
        <table>
            <tr>
                <th>Appointment Type</th>
                <th>Doctor</th>
                <th>Scheduled Date</th>
            </tr>
            <tr>
                <td>--</td>
                <td>--</td>     
                <td>--</td>
            </tr>
        </table>
    </div>
</body>
</html>