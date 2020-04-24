@extends('layout.layout')

@section('title','Tambah Mahasiswa')

@section('judul')
	Tambah Mahasiswa
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
              <form action="/mahasiswa" method="POST" enctype="multipart/form-data">
              	@csrf
              	<input type="hidden" name="id">
                <div class="card-body">
                  <div class="form-group">
                    <label>Prodi</label>
					<select name="id_prodi" id="id_prodi" class="form-control">
						@foreach($all_prodi as $prodi)
						<option value="{{$prodi->id}}">{{$prodi->nama_prodi}}</option>
						@endforeach
					</select>
                  </div>
                  <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
					<input type="text" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
					<input type="text" name="alamat" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
					<input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
					<input type="text" name="tempat_lahir" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
					<input type="date" name="tanggal_lahir" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input id="profile_image" type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" required autocomplete="profile_image">
                  </div>
                  <div class="form-group">
                    <label>PA</label>
					<select name="id_pa" id="id_dosen" class="form-control">
						@foreach($all_dosen as $dosen)
						<option value="{{$dosen->id}}">{{$dosen->nama_dosen}}</option>
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





	<!-- <form action="/mahasiswa" method="POST">
		@csrf
		<input type="hidden" name="id">
		<p>
			<label>Prodi</label>
			<select name="id_prodi" id="id_prodi">
				@foreach($all_prodi as $prodi)
				<option value="{{$prodi->id}}">{{$prodi->nama_prodi}}</option>
				@endforeach
			</select>
		</p>
		<p>
			<label>NIM</label>
			<input type="text" name="nim">
		</p>
		<p>
			<label>Nama</label>
			<input type="text" name="nama">
		</p>
		<p>
			<label>Alamat</label>
			<input type="text" name="alamat">
		</p>
		<p>
			<label>Email</label>
			<input type="text" name="email">
		</p>
		<p>
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir">
		</p>
		<p>
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir">
		</p>
		<p>
			<label>PA</label>
			<select name="id_pa" id="id_dosen">
				@foreach($all_dosen as $dosen)
				<option value="{{$dosen->id}}">{{$dosen->nama_dosen}}</option>
				@endforeach
			</select>
		</p>
		<p>
			<input type="submit" value="Simpan">
			<input type="button" value="Kembali" onclick="location.href='/'">
		</p>
	</form> -->
@endsection
