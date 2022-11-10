@extends('layout.master')
@section('title','Proyek')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Data Proyek</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active">Table Proyek</div>
            </div>
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
                        <th scope="col">Judul</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Detail</th>
                         <th scope="col">Action</th>
                      </tr>
                    </thead>
                    
                        @foreach ($proyek as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              {{-- <td>{{ $proyek->firstItem()+$no }}</td> --}}
                              <td>{{ $data->judul }}</td>
                              <td>{{ $data->jenis }}</td>
                              <td>{{ $data->detail }}</td>
                              {{-- <td><a class="btn btn-icon btn-info" href="{{ url('/proyek/dl/' . encrypt($data->id)) }}">Download</td> --}}
                                <td><a class="btn btn-icon btn-info" href="{{ url('/proyek/dl/' . ($data->file)) }}"><i class="fas fa-info-circle"></i></a>
                              <a class="btn btn-icon btn-dark" href="{{ url('/freelancer/detail/' . encrypt($data->id)) }}"><i class="far fa-file"></i></a>
                              </td>
                            </tr>
                           
                       @endforeach
                  </table>
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