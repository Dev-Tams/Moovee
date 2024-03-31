<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moove</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('/dropdown.css') }}"> -->

</head>

<body>
    <x-flash-success />
    <header>
        <div class="logo">
            <img src="moveease-logo.png" alt="MoveEase Logo">
        </div>
        <nav>
            <ul>
                <li><a href="about">About</a></li>
                <li><a href="service">Services</a></li>
                <li><a href="testify">Testimonials</a></li>
                <li><a href="contact">Contact</a></li>

                @guest <!-- Display this for guests (not logged in) -->
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>

                @else <!-- Display this for authenticated users -->
                <li>
                    <a href="#">Hello, {{ auth()->user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="/orders">Orders</a></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
            </div>
            </ul>
        </nav>
        @yield('nav')
    </header>
    <div>
        @yield('content')

    </div>
    <footer>
        @yield('footer')
        <section id="logistics-services">
            <h2>Logistics Services</h2>
            <p>For dedicated logistics services, please visit our dedicated logistics section.</p>
            <a href="#logistics" class="btn">Explore Logistics Services</a>
        </section>
        <p>&copy; 2024 MoveEase Logistics. All rights reserved.</p>
    </footer>

    @if(session()->has('success'))
    <p>
        {{ session()->get('success') }}
    </p>
    @endif


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>