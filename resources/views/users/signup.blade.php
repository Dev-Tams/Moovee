<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/signin.css') }}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"> -->
    @vite(['resources/js/app.js'])
    <title>Moove Signup</title>
</head>

<body class="min-h-screen">
    @include('./nav2')
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


            <section class="">
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
                    <p class="text-black text-center"> By creating an account you agree to the <a href="/terms" class="underline text-light text-slate-600 hover:text-blue-300">User agreement</a></p>
                    <p class="text-black text-center"> Already have an account? <a href="/login" class="underline text-light text-slate-600 hover:text-blue-300 cursor-pointer">Login</a></p>
                </aside>


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