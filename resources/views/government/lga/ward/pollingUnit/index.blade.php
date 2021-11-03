<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
            {{ $pollingUnit->name }} POLLING UNIT
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <table class="table table-auto">
        <thead>
           <tr>
               <th class="w-1/2">USER NAME</th>
               <th class="w-1/4">EMAIL</th>
               <th class="w-1/4">PHONE</th>
               <th class="w-1/4">NIN</th>
               <th class="w-1/4">
               <a href="{{route('government.lga.ward.polling-unit.member.create',[$pollingUnit->id])}}"><x-jet-button class="ml-4">
                        {{ __('NEW MEMBER') }}
                    </x-jet-button></th>
           </tr>
        </thead>
        <tbody>
            @foreach($pollingUnit->users as $member)
            <tr class="bg-purple-200">
                <td>{{$member->name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->nin}}</td>
                <td>
                   <a href="{{ route('government.lga.ward.polling-unit.member.edit',[$pollingUnit->id,$member->id]) }}">
                    <x-jet-button class="ml-4">
                        {{ __('Edit') }}
                    </x-jet-button>
                    </a>
                    <x-jet-button class="ml-4">
                        {{ __('Delete') }}
                    </x-jet-button>
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
