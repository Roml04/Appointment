<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body class="flex gap-6">
    <x-sidebar/>
    <div class="w-full">
        <x-headerauth/>
        <section class="flex flex-col w-full">

            {{-- Welcome Section --}}
            <div class="bg-[url('../../public/images/bg02.jpg')] bg-cover p-6 rounded-xl flex flex-col gap-6">
                <div class="flex flex-col gap-2.5">
                    <p>Welcome,</p>
                    <h1>{{ $userName }}</h1>
                    <p class="w-2/4">Have no idea who to consult with? No problem! Let us explore the <a class="inline hover:underline" href="/doctors">Doctors Tab</a> to find the right doctor for you. Browse through a variety of specialists, read their profiles, and make an informed choice for your health needs with just a few clicks.</p>
                </div>
                
                <div class="flex flex-col gap-2.5">
                    <h3>Or Search a Doctor Here</h3>
                    <div>
                        <form action="">
                            <input class="py-1 px-5 w-5/12" placeholder="Search..." type="text">
                            <input class="py-1 px-10 bg-blue-500 text-white hover:bg-blue-900" value="Search" type="submit">
                        </form>
                    </div>
                </div>
            </div>
    
            {{-- Status & Upcoming Appointments --}}
            <div class="flex p-6">
                <div class="w-full">
                    <h2>Status</h2>
                    <div>
                        <div>
                            <div>
                                <strong>1</strong>
                                <p></p>
                            </div>
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <h2>Upcoming Appointments</h2>
                    <table class="w-full">
                        <tr>
                            <th>
                                <strong>Appointment Number</strong>
                            </th>
                            <th>
                                <strong>Type</strong>
                            </th>
                            <th>
                                <strong>Doctor</strong>
                            </th>
                            <th>
                                <strong>Date</strong>
                            </th>
                        </tr>
        
                        {{-- @foreach() --}}
                            <tr>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                        {{-- @endforeach --}}
                        
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
</html>