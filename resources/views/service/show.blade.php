<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Order</title>
</head>

<body>
    @extends('footer')
    <h1>Order Details</h1>
    <div>
        @if(isset($service))
        <p><strong>Service Name:</strong> {{ $service->name }}</p>
        <p><strong>Description:</strong> {{ $service->description }}</p>
        <div>
            <p>Service ID: {{ $service->id }}</p>
            <!-- Other service details -->
        </div>
        <a href="{{ route('services.show', ['id' => $service->id]) }}">View orders</a>
        @else
        <p>Sorry, You have no orders</p>
        @endif
    </div>
    @section('footer')
</body>

</html>