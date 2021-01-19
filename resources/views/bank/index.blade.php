<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Bank') }}
            </h2>
            <p class="text-lg text-gray-500 leading-tight">
            You can get extra Pawchips by saving at the bank.
            </p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-5">
                        <h3 class="text-lg font-medium">Create a Bank Account</h3>
                        <p>Create a bank account and you will get an interest of 4% per year.</p>
                    </div>

                    <form method="POST" action="{{ route('bank.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Your name')" />
                            <x-input id="name" class="block mt-1 w-full bg-gray-100 text-gray-500" type="text" name="name" value="{{ auth()->user()->name }}" disabled />
                        </div>

                        <div class="mt-4">
                            <x-label for="deposit" :value="__('First deposit (Pawchips)')" />

                            <x-input id="deposit" class="block mt-1 w-full" type="text" name="deposit" :value="old('deposit')" required autofocus/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
