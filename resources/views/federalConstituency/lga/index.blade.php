<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
            {{ $federalConstituency->name }} Federal Constituency
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <table class="table table-fixed w-full text-left uppercase">
        <thead>
           <tr>
               <th>S/N</th>
               <th class="w-1/2">LGA Name</th>
               <th class="w-1/4">Wards</th>
               <th class="w-1/4"></th>
           </tr>
        </thead>
        <tbody>
            @foreach($federalConstituency->federalConstituencyLgas as $federalConstituencyLga)
            <tr class="bg-purple-200">
                <td>{{$loop->iteration}}</td>
                <td>{{$federalConstituencyLga->lga->name}}</td>
                <td>{{count($federalConstituencyLga->lga->wards)}}</td>
                <td>
                    <a href="{{route('federal-constituency.lga.ward.index',[$federalConstituencyLga->lga->id])}}">
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
