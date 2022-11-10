@extends('layout.master')
@section('title','Register Admin')
@include('layout.header')
<!-- Main Content -->
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Data Admin</h1>
            {{-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">F</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item active">Halaman </div>
            </div> --}}
          </div>

          <div class="section-body">
          </div>

          <div class="row">
              <div class="card">
                <div class="card-body">
                  <div class="buttons">
                    <a href="{{url('admin/tambah')}} " class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah</a>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat Email</th>
                        <th scope="col">Jabatan</th>
                      </tr>
                    </thead>
                    
                        @foreach ($users as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              {{-- <td>{{ $proyek->firstItem()+$no }}</td> --}}
                              <td>{{ $data->name }}</td>
                              <td>{{ $data->email }}</td>
                              <td>{{ $data->jabatan }}</td>
                            </tr>
                       @endforeach
                  </table>
                </div>
              </div>
      </div>
        </section>
        @yield('content')
      </body>

      
@push('page-scripts')
@endpush      
</html>