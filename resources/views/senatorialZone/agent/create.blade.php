<x-app-layout>
    @section('title')
       create {{$senatorialZone->name}} senatorial zone ajent
    @endsection   
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
        {{$senatorialZone->name}} {{ __('agent create') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-purple-200">
                <form method="POST" action="{{ route('register') }}">
            @csrf


            <div class="mt-4 flex items-center justify-end mt-4">
                <x-jet-label for="email" value="{{ __('NIN') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="nin" :value="old('nin')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                
                <x-jet-button class="ml-4">
                    {{ __('Assign') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
