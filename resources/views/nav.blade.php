    @vite('resources/css/app.css')
    @vite(['resources/js/app.js', 'vendor/courier/build'])
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">


    <header class=" container bg-[#333] text-[#fff]">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="logo ml-8 mt-2 pl-8">
                <a href="/"><img src="{{asset('css/images/mlogo-nobg.png')}}" alt="logo"></a>
            </div>
            <!-- Navigation Links -->
            <nav class="navbar flex-grow w-screen h-20 pt-2">
                <ul class="flex justify-center space-x-4 text-lg">
                    <li><a href="about" class="no-underline hover:bg-black p-2">About</a></li>
                    <li><a href="service class" class="no-underline hover:bg-black p-2">Services</a></li>
                    <li><a href="contact" class="no-underline hover:bg-black p-2">Contact</a></li>
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
                            <form action="/logout" method="POST" class="text-lg no-underline text-red-400 mr-1 hover:text-gray-200 hover:underline transition ease-in duration-100">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Display this for authenticated users -->
                @else
                <div class="flex items-baseline">
                    <a href="/login" class=" text-lg  no-underline text-red-400 mr-2 hover:text-gray-200 hover:underline transition ease-in duration-100">Login</a>
                    <a href="/register" class="no-underline  text-red-400 ml-2 hover:text-gray-200 hover:underline transition ease-in duration-100">Register</a>
                </div>
                @endauth
            </div>
        </div>
    </header>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>