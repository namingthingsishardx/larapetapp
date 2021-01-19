<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Learning Path') }}
            </h2>
            <p class="text-lg text-gray-500 leading-tight">
                Belajar yuk, biar kamu makin pintar dalam mengelola keuangan kamu.
            </p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div> -->

            <div class="grid grid-cols-5 gap-2">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="bg-gray-300 p-6">Apa itu mata uang?</div>
                    <div class="p-6">
                        <p>Reward</p>
                        <ul>
                            <li>1 Goldpoints</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="bg-gray-300 p-6">Membelanjakan Uang</div>
                    <div class="p-6">
                        <p>Reward</p>
                        <ul>
                            <li>1 Goldpoints</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="bg-gray-300 p-6">Menabung</div>
                    <div class="p-6">
                        <p>Reward</p>
                        <ul>
                            <li>1 Goldpoints</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
