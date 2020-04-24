@extends('layout.layout')

@section('title','Edit Mahasiswa')

@section('judul')
	Edit Mahasiswa
@endsection

@section('konten')
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')

              	<input type="hidden" name="id" value="{{$mahasiswa->id}}">

                <div class="card-body">
                  <div class="form-group">
                    <label>Prodi</label>
					<select name="id_prodi" class="form-control">
						@foreach($all_prodi as $prodi)
						<option value="{{$prodi->id}}" @if($prodi->id==$mahasiswa->id_prodi) selected @endif>{{$prodi->nama_prodi}}</option>
						@endforeach
					</select>
                  </div>
                  <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" value="{{$mahasiswa->nim}}">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
					<input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
					<input type="text" name="alamat" class="form-control" value="{{$mahasiswa->alamat}}">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
					<input type="email" name="email" class="form-control" value="{{$mahasiswa->email}}">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
					<input type="text" name="tempat_lahir" class="form-control" value="{{$mahasiswa->tempat_lahir}}">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
					<input type="date" name="tanggal_lahir" class="form-control" value="{{$mahasiswa->tanggal_lahir}}">
                  </div>
                  <div class="form-group">
                    <label>Foto</label><br>
                    <img src="{{ URL::to('/') }}/images/{{ $mahasiswa->foto }}" width="500">
                    <input id="profile_image" type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" required autocomplete="profile_image">
                  </div>
                  <div class="form-group">
                    <label>PA</label>
					<select name="id_pa" class="form-control">
						@foreach($all_dosen as $dosen)
						<option value="{{$dosen->id}}" @if($dosen->id==$mahasiswa->id_pa) selected @endif>{{$dosen->nama_dosen}}</option>
						@endforeach
					</select>
                  </div>
                </div>
                <div class="card-footer">
                  	<input type="submit" value="Simpan" class="btn btn-primary">
					<input type="button" value="Kembali" onclick="location.href='/mahasiswa'" class="btn btn-secondary">
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
  	  </div>
	</section>






	<!-- <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
		@csrf
		@method('PUT')
		
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
			<input type="text" name="nim" value="{{$mahasiswa->nim}}">
		</p>
		<p>
			<label>Nama</label>
			<input type="text" name="nama" value="{{$mahasiswa->nama}}">
		</p>
		<p>
			<label>Alamat</label>
			<input type="text" name="alamat" value="{{$mahasiswa->alamat}}">
		</p>
		<p>
			<label>Email</label>
			<input type="text" name="email" value="{{$mahasiswa->email}}">
		</p>
		<p>
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}">
		</p>
		<p>
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}">
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
			<input type="submit" value="Simpan">
			<input type="button" value="Kembali" onclick="location.href='/'">
		</p>
	</form> -->
@endsection
