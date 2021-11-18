<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}} | Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        @livewireStyles

        
    </head>
    <body class="bg-purple-200 font-sans flex-col items-center">
        
        <!-- header start -->
        @livewire('welcome.header')
        <!-- header end -->

        <main>
        <!-- banner start -->
        @livewire('welcome.banner')
        <!-- banner end -->

        <!-- question start -->
        @livewire('welcome.question')
        <!-- question end -->
        
        <!-- senatorial zone start -->
        @livewire('welcome.senatorial-zone',['senatorialZones'=>$senatorialZones])
        <!-- senatorial zone end -->
        
        </main>
        <footer>
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between bg-gray-900">
                <div class=" text-center text-sm text-white p-4 sm:text-right border border-b-8 border-black">
                
                <!-- federal constituency -->
                @livewire('welcome.footer.federal-constituency',['federalConstituencies'=>$federalConstituencies])
                <!-- federal constituency -->

                <!-- state constituency start -->
                 @livewire('welcome.footer.state-constituency',['stateConstituencies'=>$stateConstituencies])
                <!-- state constituency end -->

                All right reserved @ {{config('app.name')}} {{date('Y')}}
                </div>
            </div>
        </footer>
        @livewireScripts  
    </body>
</html>
