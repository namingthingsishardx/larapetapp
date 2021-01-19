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
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-4 content-center">
            <!-- Image and name -->
            <div class="overflow-hidden shadow-sm sm:rounded-lg cursor-pointer transform hover:scale-105 transition duration-500 ease-in-out">
                  <div class="bg-white border-b border-gray-200">
                      <div class="relative">
                          <div class="absolute inset-x-0 top-5 text-center">
                              <span class="py-1 px-4 bg-white rounded-full shadow text-gray-500">
                                  <span class="text-gray-900">{{ $pet->name }}</span>, {{ $pet->age }} bulan
                              </span>
                          </div>
                          <img src="{{ asset($pet->photo) }}" alt="">
                      </div>
                  </div>
            </div>

            <div>
              <div class="mb-5">
                <table>
                  <tr>
                    <th>Health</th>
                    <td>{{ $pet->health }}</td>
                  </tr>
                  <tr>
                    <th>Energy</th>
                    <td>{{ $pet->energy }}</td>
                  </tr>
                  <tr>
                    <th>Cleanliness</th>
                    <td>{{ $pet->cleanliness }}</td>
                  </tr>
                  <tr>
                    <th>Happiness</th>
                    <td>{{ $pet->happiness }}</td>
                  </tr>
                </table>
              </div>

              <div> 
                <x-button>Feed</x-button>
                <x-button>Play</x-button>
                <x-button>Groom</x-button>
                <x-button>Customize</x-button>
              </div>
            </div>

            <div class="flex flex-col space-y-2">
              <x-button class="bg-green-800 hover:bg-green-700">Edit name</x-button>
              <x-button class="bg-yellow-800 hover:bg-yellow-700">Find new adopters?</x-button>
            </div>
        </div>
    </div>
</x-app-layout>
