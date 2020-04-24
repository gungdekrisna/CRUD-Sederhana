@extends('layout.layout')

@section('title','prodi')

@section('judul')
	Detail Prodi
@endsection

@section('konten')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          	<input type="button" value="Kembali" class="btn btn-secondary btn-custom" onclick="location.href='/prodi'">
          	<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>Nama prodi</td>
                      <td>{{$prodi->nama_prodi}}</td>
                    </tr>
                    <tr>
                      <td>Tahun</td>
                      <td>{{$prodi->tahun}}</td>
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




	<!-- <form action="/prodi/{{$prodi->id}}" method="POST">
		@csrf
		@method('PUT')

		<input type="hidden" name="id" value="{{$prodi->id}}">
		<p>
			<label>Nama prodi</label>
			<input type="text" name="nama_prodi" value="{{$prodi->nama_prodi}}" readonly>
		</p>
		<p>
			<label>Tahun</label>
			<input type="date" name="tahun" value="{{$prodi->tahun}}" readonly>
		</p>
		<p>
			<input type="button" value="Kembali" onclick="location.href='/prodi'">
		</p>
	</form> -->
@endsection
