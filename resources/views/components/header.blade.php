<head>
    <link rel="stylesheet" href="{{ asset('/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
</head>

@auth
    <header class="header-container">

        <div class="logo-navbar-container">
            <a href="/home"><h2>Brand</h2></a>
            <nav class="nav-bar">
                
                    <ul class="list-container">
                        <li class="nav-list_item"><a class="nav-link nav-text" href="/home">Home</a></li>
                        <li class="nav-list_item"><a class="nav-link nav-text" href="/doctors">Doctors</a></li>
                        <li class="nav-list_item"><a class="nav-link nav-text" href="/appointments">Appointments</a></li>
                    </ul>
                
            </nav>
        </div>
        <hr>
    </header>
@endauth

@guest
    <header class="header-container">

        <div class="logo-navbar-container">
            <a href="/"><h2>Brand</h2></a>
            <nav class="nav-bar">

                    <ul class="list-container">
                        <li class="nav-list_item"><a class="nav-link nav-text" href="/login">Log In</a></li>
                        <li class="nav-list_item"><a class="nav-link nav-text" href="/register">Register</a></li>
                    </ul>
                
            </nav>
        </div>
        <hr>
    </header>
@endguest