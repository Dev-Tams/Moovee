 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>MoveEase Services</title>
     <!-- Add your CSS stylesheets and other necessary assets here -->
     <style>
         /* Add your CSS styles here */
     </style>
     <script src="https://www.google./recapcomtcha/api.js" async defer></script>
 </head>

 <body>
     <div class="services-container">
         <h1>MoveEase Services</h1>
         <hr>

         <section id="residential-moving">
             <!-- Residential Moving Content -->
         </section>

         <hr>

         <section id="commercial-moving">
             <!-- Commercial Moving Content -->
         </section>

         <hr>

         <!-- Request Form Section -->
         <section id="request-form">
             <h2>Request a Quote</h2>
             <form action="{{route ('service.store') }}" method="post">
                 @csrf
                 <label for="name">Name:</label><br>
                 <input type="text" id="name" name="name" value="{{old('name')}}"><br>
                 @error('name')
                 <p>{{$message}}</p>
                 @enderror

                 <label for="email">Email:</label><br>
                 <input type="email" id="email" name="email" value="{{old('email')}}"><br>
                 @error('email')
                 <p>{{$message}}</p>
                 @enderror

                 <label for="phone">Phone:</label><br>
                 <input type="tel" id="phone" name="phone" value="{{old('phone')}}"><br>
                 @error('phone')
                 <p>{{$message}}</p>
                 @enderror

                 <label for="service_type">Service Type:</label><br>
                 <select id="service-type" name="service_type">
                     <option value="residential-moving">Residential Moving</option>
                     <option value="commercial-moving">Commercial Moving</option>
                 </select>
                 @error('service_type')
                 <p>{{$message}}</p>
                 @enderror
                 <br>


                 <div class="pickup">
                     <label for="pickup-location">Pick-up Location:</label><br>
                     <input type="text" id="pickup-location" name="pickup_street_address" placeholder="Street Address" value="{{old('pickup_street_address')}}">
                     @error('pickup_street_address')
                     <p>{{$message}}</p>
                     @enderror
                     <br>
                     <input type="text" id="pickup-location" name="pickup_landmark" placeholder="Close Landmark" value="{{old('pickup_landmark')}}">
                     @error('pickup_landmark')
                     <p>{{$message}}</p>
                     @enderror
                     <br>
                     <input type="text" id="pickup-location" name="pickup_city" placeholder="City" value="{{old('pickup_city')}}">
                     @error('pickup_city')
                     <p>{{$message}}</p>
                     @enderror
                     <br>
                     <input type="text" id="pickup-location" name="pickup_Region" placeholder="Region (optional)" value="{{old('pickup_region')}}"><br>
                     <input type="text" id="pickup-location" name="pickup_state" placeholder="State" value="{{old('pickup_state')}}">
                     @error('pickup_state')
                     <p>{{$message}}</p>
                     @enderror
                     <br>
                     <input type="text" id="pickup-location" name="pickup_country" placeholder="Country (auto-detected)" value="{{old('pickup_country')}}">
                     @error('pickup_country')
                     <p>{{$message}}</p>
                     @enderror
                     <br>


                 </div>

                 <div class="Dropoff">
                     <label for="dropoff-location">Dropoff Location:</label><br>
                     <input type="text" id="dropoff-location" name="dropoff_street_address" placeholder="Street Address" value="{{old('dropoff_street_address')}}">
                     @error('dropoff_street_address')
                     <p>{{$message}}</p>
                     @enderror
                     <br>
                     <input type="text" id="dropoff-location" name="dropoff_landmark" placeholder="Close Landmark" value="{{old('dropoff_landmark')}}">
                     @error('dropoff_landmark')
                     <p>{{$message}}</p>
                     @enderror
                     <br>
                     <input type="text" id="dropoff-location" name="dropoff_city" placeholder="City" value="{{old('dropoff_city')}}">
                     @error('dropoff_city')
                     <p>{{$message}}</p>
                     @enderror
                     <br>
                     <input type="text" id="dropoff-location" name="dropoff_region" placeholder="Region (optional)" value="{{old('dropoff_region')}}"><br>
                     <input type="text" id="dropoff-location" name="dropoff_state" placeholder="State" value="{{old('dropoff_state')}}">
                     @error('dropoff_state')
                     <p>{{$message}}</p>
                     @enderror
                     <br>
                     <input type="text" id="dropoff-location" name="dropoff_country" placeholder="Country (auto-detected)" value="{{old('dropoff_country')}}">
                     @error('dropoff_country')
                     <p>{{$message}}</p>
                     @enderror
                     <br>


                 </div>

                 <label for="date">Preferred Date:</label><br>
                 <input type="date" id="date" name="date" value="{{old('date')}}">
                 @error('date')
                 <p>{{$message}}</p>
                 @enderror
                 <br>
                 <label for="Time">Time:</label><br>
                 <input type="time" id="time" name="time" value="{{old('time')}}">
                 @error('time')
                 <p>{{$message}}</p>
                 @enderror
                 <br>


                 <label for="weight">Weight or Number of Items:</label><br>
                 <textarea name="weight_desc" id="weight-desc" cols="30" rows="10" placeholder="Describe Items" value="{{old('weight_desc')}}"></textarea>
                 <!-- reCAPTCHA -->
                 <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div><br>
                <div>
                    <input type="checkbox" id="accept_terms" name="accept_terms">
                    @error('accept_terms')
                    <p>{{$message}}</p>
                    @enderror

                    <label for="accept_terms">Accept Terms <span><a href="/#">T&C</a></span></label>
                </div>
 
                 <input type="submit" value="Get Quote">
             </form>
         </section>
     </div>

     @if(session()->has('success'))
     <p>
         {{ session()->get('success') }}
     </p>
     @endif

     @if ($errors->any())
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
     </ul>
     @endif
     <script type="text/javascript">
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
     </script>
 </body>

 </html>