@extends('layout.layout')

@section('title','Dosen')

@section('judul')
	Detail Dosen
@endsection

@section('konten')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          	<input type="button" value="Kembali" class="btn btn-secondary btn-custom" onclick="location.href='/dosen'">
          	<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>NIP Dosen</td>
                      <td>{{$dosen->nip_dosen}}</td>
                    </tr>
                    <tr>
                      <td>Nama Dosen</td>
                      <td>{{$dosen->nama_dosen}}</td>
                    </tr>
                    <tr>
                      <td>Program Studi</td>
                      <td>{{$dosen->prodi->nama_prodi}}</td>
                    </tr>
                    <tr>
                      <td>Foto</td>
                      <td><img src="{{ URL::to('/') }}/images/{{ $dosen->foto }}" width="500"></td>
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




	<!-- <form action="/dosen/{{$dosen->id}}" method="POST">
		@csrf
		@method('PUT')

		<input type="hidden" name="id" value="{{$dosen->id}}">
		<p>
			<label>NIP Dosen</label>
			<input type="text" name="nip_dosen" value="{{$dosen->nip_dosen}}" readonly>
		</p>
		<p>
			<label>Nama dosen</label>
			<input type="text" name="nama_dosen" value="{{$dosen->nama_dosen}}" readonly>
		</p>
		<p>
			<input type="button" value="Kembali" onclick="location.href='/dosen'">
		</p>
	</form> -->
@endsection
