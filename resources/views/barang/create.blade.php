@extends("layouts.app")

@section("content")
    <div class="col-md-8 offset-md-2">
        <h3>Tambah Fakultas</h3>

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
                <label for="name">Stock</label>
                <input type="text" class="form-control" name="stock"/>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection