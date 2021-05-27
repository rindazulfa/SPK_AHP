@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Master Rumah</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Input Data Rumah</h3>
                    </div>
                    <div class="panel-body">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                            <input class="form-control" placeholder="Alamat Rumah" type="text">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="lnr lnr-map-marker"></i></span>
                            <input class="form-control" placeholder="Lokasi Rumah" type="text">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                            <input class="form-control" placeholder="Luas Bangunan" type="number">
                            <span class="input-group-addon">M<sup>2</sup></span>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                            <input class="form-control" placeholder="Harga Rumah" type="Number">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                            <input class="form-control" placeholder="Fasilitas Rumah" type="text">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                            <input class="form-control" placeholder="Keamanan" type="text">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Keterangan" type="text">
                        </div>
                        <br>
                        <div class="">
                            <p>Gambar Rumah</p>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-block">Simpan Data</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-warning btn-block">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection