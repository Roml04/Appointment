<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedules</title>
</head>
<body>
    <x-header />
    <h1>Schedule an Appointment</h1>
    <form action="">
        @csrf
        <label for="appointment-type">Appointment Type</label><br>
        <select name="" id="appointment-type">
            <option value="general-consultation">General Consultation</option>
            <option value="general-consultation">Emergency Appointment</option>
            <option value="general-consultation">Follow-up Appointment</option>
            <option value="general-consultation">Routine Check-up</option>
            <option value="general-consultation">Diagnostic Appointment</option>
            <option value="general-consultation">Health Screening Management</option>
            <option value="general-consultation">Immunization Appointment</option>
        </select><br>

        <label for="appointment-date">Date</label><br>
        <input id="appointment-date" type="date"><br>
        <label for="appointment-time">Time</label><br>
        <input id="appointment-time" type="time"><br>

        <label for="additional-notes">Notes (Optional)</label><br>
        <textarea name="" id="additional-notes" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Schedule Appointment">
    </form>
</body>
</html>