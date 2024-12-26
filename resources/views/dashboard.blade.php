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
                            
                            {{-- component? --}}
                            <input class="py-1 px-10 bg-blue-500 text-white hover:bg-blue-900" value="Search" type="submit">
                        </form>
                    </div>
                </div>
            </div>
    
            {{-- Status & Upcoming Appointments --}}
            <div class="flex p-6 gap-10 h-fit">
                <div class="w-full flex flex-col">
                    <h2 class="pb-5">Status</h2>
                    <div class="flex gap-5 flex-1">
                        <a href="/doctors" class="flex justify-between w-full items-center px-5">
                            <div>
                                <strong>1</strong>
                                <p>All Doctors</p>
                            </div>
                            <svg class="group-hover:fill-white" preserveAspectRatio="xMidYMin slice" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M20,20H4V8h16V20z"/><polygon points="13,10 11,10 11,13 8,13 8,15 11,15 11,18 13,18 13,15 16,15 16,13 13,13"/></g></g></svg>
                        </a>
                        <div class="min-h-full w-[1px] rounded-full bg-gray-300"></div>
                        <a href="" class="flex justify-between w-full items-center px-5">
                            <div>
                                <strong>1</strong>
                                <p>All Patients</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMin slice" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="4.54" r="2"/><path d="M15 17h-2c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3v-2c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5zm3-3.5h-1.86l1.67-3.67C18.42 8.5 17.44 7 15.96 7h-5.2c-.81 0-1.54.47-1.87 1.2L8.22 10l1.92.53.65-1.53H13l-1.83 4.1c-.6 1.33.39 2.9 1.85 2.9H18v5h2v-5.5c0-1.1-.9-2-2-2z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="w-full">
                    <h2 class="pb-5">Upcoming Appointments</h2>
                    <table class="border-separate border-spacing-y-2.5 w-full table-fixed">

                        <thead>
                            <tr>
                                <th class="border-b pb-2 border-gray-300">
                                    <strong>Appointment Number</strong>
                                </th>
                                <th class="border-b pb-2 border-gray-300">
                                    <strong>Type</strong>
                                </th>
                                <th class="border-b pb-2 border-gray-300">
                                    <strong>Doctor</strong>
                                </th>
                                <th class="border-b pb-2 border-gray-300">
                                    <strong>Date</strong>
                                </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            {{-- @foreach() --}}
                                <tr class="hover:bg-blue-100">
                                    <td><a class="py-2.5 flex justify-center" href="/appointments">1sdfsdf0</a></td>
                                    <td><a class="py-2.5 flex justify-center" href="/appointments">10</a></td>
                                    <td><a class="py-2.5 flex justify-center" href="/appointments">10</a></td>
                                    <td><a class="py-2.5 flex justify-center" href="/appointments">10</a></td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>

                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
</html>