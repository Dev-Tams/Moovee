<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveEase Services</title>
</head>

<body>
    @include('nav2')
    @extends('footer')
    <div class="container bg-[#fff]">
        <!-- <h1 class=" flex justify-center text-blue-950">Moovee Services</h1>
 -->


        <section id="residential-moving"
            class="grid grid-cols-2 gap-4 justify-end items-start ml-4 bg-contain  h-96 m-7 p-10 text-[#fff]"
            style="background-image: url('{{ Vite::asset('resources/images/2255.jpg') }}');" loading="lazy">
            <div>
                <h2 class="block text-center font-extrabold font-sans">Residential Moving</h2>
                <p class="text-lg font-bold font-sans">Moving to a new home can be a daunting task,
                    but with MoveEase, it becomes an effortless transition. Our residential moving services are designed
                    to cater to your every need, ensuring a stress-free experience from start to finish.</p>
            </div>
            <div class="w-auto ml-6">
                <h2 class="block text-center font-extrabold font-sans">Commercial Moving</h2>
                <p class="font-bold font-sans text-lg">Relocating your business is a significant endeavor,
                    but with MoveEase, it's a seamless transition that keeps your operations running smoothly.
                    Our commercial moving services are tailored to meet the demands of businesses of all sizes.</p>
            </div>
            <div class="mt-6">
                <div><a href="services/book"
                        class="no-underline text-base text-center hover:bg-black rounded-xl
                 text-white bg-blue-500 block w-16 p-3">
                        Order </a></div>
            </div>
        </section>

        <div class="container">
            <h1 class="text-2xl font-bold text-center w-full">How it Works</h1>
            <div class="grid grid-cols-5 gap-4">
                <x-service-card>
                    <x-slot:img>{{ Vite::asset('resources/images/svg/logistic.svg') }}</x-slot>
                    <x-slot:heading>"Get a quote"</x-slot:heading>
                    Tell us a few details about your Move and we'll give you an estimate"
                </x-service-card>

                <x-service-card>
                    <x-slot:img>{{ Vite::asset('resources/images/svg/logistics.svg') }}</x-slot:img>
                    <x-slot:heading>Book Your Move</x-slot:heading>
                    You pick the date and the time that works best for
                    you and we'll take care of the rest.
                </x-service-card>

                <x-service-card>
                    <x-slot:img>{{ Vite::asset('resources/images/svg/ticks.svg') }}</x-slot:img>
                    <x-slot:heading>Professional Movers</x-slot:heading>
                    Our team of Professional Movers will arrive on time
                    and ready to work
                </x-service-card>


                <x-service-card>
                    <x-slot:img>{{ Vite::asset('resources/images/svg/logistic.svg') }}</x-slot:img>
                    <x-slot:heading>Delivery</x-slot:heading>
                    We'll deliver your belongings to your new home or
                    office on the scheduled date.
                </x-service-card>

                <x-service-card>
                    <x-slot:img> {{ Vite::asset('resources/images/svg/card.svg') }}</x-slot:img>
                    <x-slot:heading>Pay</x-slot:heading>
                    Pay for your Move securely and conveniently with any
                    major credit card
                </x-service-card>

                <x-service-card>
                    <x-slot:img>{{ Vite::asset('resources/images/svg/calendar.svg') }}</x-slot:img>
                    <x-slot:heading>Track your Move</x-slot:heading>
                    Stay in the loop with real-time updates on your move status
                </x-service-card>
            </div>
        </div>

        <section>
            <div>
                <h1>Why Moovee?</h1>
                <div class="grid grid-cols-5 gap-4">

                    <x-service-card>
                        <x-slot:img>{{ Vite::asset('resources/images/svg/time.svg') }}</x-slot:img>
                            <x-slot:heading> Fast and convenient</x-slot:heading>
                            Get a move in minutes and
                            book your move
                            at your convenience
                    </x-service-card>

                    <x-service-card>
                        <x-slot:img>{{ Vite::asset('resources/images/svg/tick.svg') }}</x-slot:img>
                            <x-slot:heading> Reliable Service</x-slot:heading>
                            We take the hassle out of
                            moving with
                            reliable service you can count on
                    </x-service-card>

                    <x-service-card>
                        <x-slot:img>{{ Vite::asset('resources/images/svg/persons.svg') }}</x-slot:img>
                            <x-slot:heading> Trusted by thousands</x-slot:heading>
                            Join thousands of
                            satisfied customers
                            who've made the move with Moovee
                    </x-service-card>

                    <x-service-card>
                        <x-slot:img>{{ Vite::asset('resources/images/svg/package.svg') }}</x-slot:img>
                            <x-slot:heading> Move of any size</x-slot:heading>
                            No move is too big or small
                            - we do it
                            all, from single-item deliverance to full-service moves.
                            </x-service-cardg>


                            <x-service-card>
                                <x-slot:img>{{ Vite::asset('resources/images/svg/card.svg') }}</x-slot:img>
                                    <x-slot:heading> Transparent Pricing</x-slot:heading>
                                    Know exactly what
                                    you are paying for with
                                    no hidden fees or surprise charges
                            </x-service-card>

                            <x-service-card>
                                <x-slot:img>{{ Vite::asset('resources/images/svg/logistic.svg') }}</x-slot:img>
                                    <x-slot:heading> Fully insured</x-slot:heading>
                                    We got you covered with
                                    comprehensive
                                    insurance for added peace of mind.
                            </x-service-card>

                            <x-service-card>
                                <x-slot:img>{{ Vite::asset('resources/images/svg/message.svg') }}</x-slot:img>
                                    <x-slot:heading> 24/7 customer support</x-slot:heading>
                                        Have questions or need assistance? Our
                                        friendly support team is here to help anytime.
                            </x-service-card>

                </div>
            </div>
        </section>
    </div>
    @section('footer')
    </body>

    </html>
