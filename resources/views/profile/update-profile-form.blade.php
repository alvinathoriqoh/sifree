<x-jet-form-section submit="updateProfile">
    <x-slot name="title">
        {{ __('Update Profile') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information.') }}
    </x-slot>

    <x-slot name="form">

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="nama" value="{{ __('Nama') }}" />
            <x-jet-input id="nama" type="text" class="mt-1 block w-full" wire:model.defer="state.nama" autocomplete="nama" />
            <x-jet-input-error for="nama" class="mt-2" />
        </div>

        <!-- Alamat -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
            <x-jet-input id="alamat" type="text" class="mt-1 block w-full" wire:model.defer="state.alamat" />
            <x-jet-input-error for="alamat" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="detail" value="{{ __('Detail') }}" />
            <x-jet-input id="detail" type="text" class="mt-1 block w-full" wire:model.defer="state.detail" />
            <x-jet-input-error for="detail" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="history" value="{{ __('History') }}" />
            <x-jet-input id="history" type="text" class="mt-1 block w-full" wire:model.defer="state.history" />
            <x-jet-input-error for="history" class="mt-2" />
        </div>
        
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
