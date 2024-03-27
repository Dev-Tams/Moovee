@extends('layout')
@section('nav')
@section('content')
<section class="hero">
    <div class="overlay"></div>
    <div class="content">
        <h1>Welcome to Moovee</h1>
        <p>Providing efficient and reliable transportation solutions for individuals and businesses looking to relocate their belongings.</p>
        <a href="/quote" class="cta-btn">Request a Quote</a>
        <a href="/service" class="cta-btn">Move Now</a>
    </div>
</section>


<section class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial">
        <p>"MoveEase made my relocation stress-free and easy. Highly recommended!"</p>
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

<a href="#" class="logistics-link">Discover More Logistics Services</a>

<script src="script.js"></script>
@endsection

@section('footer')

@endsection