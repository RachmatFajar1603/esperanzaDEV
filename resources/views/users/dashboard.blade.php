<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="flex justify-between py-2">

        <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers" data-dropdown-placement="bottom"
            class="text-white bg-[#12153D] border border-gray-300 focus:outline-none hover:bg-blue-950 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-800 ml-10"
            type="button"> Choose Dosen <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
        <!-- Dropdown menu -->
        <div id="dropdownUsers" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
            <ul class="h-48 py-2 overflow-y-auto text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownUsersButton">
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Jese Leos
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Robert Gough
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Bonnie Green
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Leslie Livingston
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Michael Gough
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Joseph Mcfall
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Roberta Casas
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Neil Sims
                    </a>
                </li>
            </ul>
        </div>

        <div class="items-center text-center">
            <p class="text-3xl">April 2023</p>
        </div>

        <div
            class="text-white bg-[#12153D] border border-gray-300 focus:outline-none hover:bg-blue-950 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-800 mr-10">
            <img src="{{ asset('calendar.png') }}" class="flex w-4 mx-4" alt="">
            <img src="{{ asset('kiri.png') }}" class="flex w-4 m-auto mx-4" alt="">
            <img src="{{ asset('kanan.png') }}" class="flex w-4 m-auto mx-4" alt="">
        </div>

    </div>

    <div class="flex justify-center pt-4 bg-[#12153D]">
        <div class="">
            <p class="text-4xl text-white items-center text-center ">Sun <br> 09</p>
            <div class="flex-col">
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">08.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">09.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">10.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">11.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">12.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">01.00
                        PM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">02.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">03.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">04.00
                        PM</button>
                </div>
            </div>
        </div>
        <div class="">
            <p class="text-4xl text-white text-center">Mon <br> 10</p>
            <div class="flex-col">
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">08.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">09.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">10.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">11.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">12.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">01.00
                        PM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">02.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">03.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">04.00
                        PM</button>
                </div>
            </div>
        </div>
        <div class="">
            <p class="text-4xl text-white text-center ">Tue <br> 11</p>
            <div class="flex-col">
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">08.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">09.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">10.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">11.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">12.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">01.00
                        PM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">02.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">03.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">04.00
                        PM</button>
                </div>
            </div>
        </div>
        <div class="">
            <p class="text-4xl text-white text-center">Wed <br> 12</p>
            <div class="flex-col">
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">08.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">09.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">10.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">11.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">12.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">01.00
                        PM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">02.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">03.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">04.00
                        PM</button>
                </div>
            </div>
        </div>
        <div class="">
            <p class="text-4xl text-white text-center">Thu <br> 13</p>
            <div class="flex-col">
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">08.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">09.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">10.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">11.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">12.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">01.00
                        PM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">02.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">03.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">04.00
                        PM</button>
                </div>
            </div>
        </div>
        <div class="">
            <p class="text-4xl text-white text-center">Fri <br> 14</p>
            <div class="flex-col">
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">08.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">09.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">10.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">11.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">12.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">01.00
                        PM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">02.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">03.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">04.00
                        PM</button>
                </div>
            </div>
        </div>
        <div class="">
            <p class="text-4xl text-white text-center">Sat <br> 15</p>
            <div class="flex-col">
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">08.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">09.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">10.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">11.00
                        AM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">12.00
                        AM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">01.00
                        PM</button></div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">02.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">03.00
                        PM</button>
                </div>
                <div>
                    <button type="button"
                        class="h-12 w-32 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200  ">04.00
                        PM</button>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
