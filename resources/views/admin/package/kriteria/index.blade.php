@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Master Kriteria</h3>
			<div class="row">
				<button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data Kriteria</button>
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Kriteria</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Id Kriteria</th>
									<th>Nama Kriteria</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>K0001</td>
									<td>Harga</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
								<tr>
									<td>2.</td>
									<td>K0002</td>
									<td>Fasilitas</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
								<tr>
									<td>3.</td>
									<td>K0003</td>
									<td>Luas</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
								<tr>
									<td>4.</td>
									<td>K0004</td>
									<td>Lokasi</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
								<tr>
									<td>5.</td>
									<td>K0005</td>
									<td>Keamanan</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection