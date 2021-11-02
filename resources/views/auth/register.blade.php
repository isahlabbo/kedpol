<x-guest-layout>
    @section('title')
        Registration
    @endsection
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Phone') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('NIN') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="nin" :value="old('nin')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Local Government') }}" />
                <select id="password" class="block mt-1 w-full border-purple-500 focus:border-purple-800 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="lga" required >
                <option>Local Gvernment</option>
                @foreach($lgas as $lga)
                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Ward') }}" />
                <select id="password" class="block mt-1 w-full border-purple-500 focus:border-purple-800 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="ward" required >
                <option>Ward</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Polling Unit') }}" />
                <select id="password" class="block mt-1 w-full border-purple-500 focus:border-purple-800 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="polling_unit" required >
                <option>Poling Unit</option>
                </select>
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
