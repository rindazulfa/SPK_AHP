@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Master Rumah</h3>
			<div class="row">
				<a href="/admin/rumah/form">
					<button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data Rumah</button>
				</a>
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Rumah</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th width="100px">Kode Rumah</th>
									<th>Alamat</th>
									<th>Lokasi</th>
									<th width="90px">Luas</th>
									<th>Harga</th>
									<th>Fasilitas</th>
									<th>Keamanan</th>
									<th>Keterangan</th>
									<th>Gambar Rumah</th>
									<th width="250px">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>R00001</td>
									<td>Jl. Mawar No.2</td>
									<td>Perumahan</td>
									<td>1000 M<sup>2</sup></td>
									<td>Rp. 700.000.000</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet repudiandae perferendis aperiam.</td>
									<td>Tinggi</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officia assumenda suscipit!</td>
									<td><img src="/img/rumah1.jpg" alt="Rumah1" width="200px" height="100px"></td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
										<button type="button" class="btn btn-danger btn-toastr">Delete</button>
									</td>
								</tr>
								<tr>
									<td>2.</td>
									<td>R00002</td>
									<td>Jl. Mawar No.3</td>
									<td>Perkampungan</td>
									<td>1000 M<sup>2</sup></td>
									<td>Rp. 550.000.000</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officia assumenda suscipit!</td>
									<td>Rata-Rata</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officia assumenda suscipit!</td>
									<td><img src="/img/rumah1.jpg" alt="Rumah1" width="200px" height="100px"></td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
										<button type="button" class="btn btn-danger btn-toastr">Delete</button>
									</td>
								</tr>
								<tr>
									<td>3.</td>
									<td>R00003</td>
									<td>Jl. Mawar No.4</td>
									<td>Perumahan Elite</td>
									<td>1000 M<sup>2</sup></td>
									<td>Rp. 400.000.000</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officia assumenda suscipit!</td>
									<td>Rendah</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officia assumenda suscipit!</td>
									<td><img src="/img/rumah1.jpg" alt="Rumah1" width="200px" height="100px"></td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
										<button type="button" class="btn btn-danger btn-toastr">Delete</button>
									</td>
								</tr>
								<tr>
									<td>4.</td>
									<td>R00004</td>
									<td>Jl. Mawar No.5</td>
									<td>Perumahan</td>
									<td>1000 M<sup>2</sup></td>
									<td>Rp. 500.000.000</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officia assumenda suscipit!</td>
									<td>Rata-Rata</td>
									<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officia assumenda suscipit!</td>
									<td><img src="/img/rumah1.jpg" alt="Rumah1" width="200px" height="100px"></td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">Update</button>
										<button type="button" class="btn btn-danger btn-toastr">Delete</button>
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