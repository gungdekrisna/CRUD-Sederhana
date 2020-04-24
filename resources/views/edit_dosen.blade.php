@extends('layout.layout')

@section('title','Dosen')

@section('judul')
	Edit Dosen
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
              <form action="/dosen/{{$dosen->id}}" method="POST" enctype="multipart/form-data">
        				@csrf
        				@method('PUT')
              	<input type="hidden" name="id" value="{{$dosen->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label>NIP Dosen</label>
                    <input type="text" name="nip_dosen" class="form-control" placeholder="Masukan NIP dosen" value="{{$dosen->nip_dosen}}">
                  </div>
                  <div class="form-group">
                    <label>Nama Dosen</label>
					           <input type="text" name="nama_dosen" class="form-control" placeholder="Masukan nama dosen" value="{{$dosen->nama_dosen}}">
                  </div>
                  <div class="form-group">
                    <label>Prodi</label>
                    <select name="id_prodi" id="id_prodi" class="form-control">
                      @foreach($all_prodi as $prodi)
                      <option value="{{$prodi->id}}" @if($prodi->id==$dosen->id_prodi) selected @endif>{{$prodi->nama_prodi}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Foto</label><br>
                    <img src="{{ URL::to('/') }}/images/{{ $dosen->foto }}" width="500">
                    <input id="profile_image" type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" required autocomplete="profile_image">
                  </div>
                </div>
                <div class="card-footer">
                  	<input type="submit" value="Simpan" class="btn btn-primary">
					          <input type="button" value="Kembali" onclick="location.href='/dosen'" class="btn btn-secondary">
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
  	  </div>
	</section>


	<!-- <form action="/dosen/{{$dosen->id}}" method="POST">
		@csrf
		@method('PUT')

		<input type="hidden" name="id" value="{{$dosen->id}}">
		<p>
			<label>NIP Dosen</label>
			<input type="text" name="nip_dosen" value="{{$dosen->nip_dosen}}">
		</p>
		<p>
			<label>Nama dosen</label>
			<input type="text" name="nama_dosen" value="{{$dosen->nama_dosen}}">
		</p>
		<p>
			<input type="submit" value="Simpan">
		</p>
	</form> -->
@endsection
