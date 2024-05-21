<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/signin.css') }}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"> -->
    @vite(['resources/js/app.js', 'vendor/courier/build'])
    <title>Moove Signup</title>
</head>

<body class="min-h-screen">
    @extends('footer')
    <style>
    </style>
    <main class="container h-full mx auto">


        <section class="header">
            <header>
                <h1 class="text-large text-center font-sans font-bold"> Create Account</h1>
            </header>

            <p class="text-wrap text-center font-light font-serif text-base text-gray-500">
                Welcome, Create an account
            </p>

        </section>
        <div class="container flex justify-center align-middle">


            <section class="container flex justify-center align-middle">
                <form action="{{route ('register.storee') }}" method="POST">
                    @csrf
                    <div class="name">
                        <label for="name" class="text-base font-sans ml-4 font-semibold"> Name</label>
                        <input type="text" name="name" id="name" placeholder=" Enter your name" value="{{old('name')}}" autocomplete="on" class="w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 border-none text-lg shadow-sm 
                                                            focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-100 placeholder-slate-500 border-slate-200 hover:shadow-none
                                                             invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">

                        </span>
                        <div class="name-error">
                            @error('name')
                            <p>{{$message}}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="email">
                        <label for="email" class="text-base font-sans ml-4 font-semibold"> Email</label>
                        <input type="text" name="email" id="email" placeholder=" Email address" value="{{old('email')}}" autocomplete="on" class="w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 border-none text-lg shadow-sm 
                                                            focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-100 placeholder-slate-500 border-slate-200 hover:shadow-none
                                                             invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                        </span>
                        <div class="email-error">
                            @error('email')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="phone">
                        <label for="phone" class="text-base font-sans ml-4 font-semibold"> Phone number</label>

                        <input type="tel" name="phone_number" id="phone_number" placeholder=" Enter phone number" value="{{old('phone_number')}}" autocomplete="on" class="w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 border-none text-lg shadow-sm 
                                                            focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-100 placeholder-slate-500 border-slate-200 hover:shadow-none
                                                             invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                        </span>
                        <div class="phone-error">
                            @error('phone_number')
                            <p>{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="password">
                        <label for="password" class="text-base font-sans ml-4 font-semibold"> Password</label>

                        <input type="password" name="password" id="password" minlength="6" placeholder=" Create a Password" autocomplete="on" class="w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 border-none text-lg shadow-sm 
                                                            focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-100 placeholder-slate-500 border-slate-200 hover:shadow-none
                                                             invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                        <span class="icon delete" title="clear Password"></span>
                        <span class="icon reveal" title="show password"></span>
                        </span>
                        <div class="pass-error">
                            @error('password')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="password_confirmation">
                        <label for="name" class="text-base font-sans ml-4 font-semibold"> Confirm password</label>
                        <input type="password" name="password_confirmation" id="password" minlength="6" placeholder=" Confirm Password" autocomplete="on" class="w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 border-none text-lg shadow-sm 
                                                            focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-100 placeholder-slate-500 border-slate-200 hover:shadow-none
                                                             invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                        <span class="icon delete" title="clear Password"></span>
                        <span class="icon reveal" title="show password"></span>
                        </span>
                        <div class="pass-error">
                            @error('password_confirmation')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                    </div>



                    <div class="submit">
                        <input type="submit" value="Signup" id="login" class="p-2 w-96 h-12 text-base rounded-lg mt-5 ml-5 bg-blue-400 text-white border-none font-sans hover:bg-[#767c8f]">
                        <span id="rotate"></span>
                    </div>
                </form>

                <aside>
                    <p> By creating an account you agree to the <a href="/terms">User agreement</a></p>
                    <p> Already have an account? <a href="/login">Login</a></p>
                </aside>

                <section class="oauth">
                    <div class="other">
                        <span> Or other</span>

                    </div>
                    <div class="oauth-btn">
                        <div class="btn-1">
                            <button class="btn-0">
                                <svg xmlns aria-hidden="true" viewBox="0 0 30 30" width="30px" height="30px">
                                    <path d="M25.565,9.785c-0.123,0.077-3.051,1.702-3.051,5.305c0.138,4.109,3.695,5.55,3.756,5.55 c-0.061,0.077-0.537,1.963-1.947,3.94C23.204,26.283,21.962,28,20.076,28c-1.794,0-2.438-1.135-4.508-1.135 c-2.223,0-2.852,1.135-4.554,1.135c-1.886,0-3.22-1.809-4.4-3.496c-1.533-2.208-2.836-5.673-2.882-9 c-0.031-1.763,0.307-3.496,1.165-4.968c1.211-2.055,3.373-3.45,5.734-3.496c1.809-0.061,3.419,1.242,4.523,1.242 c1.058,0,3.036-1.242,5.274-1.242C21.394,7.041,23.97,7.332,25.565,9.785z M15.001,6.688c-0.322-1.61,0.567-3.22,1.395-4.247 c1.058-1.242,2.729-2.085,4.17-2.085c0.092,1.61-0.491,3.189-1.533,4.339C18.098,5.937,16.488,6.872,15.001,6.688z" />
                                </svg>

                            </button>
                        </div>
                        <div class="btn-2">
                            <button>
                                <svg aria-hidden="true" viewBox="0 0 48 48" width="48px" height="18px">
                                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                    <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                    <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                    <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                </svg>
                            </button>
                        </div>


                    </div>
                </section>
            </section>

        </div>
        <div>
            @section('footer')
        </div>
        @if(session()->has('success'))
        <p>
            {{ session()->get('success') }}
        </p>
        @endif
    </main>
</body>

</html>