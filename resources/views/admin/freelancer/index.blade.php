@extends('admin.layout.master')
@section('title','Freelancer')
@include('admin.layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Data Freelancer</h1>
            {{-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">F</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item active">Table Proyek</div>
            </div> --}}
          </div>
          <div class="row">
              <div class="card">
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat Asal</th>
                        <th scope="col">Alamat Domisili</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">History</th>
                      </tr>
                    </thead>
                    
                        @foreach ($freelancer as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              {{-- <td>{{ $proyek->firstItem()+$no }}</td> --}}
                              <td>{{ $data->nama}}</td>
                              <td>{{ $data->NIK }}</td>
                              <td>{{ $data->detail }}</td>
                              <td>{{ $data->tgl_lahir }}</td>
                              <td>{{ $data->alamat_asal }}</td>
                              <td>{{ $data->alamat_domisili }}</td>
                              <td>{{ $data->pendidikan }}</td>
                              <td>{{ $data->history }}</td>
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