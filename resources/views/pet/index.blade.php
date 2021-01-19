<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My Pets') }}
            </h2>
            <p class="text-lg text-gray-500 leading-tight">
                You can interact with your pet in this page.
            </p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-cols-4 gap-4">


            @if(count($pets) > 0)
            @foreach($pets as $item)
            <a href="{{ route('pets.show', ['pet' => $item->id])}}">
                <div class="overflow-hidden shadow-sm sm:rounded-lg cursor-pointer transform hover:scale-105 transition duration-500 ease-in-out">
                    <div class="bg-white border-b border-gray-200">
                        <div class="relative">
                            <div class="absolute inset-x-0 top-5 text-center">
                                <span class="py-1 px-4 bg-white rounded-full shadow text-gray-500">
                                    <span class="text-gray-900">{{ $item->name }}</span>, {{ $item->age }} bulan
                                </span>
                            </div>
                            <img src="{{ asset($item->photo) }}" alt="">
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            @else
            <a href="{{ route('petshop.index')}}">
                <div class="overflow-hidden shadow-sm sm:rounded-lg cursor-pointer transform hover:scale-105 transition duration-500 ease-in-out">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="relative">
                            <div class="absolute inset-x-0 top-5 text-center">
                                <span class="py-1 px-4 bg-white rounded-full shadow text-gray-500">
                                    Get your first pet, FREE!
                                </span>
                            </div>
                            <img src="{{ asset('./icons/icons8-pets-96.png') }}" alt="">

                            <p class="mt-5 font-bold mb-2">
                                Dapatkan peliharaan virtual pertama kamu!
                            </p>
                            <p>
                                Ini adalah langkah pertama kamu untuk mengkoleksi peliharaan virtual kamu.
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            @endif
        </div>
    </div>
</x-app-layout>
