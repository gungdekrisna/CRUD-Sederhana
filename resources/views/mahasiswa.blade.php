@extends('layout.layout')

@section('title','Mahasiswa')

@section('judul')
    Daftar Mahasiswa
@endsection

@section('konten')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <input type="button" value="Tambah Mahasiswa Baru" class="btn btn-primary btn-custom" onclick="location.href='/mahasiswa/create'">
            <br>
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Prodi</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>PA</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($all_mahasiswa->isEmpty())
                        <tr><td colspan="10" align="center">Belum ada data ...</td></tr>
                    @else
                        @foreach($all_mahasiswa as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{ URL::to('/') }}/images/{{ $row->foto }}" width="50"></td>
                                <td>{{$row->prodi->nama_prodi}}</td>
                                <td>{{$row->nim}}</td>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->alamat}}</td>
                                <td>{{$row->dosen->nama_dosen}}</td>
                                <td>
                                    <span>
                                        <input type="button" value="Edit" class="btn btn-warning" onclick="location.href='/mahasiswa/{{$row->id}}/edit'">
                                        <form style="display:inline-block;" action="/mahasiswa/{{$row->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                        <input type="button" value="Details" class="btn btn-info" onclick="location.href='/mahasiswa/{{$row->id}}'">
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



    
   <!--  @if($all_mahasiswa->isEmpty())
        Belum ada data ...
    @else
    <table border="1">
        <tr>
            <th>No</th>
            <th>Prodi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>PA</th>
            <th>Action</th>
        </tr>
        @foreach($all_mahasiswa as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->prodi->nama_prodi}}</td>
                <td>{{$row->nim}}</td>
                <td>{{$row->nama}}</td>
                <td>{{$row->alamat}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->tempat_lahir}}</td>
                <td>{{$row->tanggal_lahir}}</td>
                <td>{{$row->dosen->nama_dosen}}</td>
                <td>
                    <span>
                        <input type="button" value="Edit" onclick="location.href='/mahasiswa/{{$row->id}}/edit'">
                        <form style="display:inline-block;" action="/mahasiswa/{{$row->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                        <input type="button" value="Details" onclick="location.href='/mahasiswa/{{$row->id}}'">
                    </span>
                </td>
            </tr>
        @endforeach
    </table>
    @endif -->
@endsection