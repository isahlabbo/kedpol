<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
            {{ $ward->name }} Ward
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <table class="table table-auto">
        <thead>
           <tr>
               <th class="w-1/2">Polling Unit Name</th>
               <th class="w-1/4">No Of Registered Member</th>
               <th class="w-1/4"></th>
           </tr>
        </thead>
        <tbody>
            @foreach($ward->pollingUnits as $pollingUnit)
            <tr class="bg-purple-200">
                <td>{{$pollingUnit->name}}</td>
                <td>{{count($pollingUnit->users)}}</td>
                <td>
                    <a href="{{route('government.lga.ward.polling-unit.index',[$pollingUnit->id])}}">
                    <x-jet-button class="ml-4">
                        {{ __('More') }}
                    </x-jet-button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table> 

        <div class="mt-6 text-gray-500">
            
        </div>
    </div>
</div>
    </div>
</x-app-layout>
