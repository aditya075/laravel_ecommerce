@extends('layouts.menu')

@section('dashboard')
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Beranda</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Pelanggan</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                            <div class="col-xl-15 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Fitur Pelanggan</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary pull-right">Pelanggan Baru</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-xl-15 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Status Pesanan</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">   
                                                        <td class="border-0">Gambar</td>
                                                        <td class="border-0">Nama</td>
                                                        <td class="border-0">No Telpon</td>
                                                        <td class="border-0">Qty</td>
                                                        <td class="border-0">Tanggal Selesai</td>
                                                        <td class="border-0">Status</td>
                                                        <td class="border-0">Bantuan</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pelanggan as $key => $pelanggans)
                                                    <tr>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>{{$pelanggans->name}}</td>
                                                        <td>{{$pelanggans->phone}}</td>
                                                        <td>{{$pelanggans->qty}}</td>
                                                        <td><?php echo date('d-m-Y', strtotime($pelanggans->date)); ?></td>
                                                        <td>{{$pelanggans->status}}</td>
                                                        <td><a href="{{action('PelangganController@edit', $pelanggans['id'])}}" class="btn btn-primary btn-lg">Edit</a></td>
                                                        <td> 
                                                        <td><a href="{{action('PelangganController@invoice', $pelanggans['id'])}}" class="btn btn-primary btn-lg">invoice</a></td>
                                                        <td>                                                     
                                                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Detail</button>
                                                            <!-- Modal -->
                                                            <div id="myModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog modal-lg">

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Detail Laundryan</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                <table class="table">
                                                                    <thead class="bg-light">
                                                                        <tr class="border-0">
                                                                            <th class="border-0">Nama</th>
                                                                            <th class="border-0">No Telpon</th>
                                                                            <th class="border-0">Qty</th>
                                                                            <th class="border-0">Tagihan</th>
                                                                            <th class="border-0">Tanggal Selesai</th>
                                                                            <th class="border-0">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>{{$pelanggans->name}}</td>
                                                                            <td>{{$pelanggans->phone}}</td>
                                                                            <td>{{$pelanggans->qty}}</td>
                                                                            <td>{{$pelanggans->qty*$pelanggans->price}}</td>
                                                                            <td><?php echo date('d-m-Y', strtotime($pelanggans->date)); ?></td>
                                                                            <td>{{$pelanggans->status}}</td>
                                                                        </tr>
                                                                    <tbody>
                                                                    </thead>
                                                                </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>

                                                            </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                     <!-- The Modal -->
                                                </tbody>
                                            </table>  
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group float-right">
                                {!! $pelanggan->render( "pagination::bootstrap-4") !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
