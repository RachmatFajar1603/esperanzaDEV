<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="flex py-2">

        <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers" data-dropdown-placement="bottom"
            class="text-white bg-[#12153D] border border-gray-300 focus:outline-none hover:bg-blue-950 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-800 ml-10"
            type="button">
            < Choose Different Time</button> <div class="flex justify-center items-center text-center">
                <p class="text-3xl">Confirm Booking</p>
    </div>
    </div>

    <div class="flex justify-center pt-4 bg-[#12153D]">
        <div class="container mx-auto py-12">
            <form action="process_booking.php" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md mx-auto">
                <div class="">
                    <!-- create card -->
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-full px-3">
                                <div>
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                        for="grid-first-name">
                                        Friday, April 14, 2023
                                    </label>
                                    <p class="block uppercase tracking-wide text-grey-darker text-3xl font-bold mb-2"> 12.00 PM - 13.00 PM</p>
                                </div>
                                
                            </div>
                        </div>
                        <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="flex ">
                            <img src="{{ asset('clock.png') }}" class="flex ">
                            <div class="flex content-center items-center text-center">
                            <p class="uppercase text-grey-darker text-xl font-bold pb-2"> 1 Hour</p>
</div>
                        </div>
                    </div>
                    
                    <!-- CARD END -->
                </div>

                <div class="mb-4">
                    <label class="text-white font-bold block" for="name">Full Name (required)</label>
                    <input
                        class="border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                        id="name" name="name" type="text" placeholder="Your name" required>
                </div>
                <div class="mb-4">
                    <label class="text-white font-bold block" for="email">Email (required)</label>
                    <input
                        class="border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                        id="email" name="email" type="email" placeholder="Your email" required>
                </div>
                <div class="mb-4">
                    <label class="text-white font-bold block" for="appointment">Appointment Type (required)</label>
                    <input
                        class="border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                        id="appointment" name="appointment" type="text" placeholder="Appointment type" required>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Confirm Booking
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
