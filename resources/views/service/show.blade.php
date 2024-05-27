<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Order</title>
</head>

<body>
    @include('./nav2')



    <h1>Order Details</h1>
    <div>
        @unless($services->empty())
        @foreach($services as $service)
        <li>
            <p><strong>Service Name:</strong> {{ $service->name }}</p>
            <p><strong>Description:</strong> {{ $service->description }}</p>
        </li>
        @endforeach
    </div>
    @else
    <div>
         <p>Sorry, You have no orders</p>
    </div>
   @endunless
    </div>
    @include('./footer')
</body>

</html>