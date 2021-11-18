<div class="container m-8 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
    @foreach($senatorialZones as $senatorialZone)
    <div class="bg-white rounded-lg border-12 m-4 shadow-lg border-purple-700 border-l-4">
        <div class="flex items-center">
            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">{{$senatorialZone->name}}</a></div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm p-4 font-serif leading-6">
                <table class="table-fixed w-full">
                    
                    <tbody>
                    <tr class="text-left">
                        <td>Local Government</td><td>{{count($senatorialZone->senatorialZoneLgas)}}</td>
                    </tr><tr class="text-left">
                        <td>Wards</td><td>{{$senatorialZone->wards}}</td>
                    </tr><tr class="text-left">
                        <td>Polling Units</td><td>{{$senatorialZone->polling_units}}</td>
                    </tr><tr class="text-left">
                        <td>Teams</td><td>{{$senatorialZone->teams}}</td>
                    </tr><tr class="text-left">    
                        <td>Members</td><td>{{$senatorialZone->members}}</td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endforeach
</div>
