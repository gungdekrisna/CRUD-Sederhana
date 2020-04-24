@extends('layout.layout')

@section('title','Kurikulum')

@section('judul')
	Detail Kurikulum
@endsection

@section('konten')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          	<input type="button" value="Kembali" class="btn btn-secondary btn-custom" onclick="location.href='/kurikulum'">
          	<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>Nama kurikulum</td>
                      <td>{{$kurikulum->nama_kurikulum}}</td>
                    </tr>
                    <tr>
                      <td>Tahun</td>
                      <td>{{$kurikulum->tahun}}</td>
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




	<!-- <form action="/kurikulum/{{$kurikulum->id}}" method="POST">
		@csrf
		@method('PUT')

		<input type="hidden" name="id" value="{{$kurikulum->id}}">
		<p>
			<label>Nama kurikulum</label>
			<input type="text" name="nama_kurikulum" value="{{$kurikulum->nama_kurikulum}}" readonly>
		</p>
		<p>
			<label>Tahun</label>
			<input type="date" name="tahun" value="{{$kurikulum->tahun}}" readonly>
		</p>
		<p>
			<input type="button" value="Kembali" onclick="location.href='/kurikulum'">
		</p>
	</form> -->
@endsection
