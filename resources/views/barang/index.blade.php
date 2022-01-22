@extends("layouts.app")

<?php $no=1 ?>
@section("content")
    <h3>Data Baju</h3>
        <a href="{{route('barang.create')}}" class="btn btn-success">Tambah Data</a>
        
   <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Baju</th>
                <th>Nama Baju</th>
                <th>Jenis Baju</th>
                <th>Nama Penjahit</th>
                <th>Stock</th>
                <th>Tanggal Masuk</th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $barang->code }}</td>
                        <td>{{ $barang->namabaju }}</td>
                        <td>{{ $barang->jenisbaju }}</td>
                        <td>{{ $barang->namapenjahit }}</td>
                        <td>{{ $barang->stock }}</td>
                        <td>{{ date('d-m-y',strtotime ($barang->tgl_masuk)) }}</td>
                        <td>
                          <a href="{{route('barang.edit', $barang->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                          <form action="{{route('barang.destroy', $barang->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                        </td>
                    </tr>
                @endforeach
            </tr>
          </tbody>
   </table>
@stop