@extends('layout.layout')

@section('title','Matakuliah')

@section('judul')
    Daftar Kurikulum
@endsection

@section('konten')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <input type="button" value="Tambah Kurikulum Baru" class="btn btn-primary btn-custom" onclick="location.href='/kurikulum/create'">
            <br>
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kurikulum</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($all_kurikulum->isEmpty())
                        <tr><td colspan="9" align="center">Belum ada data ...</td></tr>
                    @else
                        @foreach($all_kurikulum as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->nama_kurikulum}}</td>
                                <td>{{$row->tahun}}</td>
                                <td>
                                    <span>
                                        <input type="button" value="Edit" class="btn btn-warning" onclick="location.href='/kurikulum/{{$row->id}}/edit'">
                                        <form style="display:inline-block;" action="/kurikulum/{{$row->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                        <input type="button" value="Details" class="btn btn-info" onclick="location.href='/kurikulum/{{$row->id}}'">
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
      </div>
    </section>




    <!-- @if($all_kurikulum->isEmpty())
        Belum ada data ...
    @else
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Kurikulum</th>
            <th>Tahun</th>
            <th>Action</th>
        </tr>
        @foreach($all_kurikulum as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->nama_kurikulum}}</td>
                <td>{{$row->tahun}}</td>
                <td>
                    <span>
                        <input type="button" value="Edit" onclick="location.href='/kurikulum/{{$row->id}}/edit'">
                        <form style="display:inline-block;" action="/kurikulum/{{$row->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                        <input type="button" value="Details" onclick="location.href='/kurikulum/{{$row->id}}'">
                    </span>
                </td>
            </tr>
        @endforeach
    </table>
    @endif -->
@endsection