@extends('layout.layout')

@section('title','prodi')

@section('judul')
	Edit prodi
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
              <form action="/prodi/{{$prodi->id}}" method="POST">
				@csrf
				@method('PUT')
              	<input type="hidden" name="id" value="{{$prodi->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="text" name="nama_prodi" class="form-control" value="{{$prodi->nama_prodi}}">
                  </div>
                  <div class="form-group">
                    <label>Tahun</label>
					<input type="date" name="tahun" class="form-control" value="{{$prodi->tahun}}">
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



	<!-- <form action="/prodi/{{$prodi->id}}" method="POST">
		@csrf
		@method('PUT')

		<input type="hidden" name="id" value="{{$prodi->id}}">
		<p>
			<label>Nama prodi</label>
			<input type="text" name="nama_prodi" value="{{$prodi->nama_prodi}}">
		</p>
		<p>
			<label>Tahun</label>
			<input type="date" name="tahun" value="{{$prodi->tahun}}">
		</p>
		<p>
			<input type="submit" value="Simpan">
		</p>
	</form> -->
@endsection
