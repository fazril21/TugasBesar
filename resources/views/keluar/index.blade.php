@extends("layouts.app")

<?php $no=1 ?>
@section("content")
    <center><h3>Barang Keluar</h3></center>
      <br/> 
        <a href="{{route('keluar.create')}}" class="btn btn-success">Tambah Data  </a>

        <br/>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Baju</th>              
                <th>Jumlah</th>
                <th>Tanggal Keluar</th>
            
                
                
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($keluars as $keluar)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $keluar->barang->namabaju }}</td>
                        <td>{{ $keluar->jumlah }}</td>
                        <td>{{ $keluar->tglkeluar }}</td>                      
                        <td>
                          <button><a href="{{route('keluar.edit', $keluar->id)}}"><img src="image/edit.png" width="30" title="Edit"></a></button>
                        </td>
                        <td>
                          <form action="{{route('keluar.destroy', $keluar->id)}}" method="post">
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