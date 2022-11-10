@extends('layout.master')
@section('title','Daftar Freelancer')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Daftar Freelancer</h1>
            </div>
           
            <div class="row">
              @foreach ($users as $no => $data)
              
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card card-primary">
                  <div class="card-header">
                    <figure class="avatar mr-2 avatar-xl">
                      <img src="../assets/img/avatar/avatar-1.png" alt="...">
                    </figure>
                    <h4>   </h4>
                    <h4>{{ $data->name }}</h4>
                    
                  </div>
                  
                  <div class="card-body">
                    <a class="fas fa-graduation-cap"> {{ $data->jabatan }}</a></br><br/>
                    <a class="fas fa-address-book">  Contact: {{ $data->email }}</a></br><br/>
                    <a class="fas fa-home">  Alamat : {{ $data->alamat }}</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </section>
      </div>
        @yield('content')
      </body>

      
@push('page-scripts')
@endpush      
</html>