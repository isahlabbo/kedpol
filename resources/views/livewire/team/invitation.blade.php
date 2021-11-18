<div class="flex items-center justify-center">
    <div class="flex">
        <!-- accept the invitaion -->
        <form wire:submit.prevent="acceptInvitation">
            <x-jet-button class="ml-4">
                {{ __('Accept Invitation') }}
            </x-jet-button>
        </form>
        
        <form wire:submit.prevent="rejectInvitation">
        <x-jet-danger-button class="ml-4">
            {{ __('Reject Invitation') }}
        </x-jet-button>
        </form>
    </div>
    </div>
</div>