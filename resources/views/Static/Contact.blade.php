<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>contact Moovee Logistics</title>
</head>

@extends('footer')
@include('nav')

<body class="mt-4">
    <div class="md: container md:mx-auto flex items-center flex-col bg-gray-100">
        <h1 class="mb-8"> Welcome to Moove logistics. </h1>

        <h2 class="mb-0"> Want to get in touch with us?</h2>

        <section class="bg-white rounded-lg mx-auto max-w-lg my-4 p-4 sm:p-10">

            <form action="{{route('contact.store')}}" method="POST" class="box-border ">
                @csrf
                <div>
                    <label for="Name" class="block font-bold text-lg mb-0"> Your Name</label>
                    <input type="text" name="name" placeholder="Input your name" value="{{old('name')}}" class="text-base mt-0 h-12 w-64 border border-black rounded-md px-4">
                    @error('name')
                    <p>{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="email" class="block font-bold text-lg mb-0 mt-4"> Your email address</label>
                    <input type="email" name="email" placeholder="Provide a valid email address" value="{{old('email')}}" class=" text-base mt-0 h-12 w-64 rounded-md px-4">
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>

                <textarea name="message" id="" rows="5" placeholder="What's your message?" value="{{old('message')}}" class="mt-4 border-gray-300 p-3 w-full rounded-md
                 text-base resize-y" style="width: 267px; height: 157px;"></textarea>
                @error('message')
                <p>{{$message}}</p>
                @enderror

                <div>
                    <input type="submit" value="submit" class="text-base mt-4 ml-14 h-12 w-52 rounded-md px-4 shadow-sm text-black hover:text-white hover:bg-black font-bold">
                </div>
            </form>
        </section>
    </div>

    @section('footer')
</body>

</html>