<head>
    @vite('resources/css/app.css')
    <style>
        a {
            display: flex;
            justify-content: start;
        }

        li {
            width: 80%;
            display: flex;
            justify-content: start;
        }
    </style>
</head>

<nav class="flex flex-col justify-center w-1/5 gap-12">

    {{-- User Info --}}
    <div class="flex flex-col">
        <div class="flex">
            <img src="" alt="">
            <div class="flex-1">
                <h3>Name</h3>
                <p>Email</p>
            </div>
        </div>
        <button>Log Out</button>
    </div>

    {{-- Sidebar Items --}}
    <ul class="flex flex-col gap-6">
        <li class="group rounded-full hover:bg-black w-full">
            <a class="px-10 py-2.5 h-full w-full group-hover:text-white gap-2" href="/dashboard">
                <svg class="group-hover:fill-white" preserveAspectRatio="xMidYMin slice" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></svg>
                Dashboard
            </a>
        </li>
        <li class="group rounded-full hover:bg-black w-full">
            <a class="px-10 py-2.5 h-full w-full group-hover:text-white gap-2" href="/doctors">
                <svg class="group-hover:fill-white" preserveAspectRatio="xMidYMin slice" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M20,20H4V8h16V20z"/><polygon points="13,10 11,10 11,13 8,13 8,15 11,15 11,18 13,18 13,15 16,15 16,13 13,13"/></g></g></svg>
                Doctors
            </a>
        </li>
        <li class="group rounded-full hover:bg-black w-full">
            <a class="px-10 py-2.5 h-full w-full group-hover:text-white gap-2" href="/appointments">
                <svg class="group-hover:fill-white" preserveAspectRatio="xMidYMin slice" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"/></svg>
                Appointments
            </a>
        </li>
    </ul>
</nav>