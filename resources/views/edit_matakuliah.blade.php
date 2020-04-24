@extends('layout.layout')

@section('title','Matakuliah')

@section('judul')
	Edit Matakuliah
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
              <form action="/matakuliah/{{$matakuliah->id}}" method="POST">
				@csrf
				@method('PUT')
              	<input type="hidden" name="id" value="{{$matakuliah->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label>Kode Matakuliah</label>
                    <input type="text" name="kode_matakuliah" class="form-control" value="{{$matakuliah->kode_matakuliah}}">
                  </div>
                  <div class="form-group">
                    <label>Nama Matakuliah</label>
					<input type="text" name="nama_matakuliah" class="form-control" value="{{$matakuliah->nama_matakuliah}}">
                  </div>
                  <div class="form-group">
                    <label>SKS</label>
					<input type="text" name="sks" class="form-control" value="{{$matakuliah->sks}}">
                  </div>
                  <div class="form-group">
                    <label>Semester</label>
					<input type="text" name="semester" class="form-control" value="{{$matakuliah->semester}}">
                  </div>
                  <div class="form-group">
                    <label>Kurikulum</label>
					<select name="id_kurikulum" id="id_kurikulum" class="form-control">
						@foreach($all_kurikulum as $kurikulum)
						<option value="{{$kurikulum->id}}" @if($kurikulum->id==$matakuliah->id_kurikulum) selected @endif>{{$kurikulum->nama_kurikulum}}</option>
						@endforeach
					</select>
                  </div>
                  <div class="form-group">
                    <label>Dosen</label>
					<select name="id_dosen" id="id_dosen" class="form-control">
						@foreach($all_dosen as $dosen)
						<option value="{{$dosen->id}}" @if($dosen->id==$matakuliah->id_dosen) selected @endif>{{$dosen->nama_dosen}}</option>
						@endforeach
					</select>
                  </div>
                  <div class="form-group">
                    <label>Prodi</label>
					<select name="id_prodi" id="id_prodi" class="form-control">
						@foreach($all_prodi as $prodi)
						<option value="{{$prodi->id}}" @if($prodi->id==$matakuliah->id_prodi) selected @endif>{{$prodi->nama_prodi}}</option>
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






	<!-- <form action="/matakuliah/{{$matakuliah->id}}" method="POST">
		@csrf
		@method('PUT')

		<input type="hidden" name="id" value="{{$matakuliah->id}}">
		<p>
			<label>Kode Matakuliah</label>
			<input type="text" name="kode_matakuliah" value="{{$matakuliah->kode_matakuliah}}">
		</p>
		<p>
			<label>Nama Matakuliah</label>
			<input type="text" name="nama_matakuliah" value="{{$matakuliah->nama_matakuliah}}">
		</p>
		<p>
			<label>SKS</label>
			<input type="text" name="sks" value="{{$matakuliah->sks}}">
		</p>
		<p>
			<label>Semester</label>
			<input type="text" name="semester" value="{{$matakuliah->semester}}">
		</p>
		<p>
			<label>Kurikulum</label>
			<select name="id_kurikulum">
				@foreach($all_kurikulum as $kurikulum)
				<option value="{{$kurikulum->id}}" @if($kurikulum->id==$matakuliah->id_kurikulum) selected @endif>{{$kurikulum->nama_kurikulum}}</option>
				@endforeach
			</select>
		</p>
		<p>
			<label>Dosen</label>
			<select name="id_dosen">
				@foreach($all_dosen as $dosen)
				<option value="{{$dosen->id}}" @if($dosen->id==$matakuliah->id_dosen) selected @endif>{{$dosen->nama_dosen}}</option>
				@endforeach
			</select>
		</p>
		<p>
			<label>Prodi</label>
			<select name="id_prodi">
				@foreach($all_prodi as $prodi)
				<option value="{{$prodi->id}}" @if($prodi->id==$matakuliah->id_prodi) selected @endif>{{$prodi->nama_prodi}}</option>
				@endforeach
			</select>
		</p>
		<p>
			<input type="submit" value="Simpan">
		</p>
	</form> -->
@endsection
