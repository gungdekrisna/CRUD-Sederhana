@extends('layout.layout')

@section('title','Detail Mahasiswa')

@section('judul')
	Detail Mahasiswa
@endsection

@section('konten')
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          	<input type="button" value="Kembali" class="btn btn-secondary btn-custom" onclick="location.href='/mahasiswa'">
          	<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>NIM</td>
                      <td>{{$mahasiswa->nim}}</td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td>{{$mahasiswa->nama}}</td>
                    </tr>
                    <tr>
                      <td>Prodi</td>
                      <td>{{$mahasiswa->prodi->nama_prodi}}</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>{{$mahasiswa->alamat}}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{$mahasiswa->email}}</td>
                    </tr>
                    <tr>
                      <td>Tempat Lahir</td>
                      <td>{{$mahasiswa->tempat_lahir}}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir</td>
                      <td>{{$mahasiswa->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                      <td>PA</td>
                      <td>{{$mahasiswa->dosen->nama_dosen}}</td>
                    </tr>  
                    <tr>
                      <td>Foto</td>
                      <td><img src="{{ URL::to('/') }}/images/{{ $mahasiswa->foto }}" width="500"></td>
                    </tr>                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>




	<!-- <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{$mahasiswa->id}}">
		<p>
			<label>Prodi</label>
			<select name="id_prodi">
				@foreach($all_prodi as $prodi)
				<option value="{{$prodi->id}}" @if($prodi->id==$mahasiswa->id_prodi) selected @endif>{{$prodi->nama_prodi}}</option>
				@endforeach
			</select>
		</p>
		<p>
			<label>NIM</label>
			<input type="text" name="nim" value="{{$mahasiswa->nim}}" readonly>
		</p>
		<p>
			<label>Nama</label>
			<input type="text" name="nama" value="{{$mahasiswa->nama}}" readonly>
		</p>
		<p>
			<label>Alamat</label>
			<input type="text" name="alamat" value="{{$mahasiswa->alamat}}" readonly>
		</p>
		<p>
			<label>Email</label>
			<input type="text" name="email" value="{{$mahasiswa->email}}" readonly>
		</p>
		<p>
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}" readonly>
		</p>
		<p>
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" readonly>
		</p>
		<p>
			<label>PA</label>
			<select name="id_pa">
				@foreach($all_dosen as $dosen)
				<option value="{{$dosen->id}}" @if($dosen->id==$mahasiswa->id_pa) selected @endif>{{$dosen->nama_dosen}}</option>
				@endforeach
			</select>
		</p>
		<p>
			<input type="button" value="Kembali" onclick="location.href='/'">
		</p>
	</form> -->
@endsection
