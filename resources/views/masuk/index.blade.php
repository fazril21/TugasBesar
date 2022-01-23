@extends("layouts.app")

<?php $no=1 ?>
@section("content")
    <center><h3>Barang Masuk</h3></center>
      <br/> 
        <a href="{{route('masuk.create')}}" class="btn btn-success">Tambah Data  </a>

        <br/>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Baju</th>
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
                {{-- @foreach ($masuks as $masuk)
                    <tr>
                        
                        <td>
                          <button><a href="{{route('masuk.edit', $barang->id)}}"><img src="image/edit.png" width="30" title="Edit"></a></button>
                        </td>
                        <td>
                          <form action="{{route('masuk.destroy', $barang->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button  type="submit"><img src="image/delete.png" width="30" title="Delete"></button>
                          </form>
                        </td>
                    </tr>
                @endforeach --}}
            </tr>
          </tbody>
   </table>
@stop