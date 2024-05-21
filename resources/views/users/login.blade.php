<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    @vite(['resources/js/app.js'])
    <title>Moove sign In</title>
</head>

<body class="min-h-screen">
    @include('./nav2')
    @extends('footer')
    <style>
    </style>
    <main class="container h-ful mx auto">

        <section class="header">
            <header>
                <h1 class="text-large text-center font-sans font-bold"> Log In</h1>
            </header>

            <p class="text-wrap text-center font-light font-serif text-base text-gray-500">
                Welcome, Sign in to your account
            </p>


        </section>
        <div class="container flex justify-center align-middle">
            <main class="style-container">
                <form action="" method="post" name="login-form">
                    @csrf
                    <div class="name-email">
                        <label for="email" class="text-base font-sans ml-4 font-semibold"> Email</label>
                        <span class="p-w">
                            <input type="text" name="email" id="email" placeholder="provide your email address" autocomplete="on" class="w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 border-none text-lg shadow-sm 
                                                            focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-100 placeholder-slate-500 border-slate-200 hover:shadow-none
                                                             invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                        </span>
                        <div class="email-error">
                            @error('email')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="password">
                        <label for="password" class="text-base font-sans ml-4 mt-2 font-semibold"> Password</label>

                        <span class="p-w">
                            <input type="password" name="password" id="password" minlength="6" placeholder="Password" autocomplete="on" class="w-96 h-11 p-2 mx-4  rounded-lg mt-1 block px-3 py-2 border-none text-lg shadow-sm 
                                                            focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-100 placeholder-slate-500 border-slate-200 hover:shadow-none
                                                             invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                            <span class="icon delete" title="clear Password"></span>
                            <span class="icon reveal" title="show password"></span>
                        </span>
                        <div class="pass-error invalid:text-pink-500">
                            @error('password')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                    </div>

                    <span class="forgot-p ml-4 my-0">
                        <a href="/sigin/reset" class="text-light text-slate-400 underline hover:text-blue-300">Forgot Password?</a>
                    </span>
                    <div class="submit">
                        <input type="submit" value="Login" id="login" class="p-2 w-96 h-12 text-base rounded-lg mt-5 ml-5 bg-blue-400 text-white border-none font-sans hover:bg-[#767c8f]">
                        <span id="rotate"></span>
                    </div>
                    <div class=" ml-4 my-3">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="w-8 mt-3">Remember Me</label>
                    </div>
                </form>

                <aside>
                    <p class="text-black text-center"> Don't have an account? <a href="/register" class="underline text-light text-slate-600 hover:text-blue-300 cursor-pointer">Sign up</a></p>
                </aside>

                
        </div>
        @section('footer')
        <script src="/public/resources/js/sigin.js"></script>
    </main>
</body>

</html>