<x-app-layout>
    <x-slot name="header">
    <div class="flex flex-col">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Market') }}
        </h2>
        <p class="text-gray-500">
            Market merupakan tempat untuk memasang iklan, dimana pengguna dapat mencari adopsi baru, mencari pengasuh baru, ataupun mencari calon lawan jenis peliharaan untuk dibreeding.
        </p>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-2">  
                <x-button>Buat iklan baru</x-button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>
                        Saat market tidak memiliki iklan apapun.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
