<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveEase Services</title>
</head>

<body>
    @extends('footer')
    <div class="container bg-[#fff]">
        <h1 class=" flex justify-center text-blue-950">Moovee Services</h1>



        <section id="residential-moving" class="flex flex-col justify-end items-start ml-4 bg-cover h-96 m-7 p-10 text-white" style="background-image: url('css//images/16615.jpg');" loading="lazy">
            <h2 class="block text-center font-extrabold font-serif">Residential Moving</h2>
            <div>
                <p class="text-base font-light">Moving to a new home can be a daunting task, but with MoveEase, it becomes an effortless transition. Our residential moving services are designed to cater to your every need, ensuring a stress-free experience from start to finish.</p>
            </div>
            <div>
                <div><a href="service/book" class="no-underline text-base text-center hover:bg-black rounded-xl text-white bg-blue-500 block w-16 p-3"> Order </a></div>
            </div>

        </section>

        <section id="commercial-moving" class="flex flex-col justify-end items-start ml-4 bg-cover h-96 m-7 p-10 text-white" style="background-image: url('css//images/16615.jpg');" loading="lazy">
            <h2 class="block text-center">Commercial Moving</h2>
            <p>Relocating your business is a significant endeavor, but with MoveEase, it's a seamless transition that keeps your operations running smoothly. Our commercial moving services are tailored to meet the demands of businesses of all sizes.</p>

            <div><a href="service/book" class="no-underline text-base text-center hover:bg-black rounded-xl text-white bg-blue-500 block w-16 p-3"> Order </a></div>
        </section>

        <section>
            <div class="container">
                <h1 class="text-2xl font-bold">How it Works</h1>
                <div class="grid grid-cols-6 gap-4">
                    <div class="border border-black p-4">
                        <h3>Get a quote</h3>
                        <p>Tell us a few details about your Move and we'll give you an estimate</p>
                    </div>
                    <div class="border border-black p-4">
                        <h3>Book Your Move</h3>
                        <p>You pick the date and the time that works best for you and we'll take care of the rest.</p>
                    </div>
                    <div class="border border-black p-4">
                        <h3>Professional Movers</h3>
                        <p>Our team of Professional Movers will arrive on time and ready to work</p>
                    </div>
                    <div class="border border-black p-4">
                        <h3>Delivery</h3>
                        <p>We'll deliver your belongings to your new home or office on the scheduled date.</p>
                    </div>
                    <div class="border border-black p-4">
                        <h3>Pay</h3>
                        <p>Pay for your Move securely and conveniently with any major credit card</p>
                    </div>
                    <div class="border border-black p-4">
                        <h3>Track your Move</h3>
                        <p>Stay in the loop with real-time updates on your move status</p>
                    </div>
                </div>
            </div>


        </section>
        <div>
            <section>
                <div>
                    <div class="container">
                        <h1>Why Moovee</h1>
                        <div class="grid grid-cols-7 gap-4">
                            <div class="border border-black p-4">
                                <h3>Fast and convenient</h3>
                                <p>Get a move in minutes and book your move at your convenience</p>
                            </div>
                            <div class="border border-black p-4">
                                <h3>Reliable Service</h3>
                                <p>We take the hassle out of moving with reliable service you can count on</p>
                            </div>
                            <div class="border border-black p-4">
                                <h3>Trusted by thousands</h3>
                                <p>Join thousands of satisfied customers who've made the move with Moovee</p>
                            </div>
                            <div class="border border-black p-4">
                                <h3>Move of any size</h3>
                                <p>No move is too big or small - we do it all, from single-item deliverance to full-service moves.</p>
                            </div>
                            <div class="border border-black p-4">
                                <h3>Transparent Pricing</h3>
                                <p>Know exactly what you are paying for with no hidden fees or surprise charges</p>
                            </div>
                            <div class="border border-black p-4">
                                <h3>Fully insured</h3>
                                <p>We got you covered with comprehensive insurance for added peace of mind.</p>
                            </div>
                            <div class="border border-black p-4">
                                <h3>24/7 customer support</h3>
                                <p>Have questions or need assistance? Our friendly support team is here to help anytime.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        @section('footer')
</body>

</html>