<head>
    @vite('resources/css/app.css')
</head>

<header>
    <div>
        <a href="/home"><h2>Brand</h2></a>
        <nav>

                <ul>
                    @auth
                        <li><a href="/home">Home</a></li>
                        <li><a href="/doctors">Doctors</a></li>
                        <li><a href="/appointments">Appointments</a></li>
                    @endauth

                    @guest
                        <li><a href="/register">Register</a></li>
                        <li><a href="/login">Log In</a></li>
                    @endguest
                </ul>
            
        </nav>
    </div>
    <hr>
</header>