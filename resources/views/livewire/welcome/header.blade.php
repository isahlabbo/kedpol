<header class="bg-purple-900 w-full py-3 flex justify-center border-black border-b-4">
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
