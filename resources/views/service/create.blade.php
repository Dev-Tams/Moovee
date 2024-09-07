 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>MoveEase Services</title>
     <script src="https://www.google./recapcomtcha/api.js" async defer></script>
 </head>

 <body>
     @extends('footer')
     @include('./nav2')


     <!-- Request Form Section -->
     <section id="request-form" class="mt-0 container h-fullmx-auto w-10/12">
         <h2 class="text-large text-center font-sans font-bold">Book Service</h2>


         <div class="flex justify-center align-middle">


             <form action="{{ route('service.store') }}" method="post">
                 @csrf

                 <x-label label="Service Type">Service Type</x-label>
                 <select id="service-type" name="service_type"
                     class="w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm focus:outline focus:ring-2 placeholder-slate-500 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                     <option value="residential-moving">Residential Moving</option>
                     <option value="commercial-moving">Commercial Moving</option>
                 </select>


                 <div class="pickup">
                     <x-label label="Pickup">Pickup Location</x-label>
                     <x-service-create name="pickup_street_address" placeholder="Street Address"
                         value="{{ old('pickup_streeet_address') }}" />
                     <x-service-create name="pickup_landmark" placeholder="Landmark" value="{{ old('pickup_landmark') }}" />

                     <div class="flex w-[28rem]">
                         <x-trim-service-create name="pickup_city" placeholder="city" value="{{ old('pickup_city') }}" />
                         <x-trim-service-create name="pickup_state" placeholder="state" value="{{ old('pickup_state') }}" />
                     </div>



                 </div>

                 <div class="Dropoff">
                     <x-label label="Dropoff Location">Dropoff Location</x-label>
                     <x-service-create name="dropoff_street_address" placeholder=" Dropoff Street Address"
                         value="{{ old('dropoff_street_address') }}" />
                     <x-service-create name="dropoff_landmark" placeholder="Dropoff landmark"
                         value="{{ old('dropoff_landmark') }}" />

                     <div class="flex w-[28rem]">
                         <x-trim-service-create name="dropoff_city" placeholder="Dropoff city"
                             value="{{ old('dropoff_city') }}" />
                         <x-trim-service-create name="dropoff_state" placeholder="Dropoff state"
                             value="{{ old('dropoff_state') }}" />
                     </div>
                 </div>
                 <div class="flex">
                     <x-label label="expected_time"> Expected Time</x-label>
                 </div>
                 <div class="flex w-[28rem]">
                     <x-service-create name="expected_time" placeholder="expected time for arrival"
                         value="{{ old('expected_time') }}" />
                 </div>



                 <x-label label="weight">Weight of Items</x-label>
                 <textarea name="weight_desc" id="weight-desc" cols="30" rows="10" placeholder="Describe Items"
                     value="{{ old('weight_desc') }}"
                     class="h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg focus:ring-2 focus:ring-blue-500 resize-y"
                     style="width: 375px; height: 157px;"></textarea>
                 <!-- reCAPTCHA -->
                 <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div><br>
                 <div>
                     <x-service-create type="checkbox" name="accept_terms" class="ml-6" />
                     <x-label label="terms">Accept Terms
                         <span><ahref="/#">T&C</a></span></x-label>
                 </div>

                 <input type="submit" value="Book"
                     class="p-2 w-96 h-12  border-none text-base rounded-lg mx-7 mt-4 bg-blue-400 text-white font-mono hover:bg-[#767676]">
             </form>
         </div>
     </section>
     </div>

     @if (session()->has('success'))
         <p>
             {{ session()->get('success') }}
         </p>
     @endif

     @section('footer')
     </body>

     </html>
