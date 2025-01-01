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
        <div class="flex gap-20 py-4 px-10 rounded-md border border-blue-300 bg-blue-100">

            <div class="flex gap-3">
                <svg class="group-hover:fill-blue-500" preserveAspectRatio="xMidYMin slice" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M20,20H4V8h16V20z"/><polygon points="13,10 11,10 11,13 8,13 8,15 11,15 11,18 13,18 13,15 16,15 16,13 13,13"/></g></g></svg>
                <h3>{{ $doctor['docFullName'] }}</h3>
            </div>

            <div class="flex gap-3">
                <svg class="group-hover:fill-blue-500" preserveAspectRatio="xMidYMin slice" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"/></svg>
                <h3>{{ $doctor['specialization'] }}</h3>
            </div>

        </div>
        <form class="space-y-2.5" action="{{ route('auth.appointment.create', ["doctor_id" => $doctor_id]) }}" method="POST">
            @csrf
            <fieldset class="flex justify-between items-center h-10">
                <label for="appointment-type">Appointment Type</label>
                
                <select name="appointment_type" id="appointment-type" required>
                    <option value="General Consultation">General Consultation</option>
                    <option value="Emergency Appointment">Emergency Appointment</option>
                    <option value="Follow-up Appointment">Follow-up Appointment</option>
                    <option value="Routine Check-up">Routine Check-up</option>
                    <option value="Diagnostic Appointment">Diagnostic Appointment</option>
                    <option value="Health Screening Management">Health Screening Management</option>
                    <option value="Immunization Appointment">Immunization Appointment</option>
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