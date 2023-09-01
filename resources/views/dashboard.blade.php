<x-app-layout>
    <x-slot name="header">
        <div class="name-container flex flex-wrap justify-center ">

            <span class="fade-in angel-font text-center text-transparent text-6xl m-4 bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Welcome</span>

            <span class="fade-in angel-font text-center text-transparent text-6xl m-4 bg-clip-text bg-gradient-to-r from-red-500 to-red-800">{{ Auth::user()->name }}</span>

        </div>


        <div class="mt-2 relative">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8 slide-in-container">

                {{-- First grid item --}}

                <div class="scale-100 p-3 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 custom-cursor w-full">


                    <div class="w-full flex flex-col justify-center items-center text-center">
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <x-heroicon-s-calendar-days class="w-7 h-7 stroke-red-500" />
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Create Booking</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Choose Your Date and Time
                        </p>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Once you're satisfied with your design, we'll help you pick a convenient date and time for your tattoo session. We recommend booking in advance to secure your preferred slot.
                        </p>
                    </div>
                </div>

                {{-- Second grid item --}}

                <div class="scale-100 p-3 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 custom-cursor">

                    <div class="w-full flex flex-col justify-center items-center text-center">

                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <x-fontisto-picture class="w-7 h-7 stroke-red-500" />
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Explore The Gallery</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Where artistry meets skin.
                        </p>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            We take immense pride in showcasing our previous work, a testament to the creativity and skill of our talented tattoo artists. Dive into our diverse portfolio and discover the stories we've etched onto our clients' canvas.
                        </p>
                    </div>
                </div>


                {{-- Third grid item --}}

                <div class="scale-100 p-3 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 custom-cursor">

                    <div class="w-full flex flex-col justify-center items-center text-center">

                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <x-fluentui-people-community-20 class="w-7 h-7 stroke-red-500" />

                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Our Artists</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Reach out to your chosen artist to schedule a consultation.

                        </p>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Meet our team of exceptional tattoo artists, each with their own unique style, expertise, and passion for the craft. Get to know the creative minds and skilled hands behind the ink.
                        </p>
                    </div>
                </div>

                {{-- Fourth Grid Item --}}

                <div class="scale-100 p-3 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 custom-cursor">

                    <div class="w-full flex flex-col justify-center items-center text-center">

                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <x-ri-map-pin-user-line class="w-7 h-7 stroke-red-500" />
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Where are yeee!?</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            In the entry!!
                        </p>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Finding our tattoo shop is as easy as following the ink trail on a map! Whether you're a local or visiting from out of town, we're here to help you navigate your way to our studio.

                        </p>
                    </div>
                </div>



            </div>
        </div>

    </x-slot>

</x-app-layout>
