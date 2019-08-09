@extends('layouts.menu')

@section('pelanggan_edit')
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
                                            <li class="breadcrumb-item active" aria-current="page">Pelanggan Edit</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xl-15 col-lg-12 col-md-6 col-sm-2 col-12">
                                <div class="card">
                                    <h5 class="card-header">Data Pelanggan Baru</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                            <form method="post" action="{{action('PelangganController@update', $id)}}">
                                            {{ csrf_field() }}
                                            <input name="_method" type="hidden" value="PATCH">
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" type="text" name="name" required="" value="{{$pelanggan->name}}" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" type="text" name="phone" required="" value="{{$pelanggan->phone}}" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" type="text" name="address" required="" value="{{$pelanggan->address}}"autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" type="text" name="qty" required="" value="{{$pelanggan->qty}}"autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="laundry_type" placeholder="Alamat">
                                                        <option>Jenis Sepatu</option>
                                                        <option value="kering">Cuci Kering</option>
                                                        <option value="basah">Cuci Basah</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="status" placeholder="Alamat">
                                                        <option>Status Laundry</option>
                                                        <option value="Penyortiran">Penyortiran</option>
                                                        <option value="Pencucian">Pencucian</option>
                                                        <option value="Pengiriman">Pengiriman</option>
                                                        <option value="Selesai">Selesai</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" type="text" name="price" required="" value="{{$pelanggan->price}}" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" type="date" value="{{$pelanggan->date}}" name="date" autocomplete="off">
                                                </div>
                                                <!-- <div class="form-group">
                                                    <input class="form-control form-control-lg" type="file" name="photo" autocomplete="off">
                                                </div> -->
                                                <div class="form-group float-right">
                                                    <button class="btn btn-primary px-4 py-3" href="{{url('pelanggan')}}">Batal</button>
          
                                                    <button class="btn btn-primary px-4 py-3" type="submit">Simpan Data</button>
                                                    <br>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                    <div class="row">
                                <div class="col-xl-15 col-lg-12 col-md-26 col-sm-12 col-12">
                                    <div class="card">
                                        <h5 class="card-header">Note</h5>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <p>
                                                                <ul>
                                                                    <li>Tampilan Web Bermasalah Silahkan Refresh.</li>
                                                                    <li>Konfirmasi Kembali Data Pelanggan.</li>
                                                                    <li>Apabila Web Sudah Di Refresh, Tapi Tetap Bermasalah Silahkan Hubungi +6282217797018</li>
                                                                </ul>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                     </div>
                                </div>
                            </div>
@endsection
