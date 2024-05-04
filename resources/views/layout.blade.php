<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moove</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <x-flash-success />
    <header class=" container bg-[#333] text-[#fff]">
        <div class="flex justify-between items-center px-6 py-4">
            <!-- Logo -->
            <div class="logo">
                <!-- Your logo content here -->
            </div>
            <!-- Navigation Links -->
            <nav class="flex-grow">
                <ul class="flex justify-center space-x-4">
                    <li><a href="about" class="no-underline hover:bg-black">About</a></li>
                    <li><a href="service class" class="no-underline hover:bg-black">Services</a></li>
                    <li><a href="contact" class="no-underline hover:bg-black">Contact</a></li>
                </ul>
            </nav>
            <!-- Login/Register Links -->
            <div>
                @auth <!-- Display this for authenticated users -->
                <div>
                    <a href="#">Hello, {{ auth()->user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Profile</a></li>
                        @if(isset($service))
                        <a href="{{ route('services.show', ['id' => $service->id]) }}">View orders</a>
                        @else
                        <a href="/orders">Orders</a>
                        @endif
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Display this for authenticated users -->
                @else
                <div class="flex">
                    <a href="/login" class="no-underline text-red-400 mr-1 hover:text-gray-200 hover:underline transition ease-in duration-100">Login</a>
                    <a href="/register" class="no-underline text-red-400 hover:text-gray-200 hover:underline transition ease-in duration-100">Register</a>
                </div>
                @endauth
            </div>
        </div>
    </header>
    @yield('content')

    @if(session()->has('success'))
    <p>
        {{ session()->get('success') }}
    </p>
    @endif

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>