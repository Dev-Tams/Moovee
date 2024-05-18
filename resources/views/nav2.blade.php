    @vite('resources/css/app.css')
    @vite(['resources/js/app.js', 'vendor/courier/build'])
    <header class="">
        <nav class="">
            <div class="w-2 box-border">
                <a href="/"><img src="{{asset('css/images/mlogo-nobg.png')}}" alt="logo"></a>

            </div>


            <ul class="no-underline ">
                <li><a class="a-link no-underline text-white" href="">About</a></li>
                <li><a class="a-link no-underline text-white" href="">Services</a></li>
                <li><a class="a-link no-underline text-white" href="">Contact Us</a></li>
                <!-- Display this for authenticated users -->

                @auth
                <li><a class="a-link no-underline text-white" href="#">My Profile</a></li>
                @if(isset($service))
                <li> <a class="a-link no-underline text-white" href="{{ route('services.show', ['id' => $service->id]) }}">View orders</a></li>

                @else
                <li> <a class="a-link no-underline text-white" href="/orders">Orders</a></li>
                @endif


                <li>
                    <form action="/logout" method="POST" class="">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>


                <!-- Display this for authenticated users -->
                @else
                <li><a class="a-link no-underline text-white" href="/login">Login</a></li>
                <li><a class="a-link no-underline text-white" href="/register">Register</a></li>
                @endauth
            </ul>
        </nav>
    </header>




    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>