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

                 <label for="service_type" class="text-base font-sans ml-4 font-semibold">Service Type:</label><br>
                 <select id="service-type" name="service_type"
                     class="w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm focus:outline focus:ring-2 placeholder-slate-500 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                     <option value="residential-moving">Residential Moving</option>
                     <option value="commercial-moving">Commercial Moving</option>
                 </select>
                 @error('service_type')
                     <p>{{ $message }}</p>
                 @enderror
                 <br>

                 <div class="pickup">
                     <label for="pickup-location" class="text-base font-sans ml-4 font-semibold">Pick-up
                         Location:</label><br>
                     <input type="text" id="pickup-location" name="pickup_street_address"
                         placeholder="Street Address" value="{{ old('pickup_street_address') }}"
                         class="w-96 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                                                              focus:outline focus:ring-2
                                                              invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                     @error('pickup_street_address')
                         <p>{{ $message }}</p>
                     @enderror
                     <br>
                     <input type="text" id="pickup-location" name="pickup_landmark" placeholder="Close Landmark"
                         value="{{ old('pickup_landmark') }}"
                         class="w-96 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                                                              focus:outline focus:ring-2 placeholder-slate-500 
                                                              invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                     @error('pickup_landmark')
                         <p>{{ $message }}</p>
                     @enderror
                     <br>
                     <div class="flex w-[28rem]">
                         <input type="text" id="pickup-location" name="pickup_city" placeholder="City"
                             value="{{ old('pickup_city') }}"
                             class="w-1/2 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                                                              focus:outline focus:ring-2
                                                              invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                         @error('pickup_city')
                             <p>{{ $message }}</p>
                         @enderror
                         <br>
                         <input type="text" id="pickup-location" name="pickup_state" placeholder="State"
                             value="{{ old('pickup_state') }}"
                             class="w-1/2 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                                                              focus:outline focus:ring-2 placeholder-slate-500 
                                                              invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                         @error('pickup_state')
                             <p>{{ $message }}</p>
                         @enderror
                     </div>

                     <br>


                 </div>

                 <div class="Dropoff">
                     <label for="dropoff-location" class="text-base font-sans ml-4 font-semibold">Dropoff
                         Location:</label><br>
                     <input type="text" id="dropoff-location" name="dropoff_street_address"
                         placeholder="Street Address" value="{{ old('dropoff_street_address') }}"
                         class="w-96 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                                                              focus:outline focus:ring-2 placeholder-slate-500 
                                                              invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                     @error('dropoff_street_address')
                         <p>{{ $message }}</p>
                     @enderror
                     <br>
                     <input type="text" id="dropoff-location" name="dropoff_landmark" placeholder="Close Landmark"
                         value="{{ old('dropoff_landmark') }}"
                         class="w-96 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                                                              focus:outline focus:ring-2 
                                                              invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                     @error('dropoff_landmark')
                         <p>{{ $message }}</p>
                     @enderror
                     <br>
                     <div class="flex w-[28rem]">
                         <input type="text" id="dropoff-location" name="dropoff_city" placeholder="City"
                             value="{{ old('dropoff_city') }}"
                             class="w-1/2 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                                                              focus:outline focus:ring-2 placeholder-slate-500 
                                                              invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                         @error('dropoff_city')
                             <p>{{ $message }}</p>
                         @enderror
                         <br>
                         <input type="text" id="dropoff-location" name="dropoff_state" placeholder="State"
                             value="{{ old('dropoff_state') }}"
                             class="w-1/2 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                                                              focus:outline focus:ring-2
                                                              invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                         @error('dropoff_state')
                             <p>{{ $message }}</p>
                         @enderror
                         <br>
                     </div>


                 </div>
                 <div class="flex">
                     <label for="time" class="w-1/2 text-base font-sans ml-4 font-semibold">Expected
                         Time:</label><br>
                 </div>
                 <div class="flex w-[28rem]">
                     <input type="text" id="expected_time" name="expected_time" value="{{ old('expected_time') }}"
                         class="w-96 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
                     focus:outline focus:ring-2 placeholder-slate-500 
                     invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
                     @error('expected_time')
                         <p>{{ $message }}</p>
                     @enderror
                 </div>



                 <label for="weight" class="text-base font-sans ml-4 font-semibold mt-1">Weight or Number of
                     Items:</label><br>
                 <textarea name="weight_desc" id="weight-desc" cols="30" rows="10" placeholder="Describe Items"
                     value="{{ old('weight_desc') }}"
                     class="h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg focus:ring-2 focus:ring-blue-500 resize-y"
                     style="width: 375px; height: 157px;"></textarea>
                 <!-- reCAPTCHA -->
                 <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div><br>
                 <div>
                     <input type="checkbox" id="accept_terms" name="accept_terms" class="ml-6">
                     @error('accept_terms')
                         <p>{{ $message }}</p>
                     @enderror

                     <label for="accept_terms" class="text-base font-sans ml-1 font-semibold">Accept Terms <span><a
                                 href="/#">T&C</a></span></label>
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
