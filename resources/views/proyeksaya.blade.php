@extends('layout.master')
@section('title','proyek saya')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Data Proyek Saya</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active">Proyek Saya</div>
            </div>
          </div>
          <div class="section-body">
          </div>

          <div class="row">
              <div class="card">
                <div class="card-body">
                  {{-- @foreach ($proyek as $proyek) --}}
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Jenis</th>
                        {{-- <th scope="col">Detail</th> --}}
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">Salary</th>
                        {{-- <th scope="col">Durasi</th> --}}
                        {{-- <th scope="col">Keunggulan</th> --}}
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        
                      </tr>
                    </thead>
          
                        @foreach ($proyek as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              {{-- <td>{{ $proyek->firstItem()+$no }}</td> --}}
                              <td>{{ $data->judul }}</td>
                              <td>{{ $data->jenis }}</td>
                              {{-- <td>{{ $data->detail }}</td> --}}
                              <td>{{ $data->tgl_mulai }}</td>
                              <td>{{ $data->tgl_selesai }}</td>
                              <td>{{ $data->harga }}</td>
                             <td>
                              @if($data->deal==1)
                              <b style="color:green"> Deal</b>
                              @else
                              <b style="color:red">  No Approval Yet</b>
                              @endif
                            
                                @if($data->deal==1)
                                <a href="{{ url('/proyeksaya/'.$data->id)}}" class="btn btn-icon btn-primary"></i>Approved</a>
                                @else
                                <a href="{{ url('/proyeksaya/'.$data->id)}}" class="btn btn-icon btn-primary"></i>Approve Now</a>
                                @endif
                             </td>
                             <td>
                              <a class="btn btn-icon btn-dark" href="{{ url('/proyek/edit/' . encrypt($data->id)) }}"><i class="far fa-file"></i></a>
                              <a class="btn btn-icon btn-danger" onclick="return confirm('anda yakin menghapus {{ $data->judul }}')" href="{{ url('/proyek/delete/' . encrypt($data->id)) }}"><i class="fas fa-times"></i></a>
                       </td>
                            </tr>
                       @endforeach
                  </table>
                  {{-- @endforeach --}}
                </div>
              </div>
      </div>
        </section>
        @yield('content')
      </body>

      
@push('page-scripts')
@endpush      
</html>