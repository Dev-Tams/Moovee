    @vite('resources/css/app.css')
    @vite(['resources/js/app.js', 'vendor/courier/build'])
    <header class="">
        <nav class="flex justify-between h-16">
            <div class="box-border m-2">
                <a href="/"><img src="{{asset('css/images/mlogo-nobg.png')}}" alt="logo" style="width:100px; background: #000;"></a>

            </div>


            <ul class="no-underline flex">
                <li class="list-none m-3 p-1 text-base font-semibold font-sans rounded-lg h-full text-center hover:bg-blue-500"><a class="a-link no-underline text-black hover:text-white" href="/about">About</a></li>
                <li class="list-none m-3 p-1 text-base font-sans font-semibold rounded-lg h-full w-16 text-center hover:bg-blue-500"><a class="a-link no-underline text-black hover:text-white" href="/service">Services</a></li>
                <li class="list-none m-3 p-1 w-20 text-base font-sans font-semibold rounded-lg h-full text-center hover:bg-blue-500"><a class="a-link no-underline text-black hover:text-white" href="/contact">Contact Us</a></li>
                <!-- Display this for authenticated users -->

                @auth
                <li class="list-none m-3 p-1 text-base font-sans font-semibold rounded-lg w-16 h-full text-center hover:bg-blue-500"><a class="a-link no-underline text-black hover:text-white" href="#">My Profile</a></li>
                @if(isset($service))
                <li class="list-none m-3 p-1 text-base font-sans font-semibold rounded-lg w-16 h-full text-center hover:bg-blue-500"> <a class="a-link no-underline text-black hover:text-white" href="{{ route('services.show', ['id' => $service->id]) }}">View orders</a></li>

                @else
                <li class="list-none m-3 p-1 text-base font-sans font-semibold rounded-lg w-16 h-full text-center hover:bg-blue-500"> <a class="a-link no-underline text-black hover:text-white" href="/orders">Orders</a></li>
                @endif


                <li class="list-none m-3 p-1 text-base font-sans font-semibold rounded-lg w-16 h-full text-center hover:bg-blue-500">
                    <form action="/logout" method="POST" class="">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>


                <!-- Display this for authenticated users -->
                @else
                <li class="list-none m-3 p-1 text-base font-sans font-semibold rounded-lg w-16 h-full text-center hover:bg-blue-500"><a class="a-link no-underline text-black hover:text-white" href="/login">Login</a></li>
                <li class="list-none m-3 p-1 text-base font-sans font-semibold rounded-lg w-16 h-full text-center hover:bg-blue-500"><a class="a-link no-underline text-black hover:text-white" href="/register">Register</a></li>
                @endauth
            </ul>
        </nav>
        <hr class="">
    </header>




    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>