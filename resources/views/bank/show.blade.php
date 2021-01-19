<x-app-layout>
    <x-slot name="header">
    <div class="flex flex-col">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bank') }}
        </h2>
        <p class="text-lg text-gray-500 leading-tight">
          You can get extra Pawchips by saving at the bank
        </p>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-5">
                        <h3 class="text-lg font-medium">Current balance</h3>
                        <p>Current Balance: {{ $bankAccount->pawchips }} Pawchips</p>
                        <h3 class="text-lg font-medium">Interest</h3>
                        <p>Interest Rate: 4% per year</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                      <div>
                        Deposit
                        <form action="">
                          <x-label for="depositAmount" :value="__('Amount  (Pawchips)')"/>
                          <x-input type="text" name="" id="" />
                          <x-button class="ml-4">
                            {{ __('Deposit') }}
                          </x-button>
                        </form>
                      </div>
                      <div>
                        Withdrawal
                        <form action="">
                          <x-label for="withdrawalAmount" :value="__('Amount  (Pawchips)')"/>
                          <x-input type="text" name="" id="" />
                          <x-button class="ml-4">
                            {{ __('Withdraw') }}
                          </x-button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-5">
                        <h3 class="text-lg font-medium">Goldpoints Exchanger</h3>
                        <p>Kamu bisa menukar Goldpoints kamu menjadi Pawchips di sini!</p>
                        <h3 class="text-lg font-medium">Current Rate</h3>
                        <p>14 Pawchips / Goldpoints</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                      <div>
                        Exchange
                        <form method="POST" action="{{ route('bank.exchange') }}">
                          @csrf
                          <x-label for="exchangeAmount" :value="__('Amount  (Goldpoints)')"/>
                          <x-input type="text" name="exchangeAmount" id="exchangeAmount" />
                          <x-button class="ml-4">
                            {{ __('Deposit') }}
                          </x-button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
