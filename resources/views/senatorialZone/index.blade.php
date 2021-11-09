<x-app-layout>
    @section('title')
       Government
    @endsection   
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
        {{ Breadcrumbs::render('senatorial-zone') }}</b> 
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-purple-200">
                <table class="table table-fixed w-full h-4 tracking-wider">
                <thead>
                   <tr class="w-full uppercase text-left">
                       <th class="">S/N</th>
                       <th class="">Senatorial Zon</th>
                       <th class="">Local governments</th>
                       <th class="">Wards</th>
                       <th class="">Polling Units</th>
                       <th class=""></th>
                       <th class=""></th>
                   </tr>
                </thead>
                <tbody>
                    @foreach($zones as $zone)
                    <tr class="w-full text-left">
                        <td>{{$zone->id}}</td>
                        <td>{{$zone->name}}</td>
                        <td>{{count($zone->senatorialZoneLgas)}}</td>
                        <td>{{$zone->wards()}}</td>
                        <td>{{$zone->pollingUnits()}}</td>
                        <td>
                            <a href="{{route('senatorial-zone.lga.index',[$zone->id])}}">
                            <x-jet-button class="ml-4">
                                {{ __('more') }}
                            </x-jet-button>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('senatorial-zone.agent.create',[$zone->id])}}">
                            <x-jet-button class="ml-4">
                                {{ __('asign Agent') }}
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
