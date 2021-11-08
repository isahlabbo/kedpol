<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
            {{ $ward->name }} WARD
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <table class="table table-auto w-full text-left uppercase">
        <thead>
           <tr>
               <th class="w-1/2">S/N</th>
               <th class="w-1/2">POLLING UNIT NAME</th>
               <th class="w-1/4">REGISTERED USERS</th>
           </tr>
        </thead>
        <tbody>
            @foreach($ward->pollingUnits as $pollingUnit)
            <tr class="">
                <td>{{$loop->iteration}}</td>
                <td>{{$pollingUnit->name}}</td>
                <td>{{count($pollingUnit->users)}}</td>
                
                <td>
                   <a href="{{ route('state-constituency.ward.polling-unit.member.index',[$ward->id,$pollingUnit->id]) }}">
                    <x-jet-button class="ml-4">
                        {{ __('more') }}
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
