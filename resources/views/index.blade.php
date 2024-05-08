@extends('footer')
@extends('layout')
@section('content')


<section  id="hero" class="hero bg-slate-500 bg-cover h-screen " style="background-image: url('css//images/16615.jpg');">
    <div class="overlay"></div>
    <div class="content">
        <h1>Make your Moovee</h1>
        <p>Providing efficient and reliable transportation solutions for individuals and businesses looking to relocate their belongings.</p>
        <a href="/quote" class="cta-btn bg-red-500 rounded-lg mr-1 hover:bg-gray-900">Request a Quote</a>
        <a href="/service" class="cta-btn bg-red-500 rounded-lg mr-2 hover:bg-gray-900">Book Now</a>
    </div>
</section>


<section class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial">
        <p>"Moove made my relocation stress-free and easy. Highly recommended!"</p>
        <span>- John Doe</span>
    </div>
</section>

<section class="services">
    <h2>Our Services</h2>
    <div class="service">
        <h3>Residential Moving</h3>
        <p>From packing to unpacking, we handle it all.</p>
    </div>
    <div class="service">
        <h3>Commercial Moving</h3>
        <p>Efficient solutions for businesses looking to relocate.</p>
    </div>
</section>



<script src="script.js"></script>

@endsection
@section('footer')
@endsection