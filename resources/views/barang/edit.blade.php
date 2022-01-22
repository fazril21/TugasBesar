@extends('layouts.app')
@section("content")
<div>
    <h3>Tambah Mahasiswa</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br />
        
    @endif
<form method="POST" action="{{ route('barang.update',$barang->id)}}">
    @csrf
    @method('put')
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Kode Baju</label>
    <input type="text"  class="form-control-plaintext" name="code" value="{{$barang->code}}">
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Baju</label>
    <input type="text"  class="form-control-plaintext" name="namabaju" value="{{$barang->namabaju}}">
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Penjahit</label>
    <input type="text"  class="form-control-plaintext" name="namapenjahit" value="{{$barang->namapenjahit}}">
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Baju</label>
    <input type="text"  class="form-control-plaintext" name="jenisbaju" value="{{$barang->jenisbaju}}">  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Stock</label>
    <input type="text"  class="form-control-plaintext" name="stock" value="{{$barang->stock}}">  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Masuk</label>
    <input type="date"  class="form-control-plaintext" name="tgl_masuk" value="{{ date('d-m-y',strtotime ($barang->tgl_masuk))}}">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop