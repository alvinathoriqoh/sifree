<x-jet-form-section submit="updateProfileInformation" x-data="role_id->$role_id">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update informasi profil Anda.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="role_id" value="{{ __('Sebagai:') }}" />
            {{-- <x-jet-input name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            wire:model.defer="state.role_id" autocomplete="role_id"/> --}}
            <select id="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            wire:model.defer="state.role_id" autocomplete="role_id">
                <option value="1">Freelancer</option>
                <option value="2">Perusahaan</option>
                <option value="3">Admin</option>
            </select>
        </div>
        @if(auth()->user()->role_id=='2')
        <div class="col-span-6 sm:col-span-4"  x-show="role_id == 2">
            <x-jet-label for="nama_perusahaan" value="{{ __('Nama Perusahaan') }}" />
            <x-jet-input id="nama_perusahaan" type="text" class="mt-1 block w-full" wire:model.defer="state.nama_perusahaan" autocomplete="nama_perusahaan" />
            <x-jet-input-error for="nama_perusahaan" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4"  x-show="role_id == 2">
            <x-jet-label for="alamat" value="{{ __('Alamat Perusahaan') }}" />
            <x-jet-input id="alamat" type="text" class="mt-1 block w-full" wire:model.defer="state.alamat" autocomplete="alamat" />
            <x-jet-input-error for="alamat" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4"  x-show="role_id == 2">
            <x-jet-label for="detail" value="{{ __('Detail Perusahaan') }}" />
            <x-jet-input id="detail" type="text" class="mt-1 block w-full" wire:model.defer="state.detail" autocomplete="detail" />
            <x-jet-input-error for="detail" class="mt-2" />
        </div>
        @endif
        @if(auth()->user()->role_id=='3')
        <div class="col-span-6 sm:col-span-4"  x-show="role_id == 3">
            <x-jet-label for="jabatan" value="{{ __('Jabatan') }}" />
            <x-jet-input id="jabatan" type="text" class="mt-1 block w-full" wire:model.defer="state.jabatan" autocomplete="jabatan" />
            <x-jet-input-error for="jabatan" class="mt-2" />
        </div>
@endif
        @if(auth()->user()->role_id=='1')
    
    <div class="col-span-6 sm:col-span-4"  x-show="role_id == 1">
        <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
        <x-jet-input id="alamat" type="text" class="mt-1 block w-full" wire:model.defer="state.alamat" autocomplete="alamat" />
        <x-jet-input-error for="alamat" class="mt-2" />
    </div>
        @endif
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>

</x-jet-form-section>
