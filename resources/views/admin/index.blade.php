@extends('layout.master')
@section('title','Enable Disable Users')
@include('layout.header')
<!-- Main Content -->
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Enable Disable Users</h1>
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
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    
                        @foreach ($users as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              {{-- <td>{{ $proyek->firstItem()+$no }}</td> --}}
                              <td>{{ $data->name }}</td>
                              <td>{{ $data->nama_perusahaan }}</td>
                              <td>{{ $data->alamat }}</td>
                              <td>{{ $data->detail }}</td>
                              <td>{{ $data->jabatan }}</td>
                             <td>
                               @if($data->status==1)
                              <b style="color:green"> Enable</b>
                              @else
                              <b style="color:red">  Disabled</b>
                              @endif
                              {{-- <a onclick="return confirm('anda  {{ $data->name }}')" href="{{ url('/admin/')}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a> --}}
                             </td>
                             <td>
                                @if($data->status==1)
                                <a href="{{ url('/admin/status/'.$data->id)}}" class="btn btn-icon btn-primary"></i>Disable</a>
                                @else
                                <a href="{{ url('/admin/status/'.$data->id)}}" class="btn btn-icon btn-primary"></i>Enable</a>
                                @endif
                             </td>
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