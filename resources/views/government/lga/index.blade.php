<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
            {{ $lga->name }} LocalGovernment
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <table class="table table-fixed">
        <thead>
           <tr>
               <th class="w-1/2">Ward Name</th>
               <th class="w-1/4">No Of Polling Unit</th>
               <th class="w-1/4"></th>
           </tr>
        </thead>
        <tbody>
            @foreach($lga->wards as $ward)
            <tr class="bg-purple-200">
                <td>{{$ward->name}}</td>
                <td>{{count($ward->pollingUnits)}}</td>
                <td>
                    <a href="{{route('government.lga.ward.index',[$ward->id])}}">
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
