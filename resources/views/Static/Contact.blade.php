<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>contact Moovee Logistics</title>
</head>

<body class="mt-4">
    <div class="md: container md:mx-auto flex items-center flex-col">
        <h1> Welcome to Moove logistics. </h1>

        <h2> Want to get in touch with us?</h2>


        <section>
            <form action="#" method="POST" class="box-border ">
                <div>
                    <input type="text" name="name" placeholder="Input your name" value="{{old('name')}}" class="text-base mt-4 h-12 w-64 border border-black rounded-md px-4">
                </div>

                <div>
                    <input type="email" name="email" placeholder="Provide a valid email address" value="{{old('email')}}" class=" text-base mt-4 h-12 w-64 rounded-md px-4">
                </div>

                <textarea name="message" id="" cols="30" rows="10" placeholder="What's your message?" value="{{old('message')}}" class="mt-4"></textarea>

                <div>
                    <input type="submit" value="submit" class="text-base mt-4 h-12 w-64 rounded-md px-4 shadow-sm text-black hover:text-white font-bold">
                </div>
            </form>
        </section>
    </div>
</body>

</html>