@extends("layouts.app")

<?php $no=1 ?>
@section("content")
    <center><h3>Barang Masuk</h3></center>
      <br/> 
        <div>
        <a href="{{route('masuk.create')}}" class="btn btn-success">Tambah Data  </a>
        </div>
        <br/>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Baju</th>
                <th>XS</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>               
                <th>Jumlah</th>
                <th>Nama Penjahit</th>
                <th>Tanggal Masuk</th>
            
                
                
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($masuks as $masuk)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $masuk->barang->namabaju }}</td>
                        <td>{{ $masuk->xs }}</td>
                        <td>{{ $masuk->x }}</td>
                        <td>{{ $masuk->m }}</td>
                        <td>{{ $masuk->l }}</td>
                        <td>{{ $masuk->xl }}</td>
                        <td>{{ $masuk->xxl }}</td>
                        <td>{{ $masuk->jumlah }}</td>
                        <td>{{ $masuk->namapenjahit }}</td>
                        <td>{{ $masuk->tglmasuk }}</td>                      
                        <td>
                          <button><a href="{{route('masuk.edit', $masuk->id)}}"><img src="image/edit.png" width="30" title="Edit"></a></button>
                        </td>
                        <td>
                          <form action="{{route('masuk.destroy', $masuk->id)}}" method="post">
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