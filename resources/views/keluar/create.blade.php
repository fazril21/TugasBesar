@extends("layouts.app")

@section("content")
    <div class="col-md-8 offset-md-2">
        <h3>Tambah Barang Keluar</h3>

        <form method="POST" action="{{ route('keluar.store') }}">
            @csrf
            <div class="form-group">
            <label for="barang" class="col-sm-2 col-form-label">Nama Baju</label>
            <select name="barang_id" class="form-control">
            @foreach ($barangs as $barang)
                <option value="{{$barang->id}}">{{$barang->namabaju}}</option>
             @endforeach
            </select>
            </div>

            <div class="form-group">
                <label for="name">Jumlah</label>
                <input type="text" class="form-control" name="jumlah"/>
            </div>
            <div class="input-group-text">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                <input type="date"  class="form-control-plaintext" name="tglkeluar" >
              </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection