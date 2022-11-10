@extends('layout.master')
@section('title','Proyek')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Data Lowongan</h1>
            <div class="section-header-breadcrumb">
              {{-- <div class="breadcrumb-item active"><a href="#">F</a></div> --}}
              <div class="breadcrumb-item"><a href="{{ url('/proyek')}}">Table Proyek</a></div>
              <div class="breadcrumb-item active">Proyek saya</div>
            </div>
          </div>

          <div class="section-body">
          </div>

          <div class="row">
              <div class="card">
                <div class="card-body">
                    <div class="buttons">
                        <a href="{{url('proyek/tambah')}} " class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah</a>
                      </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Progres</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    
                        @foreach ($proyek as $no => $data)
                        @if(auth()->user()->id=='id_user')
                            <tr>
                              <td>{{ $no+1 }}</td>
                              {{-- <td>{{ $proyek->firstItem()+$no }}</td> --}}
                              <td>{{ $data->judul }}</td>
                              <td>{{ $data->jenis }}</td>
                              <td>{{ $data->detail }}</td>
                              <td>{{ $data->tgl_mulai }}</td>
                              <td>{{ $data->tgl_selesai }}</td>
                              <td>{{ $data->harga }}</td>
                              <td>{{ $data->progres }}</td>
                             <td>
                                {{-- <a href="{{ url('proyek/edit',$data->id_proyek) }}" class="btn btn-icon btn-dark"><i class="far fa-file"></i></a> --}}
                                {{-- <a href="#" onclick="return confirm('yakin hapus?')" class="btn btn-icon btn-danger"><i class="fas fa-times"></i>
                                    <form action="{{ url('proyek/delete') }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    </form></a> --}}
                                    <a class="btn btn-icon btn-dark" href="{{ url('/proyek/edit/' . encrypt($data->id)) }}"><i class="far fa-file"></i></a>
                                    <a class="btn btn-icon btn-danger" onclick="return confirm('anda yakin menghapus {{ $data->judul }}')" href="{{ url('/proyek/delete/' . encrypt($data->id)) }}"><i class="fas fa-times"></i></a>
                                
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