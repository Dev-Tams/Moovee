<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Quote</title>
</head>

<body>
    @include('./nav2')
    @extends('footer')
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
                        <input type="text" name="depature" id="depature" placeholder="Where are you moving from?">
                        <input type="text" name="destination" id="depature_city" placeholder="where are you moving to?">
                        <input type="text" name="date" id="depature_date" placeholder="What is your move date?">
                        <input type="text" name="quantity" id="quantity" placeholder="Enter quantity">
                        <input type="checkbox" name="p_help" id="p_help"> <label for="p_help"> I need packing help</label>
                        <input type="checkbox" name="p_storage" id="p_storage"> <label for="p_storage"> I need storage</label>
                        <input type="checkbox" name="p_clean" id="p_cleaan"> <label for="p_help"> I need cleaning</label>
                    </div>
                    <input type="button" value="Proceed">
                </form>
            </div>
        </main>
    </section>
    @section('footer')
</body>

</html>