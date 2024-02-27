<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moove</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/style.css') }}">

</head>

<body>
    <header>
        <div class="logo">
            <img src="moveease-logo.png" alt="MoveEase Logo">
        </div>
        <nav>
            <ul>
                <li><a href="about">About</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="testify">Testimonials</a></li>
                <li><a href="contact">Contact</a></li>
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

</body>