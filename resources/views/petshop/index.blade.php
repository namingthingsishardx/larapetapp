<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Petshop') }}
            </h2>
            <p class="text-lg text-gray-500 leading-tight">
                You can adopt a pet and buy your pet food at this shop.
            </p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            @if(flash()->message)
                <div class="mb-5 px-4 py-2 leading-tight bg-red-600 text-red-100">
                    {{ flash()->message }}
                </div>
            @endif
            
            <div class="mb-5 border-b border-dashed border-gray-300">
                <h3 class="text-2xl">Peliharaan</h3>
            </div>
            <div class="mb-10 grid grid-cols-4 gap-4">
                @foreach($itemIsPet as $item)
                <a href="{{ route('petshop.adopt', ['id' => $item->id])}}">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg sm:rounded-b-none cursor-pointer transform hover:-translate-y-1 hover:scale-105 transition duration-500 ease-in-out">
                        <div class="bg-white border-b border-gray-200">
                            <div class="relative">
                                <div class="absolute inset-x-0 top-5 text-center">
                                    <span class="py-1 px-4 bg-white rounded-full shadow text-gray-500">
                                        Adposi <span class="text-gray-900">{{ $item->price }}</span> Pawchips
                                    </span>
                                </div>
                                <img src="{{ asset($item->picture) }}" alt="">
                            </div>

                            <div class="p-2">
                                {{ $item->name }}, {{ $item->age }} bulan, {{ $item->gender }}
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>


            <div class="mb-5 border-b border-dashed border-gray-300">
                <h3 class="text-2xl">Makanan</h3>
            </div>
            <div class="grid grid-cols-4 gap-4">
                @foreach($itemIsFood as $item)
                <a href="{{ route('petshop.buy', ['id' => $item->id])}}">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg sm:rounded-b-none cursor-pointer transform hover:-translate-y-1 hover:scale-105 transition duration-500 ease-in-out">
                        <div class="bg-white border-b border-gray-200">
                            <div class="relative">
                                <div class="absolute inset-x-0 top-5 text-center">
                                    <span class="py-1 px-4 bg-white rounded-full shadow text-gray-500">
                                        Beli <span class="text-gray-900">{{ $item->price }}</span> Pawchips
                                    </span>
                                </div>
                                <img src="{{ asset($item->picture) }}" alt="">
                            </div>

                            <div class="p-2">
                                {{ $item->name }}
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
