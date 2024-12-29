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
        <a href="{{ route('auth.doctors.index') }}">Back</a>

        <h1>Schedule an Appointment</h1>
        <form class="space-y-2.5" action="{{ route('auth.create.appointment') }}" method="POST">
            @csrf
            <fieldset class="flex justify-between items-center h-10">
                <label for="appointment-type">Appointment Type</label>
                
                <select name="appointment_type" id="appointment-type" required>
                    <option value="general consultation">General Consultation</option>
                    <option value="emergency appointment">Emergency Appointment</option>
                    <option value="follow-up appointment">Follow-up Appointment</option>
                    <option value="routine check-up">Routine Check-up</option>
                    <option value="diagnostic appointment">Diagnostic Appointment</option>
                    <option value="health screening management">Health Screening Management</option>
                    <option value="immunization appointment">Immunization Appointment</option>
                </select>
            
            </fieldset>
    
            <fieldset class="flex justify-between items-center h-10">
                <label for="appointment-date">Date</label>
                <input name="appointment_date" id="appointment-date" type="date" required>
            </fieldset>

            <fieldset class="flex justify-between items-center h-10">
                <label for="appointment_time">Time</label>
                <input name="appointment_time" id="appointment_time" type="time" required>
            </fieldset>

            <hr>
            
            <fieldset>
                <label for="additional-notes">Notes (Optional)</label><br>
                <textarea class="w-full" name="notes" id="additional-notes" cols="30" rows="10"></textarea><br>
            </fieldset>

            {{-- component --}}
            <fieldset class="flex justify-end">
                <input class="rounded-full py-2.5 px-5 bg-blue-500 text-white" type="submit" value="Schedule Appointment">
            </fieldset>
        </form>
    </div>
</body>
</html>