@extends('layout.master')
@section('title','Daftar Perusahaan')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Daftar Perusahaan</h1>
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
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Detail</th>
                      </tr>
                    </thead>
                    
                        @foreach ($users as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              {{-- <td>{{ $proyek->firstItem()+$no }}</td> --}}
                              <td>{{ $data->nama_perusahaan }}</td>
                              <td>{{ $data->alamat }}</td>
                              <td>{{ $data->detail }}</td>
                            
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