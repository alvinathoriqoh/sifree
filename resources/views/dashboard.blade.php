<x-app-layout>
    {{-- <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome!') }}
        </h1>
        
    </x-slot> --}}

    {{-- @foreach ($proyek => $data) 
      @endforeach--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="font-semibold text-xxl text-gray-800 leading-tight">
                {{ __('Welcome!') }}</h1>
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sistem Informasi Freelancer') }}
            </h3>
        </div>
    </div>
    {{-- <img href="" src="assets/img/job.png" height="2" weight="2">
    <img src="assets/img/job.png" height="2" weight="2"> --}}
<img src="assets/img/we.png" height="100" weight="100">
{{-- <a href="{{route('proyek.data',$proyek->id_proyek) }}" class="text-blue"> --}}
  {{-- <button wire:click="edit({{ $proyek->id_proyek}})" class="bg-blue-500 hover:bg-blue-700 text-white 
    font-bold py-2 px-4 rounded">Edit</button> --}}
  {{-- <x-jet-button wire:loading.attr="disabled" href="{{url('proyek.data')}}">
      {{ __('Proyek') }}
  </x-jet-button> --}}

{{-- <x-jet-button wire:loading.attr="disabled" wire:target="photo">
  {{ __('Save') }}
</x-jet-button> --}}
{{-- <body background="assets/img/ds.jpg"></body> --}}
    {{-- <div class="main-content" style="min-height: 100px;">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 mb-7">
                <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg" style="background-image: url(&quot;../assets/img/unsplash/andre-benz-1214056-unsplash.jpg&quot;);">
                  <div class="hero-inner">
                    <h2>Welcome,!</h2>
                    <p class="lead"></p>
                    <div class="mt-4">
                      <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
                    </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </section>
      </div> --}}
</x-app-layout>
