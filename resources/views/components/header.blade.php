<head>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <div class="flex flex-row justify-between">
            <div>
                @auth
                    <a href="/dashboard"><h2>CompanyName</h2></a>
                @endauth

                @guest
                    <a href="/"><h2>CompanyName</h2></a>
                @endguest
            </div>
            <nav>
                <ul class="flex flex-row gap-5">
                    @auth
                        <li class="cstm-navbar-list"><a class="" href="/dashboard">Home</a></li>
                        <li class="cstm-navbar-list"><a class="" href="/doctors">Doctors</a></li>
                        <li class="cstm-navbar-list"><a class="" href="/appointments">Appointments</a></li>
                    @endauth
                    
                    @guest
                        <li class="cstm-navbar-list"><a class="" href="/register">Register</a></li>
                        <li class="cstm-navbar-list"><a class="" href="/login">Log In</a></li>
                    @endguest
                </ul>
                
            </nav>
            
        </div>
        {{-- <hr> --}}
    </header>
</body>