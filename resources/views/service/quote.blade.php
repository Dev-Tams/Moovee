<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Quote</title>
</head>

<body class="min-h-screen">
    @include('./nav2')

    <section class="">
        <main class="container h-full mx-auto w-10/12">
            <div>
                <a href="/"> Go back</a>
                <h2 class="text-large text-center font-sans font-bold">
                    Get a quick quote
                </h2>

            </div>
            <p class="text-wrap text-center font-light font-serif text-base text-gray-500"> It takes 2 mins</p>


            <div class=" flex justify-center align-middle">
                <form action="#" method="POST">
                    @csrf
                    <div class="flex flex-col">
                     
                        <x-info-card type="text" name="depature" placeholder="Where are you moving from?" />
                        <x-info-card type="text" name="depature" placeholder="Where are you moving to?" />
                        <x-info-card type="text" name="depature" placeholder="What is your preferred move date?" />

                        

                        <div class="flex items-center border-none rounded-lg bg-slate-100 w-96 p-2 h-11 m-4 mt-1 ">
                            <!--      ring-1 hover:shadow-none  -->
                            <x-info-card type="number" name="weight" placeholder="Weight" class="w-full h-11 rounded-l-lg border-none text-lg focus:outline-none focus:ring-2  focus:ring-blue-500 
                                                                                 bg-slate-100 placeholder-slate-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />
                            <select id="weight" name="weight"
                                class=" p-2 h-full px-3 py-2 rounded-r-lg border-none bg-transparent pl-2 pr-7 text-gray-500  sm:text-sm">
                                <option class="text-lg text-red-500">lbs</option>
                                <option>kg</option>
                            </select>
                        </div>

                        <div>
                            <input type="checkbox" name="p_help" id="p_help" class="w-8 mt-3 ml-7">
                            <label for="p_help" class="text-lg tracking-wide"> I need packing help</label><br>

                            <input type="checkbox" name="p_storage" id="p_storage" class="w-8 mt-3 ml-7">
                            <label for="p_storage" class="text-lg tracking-wide"> I need storage</label><br>

                            <input type="checkbox" name="p_clean" id="p_cleaan" class="w-8 mt-3 ml-7">
                            <label for="p_help" class="text-lg tracking-wide"> I need cleaning</label>



                        </div>

                    </div>
                    <input type="button" value="Proceed"
                        class="p-2 w-96 h-12  border-none text-base rounded-lg mt-7 bg-blue-400 text-white font-mono hover:bg-[#767676] cursor-progress">

                    <p class="text-wrap text-center font-light font-serif text-base text-gray-500">
                        This is just an estimated cost for your shipment. Actual price may vary
                    </p>
                </form>


            </div>
        </main>
    </section>
    @include('footer')
</body>

</html>
