<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveEase Services</title>
</head>

<body>
    @extends('footer')
    <div class="container bg-[#fff]">
        <h1 class=" flex justify-center text-blue-950">Moovee Services</h1>



        <section id="residential-moving" class="flex flex-col justify-end items-start ml-4 bg-cover h-96 m-7 p-10 text-white" style="background-image: url('css//images/16615.jpg');" loading="lazy">
            <h2 class="block text-center font-extrabold font-serif">Residential Moving</h2>
            <div>
                <p class="text-base font-light">Moving to a new home can be a daunting task, but with MoveEase, it becomes an effortless transition. Our residential moving services are designed to cater to your every need, ensuring a stress-free experience from start to finish.</p>
            </div>
            <div>
                <div><a href="service/book" class="no-underline text-base text-center hover:bg-black rounded-xl text-white bg-blue-500 block w-16 p-3"> Order </a></div>
            </div>

        </section>

        <section id="commercial-moving" class="flex flex-col justify-end items-start ml-4 bg-cover h-96 m-7 p-10 text-white" style="background-image: url('css//images/16615.jpg');" loading="lazy">
            <h2 class="block text-center">Commercial Moving</h2>
            <p>Relocating your business is a significant endeavor, but with MoveEase, it's a seamless transition that keeps your operations running smoothly. Our commercial moving services are tailored to meet the demands of businesses of all sizes.</p>

            <div><a href="service/book" class="no-underline text-base text-center hover:bg-black rounded-xl text-white bg-blue-500 block w-16 p-3"> Order </a></div>
        </section>
    </div>
    @section('footer')
</body>

</html>