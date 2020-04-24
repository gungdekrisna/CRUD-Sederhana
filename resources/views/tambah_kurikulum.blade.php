@extends('layout.layout')

@section('title','Tambah Kurikulum')

@section('judul')
	Tambah Kurikulum
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
              <form action="/kurikulum" method="POST">
              	@csrf
              	<input type="hidden" name="id">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Kurikulum</label>
                    <input type="text" name="nama_kurikulum" class="form-control" placeholder="Masukan nama kurikulum">
                  </div>
                  <div class="form-group">
                    <label>Tahun</label>
					<input type="date" name="tahun" class="form-control">
                  </div>
                </div>
                <div class="card-footer">
                  	<input type="submit" value="Simpan" class="btn btn-primary">
					<input type="button" value="Kembali" onclick="location.href='/kurikulum'" class="btn btn-secondary">
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
  	  </div>
	</section>





	<!-- <form action="/kurikulum" method="POST">
		@csrf
		<input type="hidden" name="id">
		<p>
			<label>Nama Kurikulum</label>
			<input type="text" name="nama_kurikulum">
		</p>
		<p>
			<label>Tahun</label>
			<input type="date" name="tahun">
		</p>
		<p>
			<input type="submit" value="Simpan">
			<input type="button" value="Kembali" onclick="location.href='/kurikulum'">
		</p>
	</form> -->
@endsection
