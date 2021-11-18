<div class="ml-12">
<div class="mt-2 text-purple-100 dark:text-gray-400 text-sm p-4 font-serif leading-6">
<table class="table-fixed w-full leading-6">
    <thead>
        <tr class="w-full text-left uppercase border-b-4 border-purple-300">
            <th class="w-1/12">S/N</th>
            <th class="w-1/6">Federal Constituency</th>
            <th class="w-1/6">Lgas</th>
            <th class="w-1/6">Wards</th>
            <th class="w-1/6">Polling Unit</th>
            <th class="w-1/6">Teams</th>
            <th class="w-1/6">Registered Users</th>
        </tr>
    </thead>
    <tbody>
        @foreach($federalConstituencies as $federalConstituency)
        <tr class="text-left ">
            <td>{{$loop->iteration}}</td>
            <td class="w-1/4">{{$federalConstituency->name}}</td>
            <td>{{count($federalConstituency->federalConstituencyLgas)}}</td>
            <td>{{$federalConstituency->wards}}</td>
            <td>{{$federalConstituency->polling_units}}</td>
            <td>{{$federalConstituency->teams}}</td>
            <td>{{$federalConstituency->members}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
