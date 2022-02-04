@extends("layouts.app")

@section("content")
    <div class="col-md-8 offset-md-2">
        <h3>Tambah Barang Masuk</h3>

        <form method="POST" action="{{ route('masuk.store') }}">
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
                <label for="name">XS</label>
                <input type="text" class="form-control" name="xs"/>
            </div>
            <div class="form-group">
                <label for="name">X</label>
                <input type="text" class="form-control" name="x"/>
            </div>
            <div class="form-group">
                <label for="name">M</label>
                <input type="text" class="form-control" name="m"/>
            </div>
            <div class="form-group">
                <label for="name">L</label>
                <input type="text" class="form-control" name="l"/>
            </div>
            <div class="form-group">
                <label for="name">XL</label>
                <input type="text" class="form-control" name="xl"/>
            </div>
            <div class="form-group">
                <label for="name">XXL</label>
                <input type="text" class="form-control" name="xxl"/>
            </div>
            <div class="form-group">
                <label for="name">Jumlah</label>
                <input type="text" class="form-control" name="jumlah"/>
            </div>
            <div class="form-group">
                <label for="name"> Penjahit</label>
                <input type="text" class="form-control" name="namapenjahit"/>
            </div>
            <div class="input-group-text">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <input type="date"  class="form-control-plaintext" name="tglmasuk" >
              </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection