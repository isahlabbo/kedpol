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
        <table class="table table-auto w-full text-left tracking-wider">
        <thead>
           <tr>
               <th class="w-1/6">USER NAME</th>
               <th class="w-1/6">EMAIL</th>
               <th class="w-1/6">PHONE</th>
               <th class="w-1/6">NIN</th>
               <th class="w-1/4">
               <a href="{{route('state-constituency.ward.polling-unit.member.create',[$pollingUnit->ward->id,$pollingUnit->id])}}"><x-jet-button class="ml-4">
                        {{ __('NEW MEMBER') }}
                    </x-jet-button></th>
           </tr>
        </thead>
        <tbody>
            @foreach($pollingUnit->users as $member)
            <tr class="">
                <td>{{$member->name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->nin}}</td>
                <td>
                   <a href="{{ route('state-constituency.ward.polling-unit.member.edit',[$pollingUnit->ward->stateConstituencyWard->stateConstituency->id,$pollingUnit->id,$member->id]) }}">
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
