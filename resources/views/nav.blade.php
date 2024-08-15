    @vite('resources/css/app.css')
    @vite(['resources/js/app.js', 'vendor/courier/build'])
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">







    <header class=" containertext-[#fff] mt-2">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="logo ml-8 mt-2 pl-8">
                <a href="/"><img src="{{ asset('css/images/mlogo-nobg.png') }}" alt="logo"></a>
            </div>
            <!-- Navigation Links -->
            <nav class="navbar flex-grow w-screen h-20 pt-2">
                <ul class="flex justify-center space-x-4 text-lg">
                    <li><a href="about"
                            class="navlink no-underline p-2 hover:text-red-200 hover:underline transition ease-out duration-300">About</a>
                    </li>
                    <li><a href="{{ route('services.info') }}"
                            class="navlink no-underline hover:text-red-200 hover:underline transition ease-out duration-300">Services</a>
                    </li>
                    <li><a href="contact"
                            class="navlink no-underline p-2 hover:text-red-200 hover:underline transition ease-out duration-30">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Login/Register Links -->
            <div>
                @auth <!-- Display this for authenticated users -->
                    <div>
                        <a href="#">Hello, {{ auth()->user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <a href="{{ route('services.orders') }}">My orders</a>
                            <li>
                                <form action="/logout" method="POST"
                                    class="text-lg no-underline text-red-400 mr-1 hover:text-gray-200 hover:underline transition ease-in duration-100">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- Display this for authenticated users -->
                @else
                    <div class="flex items-baseline">
                        <a href="/login"
                            class=" text-lg  no-underline text-red-400 mr-2 hover:text-gray-200 hover:underline transition ease-in duration-100">Login</a>
                        <a href="/register"
                            class="no-underline  text-red-400 mx-3 hover:text-gray-200 hover:underline transition ease-in duration-100">Register</a>
                    </div>
                @endauth
            </div>
        </div>
    </header>




    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
