<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}} | Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @livewireStyles

        
    </head>
    <body class="bg-purple-200 font-sans flex-col items-center">
        
        <header class="bg-purple-400 w-full py-3 flex justify-center border-black border-b-4">
          <div class="max-w-4xl w-full">
            <div class="flex items-center justify-between">
                <!-- LOGO START -->
                <img class="w-16 h-16" src="{{asset('images/clock.png')}}"/>
            <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-purple-900 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition sm:hidden">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
               
            </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <a href="{{ route('login') }}" class="text-sm text-white dark:text-gray-500 underline">Log in</a>
                </div>
            @endif
            </div>
            <div class="my-4 font-bold ">
            <h1 class="text text-xl text-purple-200 font-mono">KEBBI DIGITAL POLITICS</h1>
            <P class="text text-lg text-purple-100 tracking-wide mt-2 font-mono"> We aim to create relative political teams of same or similar political interest from all communities across the state</P>
            </div> 
          </div>
        </header>
        <main>

        
        <div class="flex  w-full my-16 justify-center ">
            <div class="mt-2 text-purple-600 dark:text-purple-400 text-sm p-4 font-serif leading-6 tracking-wider font-bold w-1/5">
                The kebbi digital politics does not belongs to any political party or work for any politician. There for the system is built by the kebbi state youth that are much concern in bringing the changes in the community through the use of technology of information management.
            </div>
            <div class=" bg-white border border-l-2 rounded-lg">
                <img class="w-1600 h-160" src="{{asset('images/clock.png')}}"/>
            </div>
        </div>

        <div class="container m-8 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
            
            <div class="bg-white rounded-lg border-12 m-4 shadow-lg border-purple-500 border-b-4">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">What is the benefit ?</a></div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm p-4 font-serif leading-6">
                        as we all known pushing a wall made up of stones and cement can never be accomplished by single person as a result the community need to harmonise them self to bring postive changes to our community, we start by gathering people individual and groups
                        to benefit from upcoming politics to vote right leaders for the betterment of our society<br>
                        <button class="m-4 bg-purple-800 py-2 px-4 text-purple-100 text-sm rounded-lg border-l-8 border-purple-500">
                            Register Now
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg border-12 m-4 shadow-lg border-purple-500 border-b-4">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">What is a team ?</a></div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm p-4 font-serif leading-6">
                        A team is the union of two or more members within polling unit, ward or local government that have similar or same political interest which can stand as single body to fight for the community or individual development.
                        <button class="m-4 bg-purple-800 py-2 px-4 text-purple-100 text-sm rounded-lg border-l-8 border-purple-500">
                            Create One OR Join Other
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg border-12 m-4 shadow-lg border-purple-500 border-b-4">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">We have few team members</a></div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm p-4 font-serif leading-6">
                    As we all know the politician are after your number in the the group which will determine the posibility of the winning or losing the election, there for your number in the group will determine how likely your group will draw the attention of the politicians. There for advice to have atleast 20 to above members  
                    <button class="m-4 bg-purple-800 py-2 px-4 text-purple-100 text-sm rounded-lg border-l-8 border-purple-500">
                            Add More team Members
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- senatorial zone start -->
        <div class="container m-8 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
            @foreach($senatorialZones as $senatorialZone)
            <div class="bg-white rounded-lg border-12 m-4 shadow-lg border-purple-700 border-l-4">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">{{$senatorialZone->name}}</a></div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm p-4 font-serif leading-6">
                        <table class="table-fixed w-full">
                            <thead>
                                <tr class="w-full text-left">
                                    <th class="w-1/2">Local Government</th>
                                    <th >Wards</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($senatorialZone->senatorialZoneLgas as $senatorialZoneLga)
                            <tr class="text-left">
                                <td>{{$senatorialZoneLga->lga->name}}<td>
                                <td>{{count($senatorialZoneLga->lga->wards)}}<td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- senatorial zone end -->
        <!-- statefederal constituency -->
        <div class="container m-8 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
            @foreach($federalConstituencies as $federalConstituency)
            <div class="bg-white rounded-lg border-12 m-4 shadow-lg border-purple-500 border-t-4">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">{{$federalConstituency->name}}</a></div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm p-4 font-serif leading-6">
                        <table class="table-fixed w-full">
                            <thead>
                                <tr class="w-full text-left">
                                    <th class="w-1/2">Local Government</th>
                                    <th >Wards</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($federalConstituency->federalConstituencyLgas as $federalConstituencyLga)
                            <tr class="text-left">
                                <td>{{$federalConstituencyLga->lga->name}}<td>
                                <td>{{count($federalConstituencyLga->lga->wards)}}<td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- federal constituency -->
        </main>
        <footer>
        
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between bg-gray-900">
                <div class="ml-4 text-center text-sm text-white p-4 sm:text-right sm:ml-0">
                <div class="container m-8 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
            @foreach($stateConstituencies as $stateConstituency)
            <div class="bg-gray-400 rounded-lg border-12 m-4 shadow-lg border-purple-500 border-t-4">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-100 dark:text-white">{{$stateConstituency->name}}</a></div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-100 dark:text-gray-400 text-sm p-4 font-serif leading-6">
                        <table class="table-fixed w-full">
                            <thead>
                                <tr class="w-full text-left">
                                    <th class="w-1/2">Ward</th>
                                    <th >Polling Units</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($stateConstituency->stateConstituencyWards as $stateConstituencyWard)
                            <tr class="text-left">
                                <td>{{$stateConstituencyWard->ward->name}}<td>
                                <td>{{count($stateConstituencyWard->ward->pollingUnits)}}<td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
                    All right reserved @ {{config('app.name')}} {{date('Y')}}
                </div>
            </div>
        </footer>
        @livewireScripts  
    </body>
</html>
