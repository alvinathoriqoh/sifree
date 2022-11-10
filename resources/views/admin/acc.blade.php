@extends('layout.master')
@section('title','Aprroval Proyek')
@include('layout.header')
<!-- Main Content -->
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Approval Proyek</h1>
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
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    
                        @foreach ($proyek as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              <td>{{ $data->judul }}</td>
                              <td>{{ $data->jenis }}</td>
                              <td>{{ $data->detail }}</td>
                              <td>{{ $data->tgl_mulai }}</td>
                              <td>{{ $data->tgl_selesai }}</td>
                              <td>{{ $data->harga }}</td>
                             <td>
                               @if($data->status==1)
                              <b style="color:green"> Approved</b>
                              @else
                              <b style="color:red">  Not Yet Approved</b>
                              @endif
                             </td>
                             <td>
                                @if($data->status==1)
                                <a href="{{ url('/admin/acc/'.$data->id)}}" class="btn btn-icon btn-primary"></i>Approve Now</a>
                                @else
                                <a href="{{ url('/admin/acc/'.$data->id)}}" class="btn btn-icon btn-primary"></i>Approved</a>
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