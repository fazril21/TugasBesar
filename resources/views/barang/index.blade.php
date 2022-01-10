@extends("layouts.app")

<?php $no=1 ?>
@section("content")
    <h3>Data Mahasiswa</h3>
        <a href="#" class="btn btn-success">Tambah Data</a>
        
   <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Prodi</th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody> 
   </table>
@stop