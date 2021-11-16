<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="text-2xl text-purple-900">
        Kebbi Digital Politics
    </div>

    <div class="mt-8 text-2l">
        <b class="text-purple-900 text-2xl">{{Auth::user()->name}}</b> Member Since {{date('d-M-Y',strtotime(Auth::user()->created_at))}}
    </div> 

    <div class="mt-6 text-gray-500">
        {{Auth::user()->currentTeam->description ?? 'there is no current team for you please register new one or or join other'}}
    </div>
</div>

<div class="bg-white-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            <div class="ml-4 text-lg text-purple-900 leading-7 font-semibold">Community development</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Do you have a new development in your comunity done by the present administration
            </div>

            <a href="https://laravel.com/docs">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Explored new development</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <div class="ml-4 text-lg text-purple-900 leading-7 font-semibold">Kebbi Politics Today</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                What is in your mind about kebbi state politics and politicians
            </div>

            <a href="https://laracasts.com">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Open your mind</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <div class="ml-4 text-lg text-purple-900 leading-7 font-semibold">{{ __('Pending Team Invitations') }}</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
            <div class="mt-10 sm:mt-0">
            
                @if(count(Auth::user()->invitations()) >0)
                
                    {{ __('These people have invited you to colaborate in their team. Pls accept the invitation.') }}
                
                    <div class="flex justify-center space-y-6 border border-b-2 border-purple-800 m-4  rounded-lg">
                        
                        @foreach (Auth::user()->invitations() as $invitation)
                        <div class="flex flex-col">
                            <div class="flex items-center justify-between m-4 font-serif leading-6 font-bold text-gray-600">about the teamgfhhfffhf fgfhfhf gfhhfffh ffhfhff hfhfhf</div>
                            <div class="flex items-center justify-between m-4 font-serif leading-6 font-bold text-gray-600">
                            <tr class="w-full">
                            <td>Team Name</td>
                            <td class="border border-b-4 border-gray-900">{{$invitation->team->name}}</td>
                            </tr></div>
                            <div class="flex items-center justify-center m-4 font-bold text-gray-600">
                                <div class="text m-4">Members</div>
                                <div class="bg-purple-800 h-auto w-auto p-2 rounded-full text-purple-100 text-center">{{count($invitation->team->teamUsers)}}</div>
                            </div>

                            <div class="flex items-center justify-center">
                                
                                <div class="flex">
                                    <!-- accept the invitaion -->
                                    <a href="{{route('team-invitations.accept',[$invitation->id])}}"><x-jet-button class="ml-4">
                                        {{ __('Accept Invitation') }}
                                    </x-jet-button>
                                    </a>
                                    <x-jet-danger-button class="ml-4">
                                        {{ __('Reject Invitation') }}
                                    </x-jet-button>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                Noinvitaion available    
                @endif
            
        </div>
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            <div class="ml-4 text-lg text-purple-900 leading-7 font-semibold">Kebbi Security</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Authentication and registration views are included with Laravel Jetstream, as well as support for user email verification and resetting forgotten passwords. So, you're free to get started what matters most: building your application.
            </div>
        </div>
    </div>
</div>
