@extends("layouts.app")

<?php $no=1 ?>
@section("content")
    <center><h3>Stock Baju</h3></center>
      <br/> 
        <a href="{{route('barang.create')}}" class="btn btn-success">Tambah Data  </a>

        <br/>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Baju</th>
                <th>Jenis Baju</th>
                <th>Stock</th>
                
                
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $barang->namabaju }}</td>
                        <td>{{ $barang->jenisbaju }}</td>
                        <td>{{ $barang->stock }}</td>
                        <td>
                          <button><a href="{{route('barang.edit', $barang->id)}}"><img src="image/edit.png" width="30" title="Edit"></a></button>
                        </td>
                        <td>
                          <form action="{{route('barang.destroy', $barang->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button  type="submit"><img src="image/delete.png" width="30" title="Delete"></button>
                          </form>
                        </td>
                    </tr>
                @endforeach
            </tr>
          </tbody>
   </table>
@stop