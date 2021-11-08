<x-app-layout>
    @section('title')
        {{$pollingUnit->name}} member registration
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
            {{ $pollingUnit->name }} POLLING UNIT
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <x-jet-validation-errors class="mb-4" />
 
    <form method="POST" action="{{ route('senatorial-zone.lga.ward.polling-unit.member.register',[$pollingUnit->id]) }}">
            @csrf
            <div class="">
            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class=" mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Phone') }}" />
                <x-jet-input id="email" class=" mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('NIN') }}" />
                <x-jet-input id="email" class=" mt-1 w-full" type="text" name="nin" :value="old('nin')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Polling Unit') }}" />
                <select id="password" class=" mt-1 w-full border-purple-500 focus:border-purple-800 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="polling_unit" required >
                <option value="{{$pollingUnit->id}}">{{$pollingUnit->name}}</option>
                </select>
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
            </div>
        </form>
        <div class="mt-6 text-gray-500"></div>
    </div>
</div>
    </div>
</x-app-layout>
