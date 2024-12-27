@php
    use Carbon\Carbon;

    $currentDate = Carbon::now()->format('M d, Y');
    $currentTime = Carbon::now()->format('h:i A');
    
@endphp

<head>
    @vite('resources/css/app.css')
</head>
<header class="flex flex-row justify-between w-full">
    <div class="flex flex-row items-center gap-5">
        {{ $slot }}  
        <form action="" class="flex justify-center items-center gap-1">
            <input placeholder="Search..." class="border-[1px] rounded-full border-gray-300 h-full px-5" type="text">
            <input class="h-full px-5 rounded-full cursor-pointer hover:underline" value="Search" type="submit">
        </form>
    </div>

    <div class="cursor-pointer flex items-center gap-2.5">
        <div>
            <p class="text-right">{{ $currentTime }}</p>
            <p><strong>{{ $currentDate }}</strong></p>
        </div>
        <div class="p-2.5">
            <svg class="size-[1.5rem]" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.24000000000000005"></g><g id="SVGRepo_iconCarrier"> <path d="M3 9H21M7 3V5M17 3V5M6 12H10V16H6V12ZM6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#000000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>   
        </div>
    </div>
</header>