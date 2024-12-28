<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedules</title>
    @vite('resources/css/app.css')
</head>
<body class="flex gap-6">
    <x-sidebar/>
    <div class="py-6 w-full space-y-5">
        <h1>Schedule an Appointment</h1>
        <form class="space-y-2.5" action="" method="">
            @csrf
            <fieldset class="flex justify-between items-center h-10">
                <label for="appointment-type">Appointment Type</label>
                <select name="" id="appointment-type" required>
                    <option value="general-consultation">General Consultation</option>
                    <option value="general-consultation">Emergency Appointment</option>
                    <option value="general-consultation">Follow-up Appointment</option>
                    <option value="general-consultation">Routine Check-up</option>
                    <option value="general-consultation">Diagnostic Appointment</option>
                    <option value="general-consultation">Health Screening Management</option>
                    <option value="general-consultation">Immunization Appointment</option>
                </select>
            </fieldset>
    
            <fieldset class="flex justify-between items-center h-10">
                <label for="appointment-date">Date</label>
                <input id="appointment-date" type="date" required>
            </fieldset>

            <fieldset class="flex justify-between items-center h-10">
                <label for="appointment_time">Time</label>
                <input id="appointment_time" type="time" required>
            </fieldset>

            <hr>
            
            <fieldset>
                <label for="additional-notes">Notes (Optional)</label><br>
                <textarea class="w-full" name="" id="additional-notes" cols="30" rows="10"></textarea><br>
            </fieldset>

            {{-- component --}}
            <fieldset class="flex justify-end">
                <input class="rounded-full py-2.5 px-5 bg-blue-500 text-white" type="submit" value="Schedule Appointment">
            </fieldset>
        </form>
    </div>
</body>
</html>