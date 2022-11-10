@extends('layout.master')
@section('title','lelang')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Data Lelang</h1>
            <div class="section-header-breadcrumb">
              {{-- <div class="breadcrumb-item active"><a href="#">F</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div> --}}
              <div class="breadcrumb-item active">Lelang</div>
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
                        <th scope="col">Perusahaan</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
          
                        @foreach ($proyek as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              {{-- <td>{{ $proyek->firstItem()+$no }}</td> --}}
                              <td>{{ $data->judul }}</td>
                              <td>{{ $data->jenis }}</td>
                              <td>{{ $data->user->nama_perusahaan }}</td>
                              <td>
                                <?php
                                $tgl1 = strtotime($data->tgl_mulai); 
                                $tgl2 = strtotime($data->tgl_selesai); 

                                $jarak = $tgl2 - $tgl1;

                                $hari = $jarak / 60 / 60 / 24;
                                echo $hari." hari";
                                ?>
                              </td>
                              {{-- <td>{{ $data->keunggulan }}</td> --}}
                              <td>
                                @if($data->deal==1)
                                <b style="color:green">On Proses</b>
                                @else
                                <b style="color:red">Lelang</b>
                                @endif</td>
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