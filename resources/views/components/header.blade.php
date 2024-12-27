<head>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <div class="flex flex-row justify-between">
            <div>
                <a href="{{ route('guest.landing') }}"><h2>CompanyName</h2></a>
            </div>
            <nav>
                <ul class="flex flex-row gap-5">
                    <li class="cstm-navbar-list"><a class="" href="{{ route('guest.register') }}">Register</a></li>
                    <li class="cstm-navbar-list"><a class="" href="{{ route('guest.login') }}">Log In</a></li>
                </ul>
                
            </nav>
            
        </div>
        {{-- <hr> --}}
    </header>
</body>