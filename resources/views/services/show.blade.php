<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <form action="/quote" method="POST">
                @csrf
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="phone">Phone:</label><br>
                <input type="tel" id="phone" name="phone" required><br>

                <label for="service-type">Service Type:</label><br>
                <select id="service-type" name="service-type" required>
                    <option value="residential-moving">Residential Moving</option>
                    <option value="commercial-moving">Commercial Moving</option>
                </select><br>


                <div class="pickup">
                    <label for="pickup-location">Pick-up Location:</label><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Street Address" required><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Close Landmark" required><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="City" required><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Region (optional)"><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="State" required><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Country (auto-detected)" required><br>


                </div>

                <div class="Dropoff">
                    <label for="pickup-location">Dropoff Location:</label><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Street Address" required><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Close Landmark" required><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="City" required><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Region (optional)"><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="State" required><br>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Country (auto-detected)" required><br>


                </div>

                <label for="date">Preferred Date:</label><br>
                <input type="date" id="date" name="date" required><br>
                <label for="Time">Time:</label><br>
                <input type="time" id="time" name="time" required><br>


                <label for="weight">Weight or Number of Items:</label><br>
                <textarea name="weight-desc" id="weight-desc" cols="30" rows="10" placeholder="Describe Items"></textarea>
                <!-- reCAPTCHA -->
                <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div><br>

                <input type="submit" value="Get Quote">
            </form>
        </section>
    </div>
</body>

</html>