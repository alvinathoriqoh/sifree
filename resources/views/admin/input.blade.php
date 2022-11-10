@extends('layout.master')

@section('title','Input')
@include('layout.header')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tambah User Admin</h1>
        <div class="section-header-breadcrumb">
          {{-- <div class="breadcrumb-item active"><a href="#">F</a></div> --}}
          <div class="breadcrumb-item"><a href="{{url('/admin/regis')}}">Data Admin</a></div>
          <div class="breadcrumb-item active">Tambah Admin</div>
        </div>
      </div>

      <div class="section-body">
         
        <div class="card">
            <form action="{{url('admin/simpan')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" value="{{ old('password') }}">
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}">
              </div>
              {{-- <label>Register as</label>
              <input type="hidden" class="form-control" name="role_id" value="{{ old('role_id') }}">
            </div> --}}
            <div class="form-group">
              <label>Register as</label>
              <select class="form-control" name="role_id">
                <option value="3" >Admin</option>
              </select>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary mr-1" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>