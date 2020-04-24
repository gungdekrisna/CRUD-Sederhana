@extends('layout.layout')

@section('title','Prodi')

@section('judul')
    Daftar Prodi
@endsection

@section('konten')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <input type="button" value="Tambah Prodi Baru" class="btn btn-primary btn-custom" onclick="location.href='/prodi/create'">
            <br>
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Prodi</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($all_prodi->isEmpty())
                        <tr><td colspan="9" align="center">Belum ada data ...</td></tr>
                    @else
                       @foreach($all_prodi as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->nama_prodi}}</td>
                                <td>{{$row->tahun}}</td>
                                <td>
                                    <span>
                                        <input type="button" value="Edit" class="btn btn-warning" onclick="location.href='/prodi/{{$row->id}}/edit'">
                                        <form style="display:inline-block;" action="/prodi/{{$row->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                        <input type="button" value="Details" class="btn btn-info" onclick="location.href='/prodi/{{$row->id}}'">
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

 
   <!--  @if($all_prodi->isEmpty())
        Belum ada data ...
    @else
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Tahun</th>
            <th>Action</th>
        </tr>
        @foreach($all_prodi as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->nama_prodi}}</td>
                <td>{{$row->tahun}}</td>
                <td>
                    <span>
                        <input type="button" value="Edit" onclick="location.href='/prodi/{{$row->id}}/edit'">
                        <form style="display:inline-block;" action="/prodi/{{$row->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                        <input type="button" value="Details" onclick="location.href='/prodi/{{$row->id}}'">
                    </span>
                </td>
            </tr>
        @endforeach
    </table>
    @endif -->
@endsection