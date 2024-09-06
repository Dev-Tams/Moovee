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


        <section id="residential-moving" class="grid grid-cols-2 gap-4 justify-end items-start ml-4 bg-contain  h-96 m-7 p-10 text-[#fff]" style="background-image: url('resources/images/2255.jpg');" loading="lazy">
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
                <div><a href="services/book" class="no-underline text-base text-center hover:bg-black rounded-xl
                 text-white bg-blue-500 block w-16 p-3"> Order </a></div>
            </div>
        </section>

        <div class="container">
            <h1 class="text-2xl font-bold text-center w-full">How it Works</h1>
            <div class="grid grid-cols-5 gap-4">
                <div class="border border-gray-400 p-4 hover:border-black hover:border-solid">
                    <img src="{{Vite::asset('resources/images/svg/logistic.svg')}}" alt="">
                    <h3>Get a quote</h3>
                    <p class="text-[#81a3b9] hover:text-[#223d4e]">Tell us a few details about your Move and we'll give you an estimate</p>
                </div>
                <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                    <img src="{{Vite::asset('resources/images/svg/logistics.svg')}}" alt="">
                    <h3>Book Your Move</h3>
                    <p class="text-[#81a3b9] hover:text-[#223d4e]">You pick the date and the time that works best for you and we'll take care of the rest.</p>
                </div>
                <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                    <img src="{{Vite::asset('resources/images/svg/ticks.svg')}}" alt="">
                    <h3>Professional Movers</h3>
                    <p class="text-[#81a3b9] hover:text-[#223d4e]">Our team of Professional Movers will arrive on time and ready to work</p>
                </div>
                <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                    <img src="{{Vite::asset('resources/images/svg/logistic.svg')}}" alt="">
                    <h3>Delivery</h3>
                    <p class="text-[#81a3b9] hover:text-[#223d4e]">We'll deliver your belongings to your new home or office on the scheduled date.</p>
                </div>
                <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                    <img src="{{Vite::asset('resources/images/svg/card.svg')}}" alt="">
                    <h3>Pay</h3>
                    <p class="text-[#81a3b9] hover:text-[#223d4e]">Pay for your Move securely and conveniently with any major credit card</p>
                </div>
                <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                    <img src="{{Vite::asset('resources/images/svg/calendar.svg')}}" alt="">
                    <h3>Track your Move</h3>
                    <p class="text-[#81a3b9] hover:text-[#223d4e]">Stay in the loop with real-time updates on your move status</p>
                </div>
            </div>
        </div>


        </section>
        <div>
            <section>
                <div>
                    <div class="">
                        <h1>Why Moovee?</h1>
                        <div class="grid grid-cols-5 gap-4">
                            <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                                <img src="{{Vite::asset('resources/images/svg/time.svg')}}" alt="">
                                <h3 class="">Fast and convenient</h3>
                                <p class="text-[#81a3b9] hover:text-[#223d4e]">Get a move in minutes and book your move at your convenience</p>
                            </div>
                            <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                                <img src="{{Vite::asset('resources/images/svg/tick.svg')}}" alt="">
                                <h3>Reliable Service</h3>
                                <p class="text-[#81a3b9] hover:text-[#223d4e]">We take the hassle out of moving with reliable service you can count on</p>
                            </div>
                            <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                                <img src="{{Vite::asset('resources/images/svg/persons.svg')}}" alt="">
                                <h3>Trusted by thousands</h3>
                                <p class="text-[#81a3b9] hover:text-[#223d4e]">Join thousands of satisfied customers who've made the move with Moovee</p>
                            </div>
                            <div class="border border-gray-400 p-4 hover:border-black hover:border-solid">
                                <img src="{{Vite::asset('resources/images/svg/package.svg')}}" alt="">
                                <h3>Move of any size</h3>
                                <p class="text-[#81a3b9] hover:text-[#223d4e]">No move is too big or small - we do it all, from single-item deliverance to full-service moves.</p>
                            </div>
                            <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid ">
                                <img src="{{Vite::asset('resources/images/svg/card.svg')}}" alt="">
                                <h3>Transparent Pricing</h3>
                                <p class="text-[#81a3b9] hover:text-[#223d4e]">Know exactly what you are paying for with no hidden fees or surprise charges</p>
                            </div>
                            <div class=" border border-gray-400 p-4 hover:border-black hover:border-solid">
                                <img src="{{Vite::asset('resources/images/svg/logistic.svg')}}" alt="">
                                <h3>Fully insured</h3>
                                <p class="text-[#81a3b9] hover:text-[#223d4e]">We got you covered with comprehensive insurance for added peace of mind.</p>
                            </div>
                            <div class="border border-gray-400 p-4 hover:border-black hover:border-solid">
                                <img src="{{Vite::asset('resources/images/svg/message.svg')}}" alt="">
                                <h3>24/7 customer support</h3>
                                <p class="text-[#81a3b9] hover:text-[#223d4e]">Have questions or need assistance? Our friendly support team is here to help anytime.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        @section('footer')
</body>

</html>