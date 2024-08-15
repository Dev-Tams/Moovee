<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
</head>

<body>
    <h2>
        Order Info
    </h2>

    <div>
        <p> Order type : {{ $services->service_type }}</p>

        <h3>Pickup Adress</h3>
        <p>Street: {{ $services->pickup_street_address }} </p>
        <p> Landmark: {{ $services->pickup_landmark }} </p>
        <p> City: {{ $services->pickup_city }}</p>
        <p>{{ $services->pickup_region }} </p>
        <p> State:{{ $services->pickup_state }} </p>

    </div>
    <div>
        <h3>Dropoff Adress</h3>
        <p>Street: {{ $services->dropoff_street_address }}</p>
        <p>Landmark: {{ $services->dropoff_landmark }} </p>
        <p>City: {{ $services->dropoff_city }} </p>
        <p> {{ $services->dropoff_region }}</p>
        <p>State: {{ $services->dropoff_state }} </p>

    </div>

    <div>
        <h3> Expected Time of Pickup</h3>
        <p> Date:{{ $services->date }}</p>
        <p>Time: {{ $services->time }}</p>
        <p>Weight: {{ $services->weight_desc }}</p>
    </div>

</body>

</html>
