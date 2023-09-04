<x-app-layout>
    <x-slot name="header">
        <h2 class="fade-in angel-font text-center text-transparent text-5xl m-4 bg-clip-text bg-gradient-to-r from-red-500 to-red-800">

            {{ __('Choose An Artist') }}
        </h2>
    </x-slot>

    <div class="font-angel image-container w-full h-full flex justify-center items-center">
        <div class="slider flex p-5 gap-5">

            <a href="{{ route('dashboard') }}">

                <div class="image-card w-full">
                    <h2 class="text-center p-3 text-transparent text-6xl bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Bam</h2>
            </a>

            <img class="bam" src=" {{ asset('images/Bam.jpeg') }}" alt="Bam Tattoo Artist" width="400">
        </div>
        <div class="image-card w-full">
            <h2 class="text-center p-3 text-transparent text-6xl bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Luke</h2>

            <img src=" {{ asset('images/luke.jpeg') }}" alt="Bam Tattoo Artist" width="400">
        </div>
        <div class="image-card w-full">
            <h2 class="text-center p-3 text-transparent text-6xl bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Simon</h2>


            <img src=" {{ asset('images/simon.jpeg') }}" alt="Bam Tattoo Artist" width="400">
        </div>
    </div>
    </div>
</x-app-layout>
