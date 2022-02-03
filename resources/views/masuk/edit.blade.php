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
<form method="POST" action="{{ route('masuk.update',$masuk->id)}}">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="name">XS</label>
      <input type="text" class="form-control" name="xs" value="{{$masuk->xs}}"/>
  </div>
  <div class="form-group">
      <label for="name">X</label>
      <input type="text" class="form-control" name="x" value="{{$masuk->x}}"/>
  </div>
  <div class="form-group">
      <label for="name">M</label>
      <input type="text" class="form-control" name="m" value="{{$masuk->m}}"/>
  </div>
  <div class="form-group">
      <label for="name">L</label>
      <input type="text" class="form-control" name="l" value="{{$masuk->l}}"/>
  </div>
  <div class="form-group">
      <label for="name">XL</label>
      <input type="text" class="form-control" name="xl" value="{{$masuk->xl}}"/>
  </div>
  <div class="form-group">
      <label for="name">XXL</label>
      <input type="text" class="form-control" name="xxl" value="{{$masuk->xxl}}"/>
  </div>
  <div class="form-group">
      <label for="name">Jumlah</label>
      <input type="text" class="form-control" name="jumlah" value="{{$masuk->jumlah}}"/>
  </div>
  
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop