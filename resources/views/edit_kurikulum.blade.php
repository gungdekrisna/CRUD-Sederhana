@extends('layout.layout')

@section('title','Kurikulum')

@section('judul')
	Edit Kurikulum
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
              <form action="/kurikulum/{{$kurikulum->id}}" method="POST">
              	@csrf
              	@method('PUT')
              	<input type="hidden" name="id" value="{{$kurikulum->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Kurikulum</label>
                    <input type="text" name="nama_kurikulum" class="form-control" value="{{$kurikulum->nama_kurikulum}}">
                  </div>
                  <div class="form-group">
                    <label>Tahun</label>
					<input type="date" name="tahun" class="form-control" value="{{$kurikulum->tahun}}">
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



	<!-- <form action="/kurikulum/{{$kurikulum->id}}" method="POST">
		@csrf
		@method('PUT')

		<input type="hidden" name="id" value="{{$kurikulum->id}}">
		<p>
			<label>Nama kurikulum</label>
			<input type="text" name="nama_kurikulum" value="{{$kurikulum->nama_kurikulum}}">
		</p>
		<p>
			<label>Tahun</label>
			<input type="date" name="tahun" value="{{$kurikulum->tahun}}">
		</p>
		<p>
			<input type="submit" value="Simpan">
		</p>
	</form> -->
@endsection
