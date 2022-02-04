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
<form method="POST" action="{{ route('keluar.update',$keluar->id)}}">
    @csrf
    @method('put')

  <div class="form-group">
      <label for="name">Jumlah</label>
      <input type="text" class="form-control" name="jumlah" value="{{$masuk->jumlah}}"/>
  </div>
  
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop