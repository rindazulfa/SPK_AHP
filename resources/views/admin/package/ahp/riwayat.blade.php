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
                        <h3 class="panel-title">Riwayat Perhitungan AHP</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Rangking</th>
                                    <th>Hasil Rumah</th>
                                    <th>Nilai Ahp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Bougenville</td>
                                    <td>0.22</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Bougenville</td>
                                    <td>0.21</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Bougenville</td>
                                    <td>0.20</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Bougenville</td>
                                    <td>0.19</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Bougenville</td>
                                    <td>0.09</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Bougenville</td>
                                    <td>0.09</td>
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