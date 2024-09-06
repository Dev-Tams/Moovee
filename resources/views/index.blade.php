@extends('footer')
@extends('layout')
@section('content')
    @if (session('about'))
        <div class="alert alert-success">
            {{ session('about') }}
        </div>
    @endif

    <section class="hero bg-slate-500 bg-cover  " style="background-image: url('css//images/16615.jpg');" loading="lazy">
        <div class="overlay"></div>
        <div class="content">
            <h1>Make your Moovee</h1>
            <p>Providing efficient and reliable transportation solutions for individuals and businesses looking to relocate
                their belongings.</p>
            <a href="/quote" class="cta-btn bg-red-500 rounded-lg mr-1 hover:bg-gray-900">Request a Quote</a>
            <a href="/services" class="cta-btn bg-red-500 rounded-lg mr-2 hover:bg-gray-900">Book Now</a>
        </div>
    </section>

    <main class="bg-[#fff]">
        <section class="services text-base">
            <h2 class="text-4xl">Our Services</h2>
            <div class="service flex justify-evenly">
                <div class="card-img">
                    <img src="{{ Vite::asset('resources/images/1920.jpg') }}"
                        alt="Business owner ready to ship her customers' orders. Close up of female hands putting tape on a big package with products"
                        loading="lazy">
                </div>
                <div class="py-16">
                    <h3>Residential Moving</h3>
                    <p class="text-2xl">From packing to unpacking, we handle it all.</p>

                </div>

            </div>
            <div class="business flex justify-evenly items-center flex-row-reverse ">
                <div class="card-img">
                    <img src="{{ Vite::asset('resources/images/1268.jpg') }}"
                        alt="Young worker loading cardboard boxes in a
                 delivery van and communicating with his colleague"
                        loading="lazy">
                </div>
                <div class="py-16">
                    <h3>Commercial Moving</h3>
                    <p class="text-2xl">Efficient solutions for businesses looking to relocate.</p>
                    <p class="text-2xl">We take the
                        burden of logistics off you.
                    </p>
                </div>

            </div>

        </section>


        <section class="testimonials">
            <h2>What Our Customers Say</h2>
            <div class="testimonial">
                <p>"Moovee made my relocation stress-free and easy. Highly recommended!"</p>
                <span>- John Doe</span>
            </div>
        </section>


    </main>


    <script src="script.js"></script>
@endsection
@section('footer')
@endsection
