@extends("layouts.app")

@section("content")
    <div class="col-md-8 offset-md-2">
        <h3>Tambah Baju</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

        <form method="POST" action="{{ route('barang.store') }}">
            @csrf
          
            <div class="form-group">
                <label for="name">Nama Baju</label>
                <input type="text" class="form-control" name="namabaju"/>
            </div>
            <div class="form-group">
                <label for="name">Jenis Baju</label>
                <input type="text" class="form-control" name="jenisbaju"/>
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
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection