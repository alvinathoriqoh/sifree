@extends('admin.layout.master')
@section('title','Perusahaan')
@include('admin.layout.header')

<body>
  @section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          
          <h1>Profile Perusahaan</h1>
          <div class="section-header-breadcrumb">
            {{-- <div class="breadcrumb-item active"><a href="#">F</a></div>--}}
            {{-- <div class="breadcrumb-item"><a href="{{ url('proyek') }}">Dashboard</a></div>  --}}
            <div class="breadcrumb-item active">Profile Perusahaan</div>
          </div>
        </div>
                  
                  <div class="card">
                      <div class="card-header">
                        <h4>Profile Information</h4>
                      </div>
                            @csrf
                            <div class="card-body">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">History</th>
                                    <th scope="col">Aksi</th>
                                  </tr>
                                </thead>
                                
                                    @foreach ($perusahaan as $no => $data)
                                        <tr>
                                          <td>{{ $no+1 }}</td>
                                          <td>{{ $data->nama}}</td>
                                          <td>{{ $data->alamat }}</td>
                                          <td>{{ $data->detail }}</td>
                                          <td>{{ $data->history }}</td>
                                          <td>
                                                {{-- <a class="btn btn-icon btn-dark" href="{{ url('/proyek/edit/' . encrypt($data->id)) }}"><i class="far fa-file"></i></a>
                                                <a class="btn btn-icon btn-danger" onclick="return confirm('anda yakin menghapus {{ $data-> }}')" href="{{ url('/proyek/delete/' . encrypt($data->id_proyek)) }}"><i class="fas fa-times"></i></a> --}}
                                          </td>
                                        </tr>
                                   @endforeach
                              </table>
                    </div>       
      </section>
    </div>
  @yield('content')
</body>


@push('page-scripts')
@endpush      
</html>