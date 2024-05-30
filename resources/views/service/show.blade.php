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
    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless($services->isEmpty())
            @foreach($services as $service)
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a href="/services/{{$service->id}}"> {{$service->service_type}} </a>
                    <p>{{$service->service_type}}</p>
                    <p>{{$service->pickup_street_address}}</p>
                    <p>{{$service->date}}</p>
                    {{$service->time}}
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a href="/services/{{$service->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i>
                        Edit</a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <form method="POST" action="/serivces/{{$service->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">No Orders Found</p>
                </td>
            </tr>
            @endunless

        </tbody>
    </table>
</body>

</html>