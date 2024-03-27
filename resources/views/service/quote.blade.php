<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Quote</title>
</head>

<body>
    <section>
        <main>
            <a href="/"> Go back</a>
            <h2>
                Get a quick quote
            </h2>

            <p>
                This is just an estimated cost for your shipment. Actual price may vary after creating a shipment
            </p>


            <div>
                <form action="#" method="POST">
                    @csrf
                    <div>


                        <label for="Origin">Origin</label>
                        <input type="text" name="depature" id="depature" placeholder="Select departure State">
                        <input type="text" name="depature_city" id="depature_city" placeholder="Select departure City">
                        <input type="text" name="depature" id="depature_street_address" placeholder="Select departure Street address">
                    </div>

                    <div>


                        <label for="Origin">Destination</label>
                        <input type="text" name="destination" id="destination" placeholder="Select destination State">
                        <input type="text" name="depature_city" id="destination_city" placeholder="Select destination City">
                        <input type="text" name="depature" id="destination_street_address" placeholder="Select destination Street address">
                    </div>

                    <div>
                        <label for="quantity">quantity</label>
                        <input type="text" name="quantity" id="quantity" placeholder="Enter quantity">
                    </div>

                    <div>
                        <label for="weight">Weight (KG)</label>
                        <input type="text" name="weight" id="weight" placeholder="Enter weight">
                    </div>

                    <input type="button" value="Proceed">
                </form>
            </div>
        </main>
    </section>
</body>

</html>