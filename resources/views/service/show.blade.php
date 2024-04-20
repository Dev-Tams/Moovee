<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Order</title>
</head>

<body>
    <h1>Order Details</h1>
    <div>
        <p><strong>Service Name:</strong> {{ $service->name }}</p>
        <p><strong>Description:</strong> {{ $service->description }}</p>
        <!-- Add more details as needed -->
    </div>
</body>

</html>