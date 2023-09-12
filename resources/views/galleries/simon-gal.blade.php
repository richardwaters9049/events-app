<x-app-layout>
    <x-slot name="header">
        <h2 class="fade-in font-angel tracking-[0.2rem] text-center text-transparent text-8xl m-4 bg-clip-text bg-gradient-to-r from-red-500 to-red-800">
            {{ __('Gallery') }}
        </h2>
    </x-slot>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-content">
                    <img class="bam" src=" {{ asset('images/Bam.jpeg') }}" alt="Bam Tattoo Artist" width="400">

                    <div class="reflection"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-content">
                    <img class="bam" src=" {{ asset('images/luke.jpeg') }}" alt="Luke Tattoo Artist" width="400">

                    <div class="reflection"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-content">
                    <img class="bam" src=" {{ asset('images/simon.jpeg') }}" alt="Simon Tattoo Artist" width="400">

                    <div class="reflection"></div>
                </div>
            </div>
            <!-- Add more slides as needed -->
        </div>
        <!-- Add pagination and navigation if desired -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


</x-app-layout>
