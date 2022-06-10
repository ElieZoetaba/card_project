<x-app-layout>
    <x-slot name="header">
        <livewire:foo.nav/>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 py-5 sm:p-0">

                    <div class="text-center">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ __('Welcome to your dashboard!') }}
                        </h3>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            {{ __('This is your dashboard, where you can manage your account, view your orders, and more.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:foo.panel/>
    <livewire:posts/>
    <livewire:create/>
    <livewire:foo/>

        {{--subscribers profil table template--}}




        {{--subscribers--}}

        {{-- list table --}}



    </div>
</x-app-layout>
