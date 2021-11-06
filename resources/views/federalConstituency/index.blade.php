<x-app-layout>
    @section('title')
       Government
    @endsection   
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
            {{ __('Kebbi Federal Constituency') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <table class="table table-fixed">
                <thead>
                   <tr>
                       <th class="w-1/2">S/N</th>
                       <th class="w-1/4">Federal Constituency</th>
                       <th class="w-1/4">Local governments</th>
                       <th class="w-1/2"></th>
                   </tr>
                </thead>
                <tbody>
                    @foreach($federalConstituencies as $federalConstituency)
                    <tr class="bg-purple-200">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$federalConstituency->name}}</td>
                        <td>{{count($federalConstituency->federalConstituencyLgas)}}</td>
                        
                        <td>
                            <a href="{{route('federal-constituency.lga.index',[$federalConstituency->id])}}">
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
