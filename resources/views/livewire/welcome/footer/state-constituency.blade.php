<div class="ml-12">
    <div class="mt-2 text-purple-100 dark:text-gray-400 text-sm p-4 font-serif leading-6">
        <table class="table-fixed">
            <thead>
                <tr class="text-left uppercase border-b-4 border-purple-300">
                    <th class="w-1/12">S/N</th>
                    <th class="w-1/6">State Constituencies</th>
                    <th class="w-1/6">Wards</th>
                    <th class="w-1/6">Polling UNITS</th>
                    <th class="w-1/6">Member Teams</th>
                    <th class="w-1/6">Registered Members</th>
                </tr>
            </thead>
            <tbody>
            @foreach($stateConstituencies as $stateConstituency)
            <tr class="text-left">
                <td>{{$loop->iteration}}</td>
                <td>{{$stateConstituency->name}}</td>
                <td>{{count($stateConstituency->stateConstituencyWards)}}</td>
                <td>{{$stateConstituency->polling_units}}</td>
                <td>{{$stateConstituency->teams}}</td>
                <td>{{$stateConstituency->members}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>