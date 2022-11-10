@extends('layout.master')
@section('title','Proyek')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
                    
            <h1>{{ $proyek->judul }}</h1> </div>
<div class="card author-box card-primary">
    <div class="card-body">
      
     
        <div class="author-box-name">
          <a>{{ $proyek->user->nama_perusahaan}}</a>
        </div>
        <div class="author-box-job">{{ $proyek->tgl_mulai }} - {{ $proyek->tgl_selesai }}</div>
        <div class="author-box-description">
          <p>{{ $proyek->detail }}</p>
          {{-- <a>Dokumen pendukung disini</a><br/> --}}
          <a class="btn btn-icon " href="{{ url('/proyek/dl/' . ($proyek->file)) }}">Dokumen pendukung disini</a><br/><br/>
          <h1 class="far fa-money-bill-alt">   Salary : {{ $proyek->harga }}</h1>
        </div>
        
        <div class="mb-2 mt-3"><div class="text-small font-weight-bold fas fa-user-alt">   Author : {{ $proyek->user->name }}</div></div>
          
        <div class="w-100 d-sm-none"></div>
        <div class="float-right mt-sm-0 mt-3">
                <a href="{{ url('/freelancer/edit/' . encrypt($proyek->id)) }}"  class="btn btn-icon btn-info"></>Tawar</a>
          <a href="{{url('proyek/')}}" class="btn">Back <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

</div>
</section>
@yield('content')
</body>


@push('page-scripts')
@endpush      
</html>