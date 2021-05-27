@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Master Kriteria</h3>
			<div class="row">
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Nilai Kriteria</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Id Kriteria</th>
									<th>Nama Kriteria</th>
									<th>Nilai Kriteria</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>K0001</td>
									<td>Harga</td>
									<td>
										Rp.0 - Rp.250.000.000 -> (5),
										Rp.250.000.001 - Rp.500.000.000 -> (4),
										Rp.500.000.001 - Rp.750.000.000 -> (3),
										Rp.750.000.001 - Rp.1.000.000.000 -> (2),
										Rp.1.000.000.0001++ -> (1)
									</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
								<tr>
									<td>2.</td>
									<td>K0002</td>
									<td>Fasilitas</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad recusandae cumque voluptatum?</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
								<tr>
									<td>3.</td>
									<td>K0003</td>
									<td>Luas</td>
									<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur officiis rem soluta?</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
								<tr>
									<td>4.</td>
									<td>K0004</td>
									<td>Lokasi</td>
									<td>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat debitis repellendus culpa.
									</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
									</td>
								</tr>
								<tr>
									<td>5.</td>
									<td>K0005</td>
									<td>Keamanan</td>
									<td>
										Tidak Diketahui -> (4),
										Rendah -> (3),
										Rata-Rata -> (2),
										Tinggi -> (1)
									</td>
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