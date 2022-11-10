@extends('layout.master')
@section('title','Edit')
@include('layout.header')


@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      
      <h1>Edit</h1>
      <div class="section-header-breadcrumb">
        {{-- <div class="breadcrumb-item active"><a href="#">F</a></div> --}}
        <div class="breadcrumb-item"><a href="{{url('/freelancer/proyek/')}}">Proyek</a></div>
        <div class="breadcrumb-item active">Edit Data</div>
      </div>
    </div>

      <div class="section-body">
         
        <div class="card">
          @if (session("success"))
            <div class="alert alert-primary">{{ session('success') }}</div>
          @endif
          @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                  {!! implode('', $errors->all('<li>:message</li>')) !!}
              </div>
          @endif
            {{-- <form action="{{url('proyek/update/{id_proyek}')}}" method="POST" enctype="multipart/form-data"> --}}
              <form action="{{ url('/proyek/update/' . $proyek->id) }}">
                @csrf
            <div class="card-body">
                {{-- <form action="{{ route('proyek.simpan') }}" method="POST"> --}}
              <div class="form-group">
                <label>Judul</label>
                <input disabled reuquire type="text" class="form-control" name="judul" value="{{ $proyek->judul }}">
              </div>
              <div class="form-group">
                <label>Jenis</label>
                <select disabled reuquire class="form-control" name="jenis" value="{{ $proyek->jenis }}">
                  <option>Sistem Informasi</option>
                  <option>Design</option>
                  <option>Jaringan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Detail</label>
                <input disabled reuquire type="text" class="form-control" name="detail" value="{{ $proyek->detail }}">
              </div>
              {{-- <div class="form-group">
                <label>Detail</label>
                <textarea class="form-control" name="detail" value="{{ $proyek->detail }}"></textarea>
              </div> --}}
              <div class="form-group">
                <label>Tanggal Mulai</label>
                <input disabled reuquire type="date" class="form-control" name="tgl_mulai" value="{{ $proyek->tgl_mulai }}">
              </div>
              <div class="form-group">
                <label>Tanggal Selesai</label>
                <input disabled reuquire type="date" class="form-control" name="tgl_selesai" value="{{ $proyek->tgl_selesai }}">
              </div>
              
              <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="{{ $proyek->harga }}">
              </div>
              <div class="form-group">
                <label>Keunggulan</label>
                <input type="text" class="form-control" name="keunggulan" value="{{ $proyek->keunggulan }}">
              </div>
              <div class="form-group">
                <label>Durasi</label>
                <input type="text" class="form-control" name="durasi" value="{{ $proyek->durasi }}">
              </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary mr-1" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
  @yield('content')
      </body>

      
@push('page-scripts')
@endpush      
</html>