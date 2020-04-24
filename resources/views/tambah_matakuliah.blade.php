@extends('layout.layout')

@section('title','Tambah Matakuliah')

@section('judul')
	Tambah Matakuliah
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
              <form action="/matakuliah" method="POST">
              	@csrf
              	<input type="hidden" name="id">
                <div class="card-body">
                  <div class="form-group">
                    <label>Kode Matakuliah</label>
                    <input type="text" name="kode_matakuliah" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Matakuliah</label>
					<input type="text" name="nama_matakuliah" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>SKS</label>
					<input type="text" name="sks" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Semester</label>
					<input type="text" name="semester" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kurikulum</label>
					<select name="id_kurikulum" id="id_kurikulum" class="form-control">
						@foreach($all_kurikulum as $kurikulum)
						<option value="{{$kurikulum->id}}">{{$kurikulum->nama_kurikulum}}</option>
						@endforeach
					</select>
                  </div>
                  <div class="form-group">
                    <label>Dosen</label>
					<select name="id_dosen" id="id_dosen" class="form-control">
						@foreach($all_dosen as $dosen)
						<option value="{{$dosen->id}}">{{$dosen->nama_dosen}}</option>
						@endforeach
					</select>
                  </div>
                  <div class="form-group">
                    <label>Prodi</label>
					<select name="id_prodi" id="id_prodi" class="form-control">
						@foreach($all_prodi as $prodi)
						<option value="{{$prodi->id}}">{{$prodi->nama_prodi}}</option>
						@endforeach
					</select>
                  </div>
                </div>
                <div class="card-footer">
                  	<input type="submit" value="Simpan" class="btn btn-primary">
					<input type="button" value="Kembali" onclick="location.href='/matakuliah'" class="btn btn-secondary">
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
  	  </div>
	</section>




    <!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
			<form action="/matakuliah" method="POST">
				@csrf
				<input type="hidden" name="id">
				<p>
					<label>Kode Matakuliah</label>
					<input type="text" name="kode_matakuliah">
				</p>
				<p>
					<label>Nama Matakuliah</label>
					<input type="text" name="nama_matakuliah">
				</p>
				<p>
					<label>SKS</label>
					<input type="text" name="sks">
				</p>
				<p>
					<label>Semester</label>
					<input type="text" name="semester">
				</p>
				<p>
					<label>Kurikulum</label>
					<select name="id_kurikulum" id="id_kurikulum">
						@foreach($all_kurikulum as $kurikulum)
						<option value="{{$kurikulum->id}}">{{$kurikulum->nama_kurikulum}}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label>Dosen</label>
					<select name="id_dosen" id="id_dosen">
						@foreach($all_dosen as $dosen)
						<option value="{{$dosen->id}}">{{$dosen->nama_dosen}}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label>Prodi</label>
					<select name="id_prodi" id="id_prodi">
						@foreach($all_prodi as $prodi)
						<option value="{{$prodi->id}}">{{$prodi->nama_prodi}}</option>
						@endforeach
					</select>
				</p>
				<p>
					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/'">
				</p>
			</form>
		</div>
      </div>
    </section> -->
@endsection
