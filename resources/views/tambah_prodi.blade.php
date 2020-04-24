@extends('layout.layout')

@section('title','Tambah Prodi')

@section('judul')
	Tambah Prodi
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
              <form action="/prodi" method="POST">
              	@csrf
              	<input type="hidden" name="id">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="text" name="nama_prodi" class="form-control" placeholder="Masukan nama prodi">
                  </div>
                  <div class="form-group">
                    <label>Tahun</label>
					<input type="date" name="tahun" class="form-control">
                  </div>
                </div>
                <div class="card-footer">
                  	<input type="submit" value="Simpan" class="btn btn-primary">
					<input type="button" value="Kembali" onclick="location.href='/prodi'" class="btn btn-secondary">
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
  	  </div>
	</section>



	<!-- <form action="/prodi" method="POST">
		@csrf
		<input type="hidden" name="id">
		<p>
			<label>Nama Prodi</label>
			<input type="text" name="nama_prodi">
		</p>
		<p>
			<label>Tahun</label>
			<input type="date" name="tahun">
		</p>
		<p>
			<input type="submit" value="Simpan">
			<input type="button" value="Kembali" onclick="location.href='/'">
		</p>
	</form> -->
@endsection
