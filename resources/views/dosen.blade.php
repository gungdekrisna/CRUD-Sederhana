@extends('layout.layout')

@section('title','Dosen')

@section('judul')
    Daftar Dosen
@endsection

@section('konten')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <input type="button" value="Tambah Dosen Baru" class="btn btn-primary btn-custom" onclick="location.href='/dosen/create'">
            <br>
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP Dosen</th>
                        <th>Nama Dosen</th>
                        <th>Prodi</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($all_dosen->isEmpty())
                        <tr><td colspan="9" align="center">Belum ada data ...</td></tr>
                    @else
                        @foreach($all_dosen as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->nip_dosen}}</td>
                                <td>{{$row->nama_dosen}}</td>
                                <td>{{$row->prodi->nama_prodi}}</td>
                                <td><img src="{{ URL::to('/') }}/images/{{ $row->foto }}" width="50"></td>
                                <td>
                                    <span>
                                        <input type="button" value="Edit" class="btn btn-warning" onclick="location.href='/dosen/{{$row->id}}/edit'">
                                        <form style="display:inline-block;" action="/dosen/{{$row->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                        <input type="button" value="Details" class="btn btn-info" onclick="location.href='/dosen/{{$row->id}}'">
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



    <!-- @if($all_dosen->isEmpty())
        Belum ada data ...
    @else
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIP Dosen</th>
            <th>Nama Dosen</th>
            <th>Action</th>
        </tr>
        @foreach($all_dosen as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->nip_dosen}}</td>
                <td>{{$row->nama_dosen}}</td>
                <td>
                    <span>
                        <input type="button" value="Edit" onclick="location.href='/dosen/{{$row->id}}/edit'">
                        <form style="display:inline-block;" action="/dosen/{{$row->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                        <input type="button" value="Details" onclick="location.href='/dosen/{{$row->id}}'">
                    </span>
                </td>
            </tr>
        @endforeach
    </table>
    @endif -->
@endsection