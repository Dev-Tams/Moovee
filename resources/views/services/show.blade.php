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
            <form action="{{route ('quote') }}" method="POST">
                @csrf
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                @error('name')
                <p>{{$message}}</p>
                @enderror

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                @error('email')
                <p>{{$message}}</p>
                @enderror

                <label for="phone">Phone:</label><br>
                <input type="tel" id="phone" name="phone"><br>
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
                    <input type="text" id="pickup-location" name="pickup_street_address" placeholder="Street Address">
                    @error('pickup_street_address')
                    <p>{{$message}}</p>
                    @enderror
                    <br>
                    <input type="text" id="pickup-location" name="pickup_landmark" placeholder="Close Landmark">
                    @error('pickup_landmark')
                    <p>{{$message}}</p>
                    @enderror
                    <br>
                    <input type="text" id="pickup-location" name="pickup_city" placeholder="City">
                    @error('pickup_city')
                    <p>{{$message}}</p>
                    @enderror
                    <br>
                    <input type="text" id="pickup-location" name="pickup_Region" placeholder="Region (optional)"><br>
                    <input type="text" id="pickup-location" name="pickup_state" placeholder="State">
                    @error('pickup_state')
                    <p>{{$message}}</p>
                    @enderror
                    <br>
                    <input type="text" id="pickup-location" name="pickup_country" placeholder="Country (auto-detected)">
                    @error('pickup_country')
                    <p>{{$message}}</p>
                    @enderror
                    <br>


                </div>

                <div class="Dropoff">
                    <label for="dropoff-location">Dropoff Location:</label><br>
                    <input type="text" id="dropoff-location" name="dropoff_street_address" placeholder="Street Address">
                    @error('dropoff_street_address')
                    <p>{{$message}}</p>
                    @enderror
                    <br>
                    <input type="text" id="dropoff-location" name="dropoff_landmark" placeholder="Close Landmark">
                    @error('dropoff_landmark')
                    <p>{{$message}}</p>
                    @enderror
                    <br>
                    <input type="text" id="dropoff-location" name="dropoff_city" placeholder="City">
                    @error('dropoff_city')
                    <p>{{$message}}</p>
                    @enderror
                    <br>
                    <input type="text" id="dropoff-location" name="dropoff_region" placeholder="Region (optional)"><br>
                    <input type="text" id="dropoff-location" name="dropoff_state" placeholder="State">
                    @error('dropoff_state')
                    <p>{{$message}}</p>
                    @enderror
                    <br>
                    <input type="text" id="dropoff-location" name="dropoff_country" placeholder="Country (auto-detected)">
                    @error('dropoff_country')
                    <p>{{$message}}</p>
                    @enderror
                    <br>


                </div>

                <label for="date">Preferred Date:</label><br>
                <input type="date" id="date" name="date">
                @error('date')
                <p>{{$message}}</p>
                @enderror
                <br>
                <label for="Time">Time:</label><br>
                <input type="time" id="time" name="time">
                @error('time')
                <p>{{$message}}</p>
                @enderror
                <br>


                <label for="weight">Weight or Number of Items:</label><br>
                <textarea name="weight-desc" id="weight-desc" cols="30" rows="10" placeholder="Describe Items"></textarea>
                <!-- reCAPTCHA -->
                <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div><br>
                <div>
                    <input type="checkbox" id="accept_terms" name="accept_terms">
                    <label for="accept_terms">Accept Terms <span><a href="/#">T&C</a></span></label>
                    @error('accept_terms')
                    <p>{{$message}}</p>
                    @enderror

                </div>




                <input type="submit" value="Get Quote">
            </form>
        </section>
    </div>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>