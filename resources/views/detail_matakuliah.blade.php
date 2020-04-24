@extends('layout.layout')

@section('title','Matakuliah')

@section('judul')
	Detail Matakuliah
@endsection

@section('konten')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          	<input type="button" value="Kembali" class="btn btn-secondary btn-custom" onclick="location.href='/matakuliah'">
          	<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>Kode Matakuliah</td>
                      <td>{{$matakuliah->kode_matakuliah}}</td>
                    </tr>
                    <tr>
                      <td>Nama Matakuliah</td>
                      <td>{{$matakuliah->nama_matakuliah}}</td>
                    </tr>
                    <tr>
                      <td>SKS</td>
                      <td>{{$matakuliah->sks}}</td>
                    </tr>
                    <tr>
                      <td>Semester</td>
                      <td>{{$matakuliah->semester}}</td>
                    </tr>
                    <tr>
                      <td>Kurikulum</td>
                      <td>{{$matakuliah->kurikulum->nama_kurikulum}}</td>
                    </tr>
                    <tr>
                      <td>Dosen</td>
                      <td>{{$matakuliah->dosen->nama_dosen}}</td>
                    </tr>
                    <tr>
                      <td>Program Studi</td>
                      <td>{{$matakuliah->prodi->nama_prodi}}</td>
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




	<!-- <form action="/matakuliah/{{$matakuliah->id}}" method="POST">
		@csrf
		@method('PUT')

		<input type="hidden" name="id" value="{{$matakuliah->id}}">
		<p>
			<label>Kode Matakuliah</label>
			<input type="text" name="kode_matakuliah" value="{{$matakuliah->kode_matakuliah}}" readonly>
		</p>
		<p>
			<label>Nama Matakuliah</label>
			<input type="text" name="nama_matakuliah" value="{{$matakuliah->nama_matakuliah}}" readonly>
		</p>
		<p>
			<label>SKS</label>
			<input type="text" name="sks" value="{{$matakuliah->sks}}" readonly>
		</p>
		<p>
			<label>Semester</label>
			<input type="text" name="semester" value="{{$matakuliah->semester}}" readonly>
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
			<input type="button" value="Kembali" onclick="location.href='/matakuliah'">
		</p>
	</form> -->
@endsection
