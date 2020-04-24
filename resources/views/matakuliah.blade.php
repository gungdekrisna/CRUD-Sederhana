@extends('layout.layout')

@section('title','Matakuliah')

@section('judul')
    Daftar Matakuliah
@endsection

@section('konten')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <input type="button" value="Tambah Matakuliah Baru" class="btn btn-primary btn-custom" onclick="location.href='/matakuliah/create'">
            <!-- <input type="button" value="Kurikulum" onclick="location.href='/kurikulum'">
            <input type="button" value="Dosen" onclick="location.href='/dosen'">
            <input type="button" value="Prodi" onclick="location.href='/prodi'">
            <input type="button" value="Mahasiswa" onclick="location.href='/mahasiswa'"> -->
            <br>
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                        <th>Kode Matakuliah</th>
                        <th>Nama Matakuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Kurikulum</th>
                        <th>Dosen</th>
                        <th>Prodi</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($all_matakuliah->isEmpty())
                        <tr><td colspan="9" align="center">Belum ada data ...</td></tr>
                    @else
                        @foreach($all_matakuliah as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->kode_matakuliah}}</td>
                                <td>{{$row->nama_matakuliah}}</td>
                                <td>{{$row->sks}}</td>
                                <td>{{$row->semester}}</td>

                                <td>{{$row->kurikulum->nama_kurikulum}}</td>
                                <td>{{$row->dosen->nama_dosen}}</td>
                                <td>{{$row->prodi->nama_prodi}}</td>
                                <td>
                                    <span>
                                        <input type="button" value="Edit" class="btn btn-warning" onclick="location.href='/matakuliah/{{$row->id}}/edit'">
                                        <form style="display:inline-block;" action="/matakuliah/{{$row->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                        <input type="button" value="Details" class="btn btn-info" onclick="location.href='/matakuliah/{{$row->id}}'">
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    <!-- <tfoot>
                    <tr>
                      <th>No</th>
                        <th>Kode Matakuliah</th>
                        <th>Nama Matakuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Kurikulum</th>
                        <th>Dosen</th>
                        <th>Prodi</th>
                        <th>Action</th>
                    </tr>
                    </tfoot> -->
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->



            <!-- @if($all_matakuliah->isEmpty())
                Belum ada data ...
            @else
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Kurikulum</th>
                    <th>Dosen</th>
                    <th>Prodi</th>
                    <th>Action</th>
                </tr>
                @foreach($all_matakuliah as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->kode_matakuliah}}</td>
                        <td>{{$row->nama_matakuliah}}</td>
                        <td>{{$row->sks}}</td>
                        <td>{{$row->semester}}</td>

                        <td>{{$row->kurikulum->nama_kurikulum}}</td>
                        <td>{{$row->dosen->nama_dosen}}</td>
                        <td>{{$row->prodi->nama_prodi}}</td>
                        <td>
                            <span>
                                <input type="button" value="Edit" onclick="location.href='/matakuliah/{{$row->id}}/edit'">
                                <form style="display:inline-block;" action="/matakuliah/{{$row->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                </form>
                                <input type="button" value="Details" onclick="location.href='/matakuliah/{{$row->id}}'">
                            </span>
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif -->


        </div>
      </div>
    </div>
</section>
    <!-- /.content -->
@endsection