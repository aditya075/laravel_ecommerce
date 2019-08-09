@extends('layouts.menu')

@section('Invoice')
  <!-- <div class="container">
    <div class="card">
      <div class="card-header">
        <button onclick="myFunction()">Click me</button>
      </div>
    </div>
  </div> -->
  <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{url('/')}}" class="breadcrumb-link">Beranda</a></li>
                                            <li class="breadcrumb-item"><a href="{{url('pelanggan')}}" class="breadcrumb-link">Pelanggan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xl-15 col-lg-12 col-md-6 col-sm-2 col-12">
                                <div class="card">
                                  <div class="card-header">Invoice
                                    <strong><?php echo date('d/m/Y', strtotime($pelanggan->date)); ?></strong> 
                                      <span class="float-right"> <strong>Status:</strong> {{$pelanggan->status}}</span>
                            </div>
                            <div class="card-body">
                              <div class="row mb-4">
                                <div class="col-sm-6">
                                  <h6 class="mb-3">Dari:</h6>
                                <div>
                              <strong>Laundry Kitacuci.com</strong>
                            </div>
                              <div>Jalan Cisitu Baru Dalam No 2</div>
                                <div>Bandung - Jawa Barat</div>
                                  <div>Cs@kitacuci.com</div>
                                <div>+6282217797018</div>
                            </div>
                            <div class="col-sm-6">
                              <h6 class="mb-3">Kepada:</h6>
                            <div>
                              <strong>{{$pelanggan->name}}</strong>
                              </div>
                                <div>{{$pelanggan->address}}</div>
                                <div>{{$pelanggan->phone}}</div>
                              </div>
                            </div>
                        <div class="table-responsive-sm">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th class="center">Laundry</th>
                              <th>Jenis Laundry</th>
                                <th class="right">Harga</th>
                              <th class="center">Qty</th>
                            <th class="right">Total</th>
                          </tr>
                        </thead>
                    <tbody>
                      <tr>
                        <td class="left strong">Cuci Sepatu</td>
                          <td class="left">{{$pelanggan->laundry_type}}</td>
                            <td class="right">Rp {{number_format($pelanggan->price,0, ',', '.')}}</td>
                          <td class="center">{{$pelanggan->qty}}</td>
                        <td class="right">Rp {{number_format($pelanggan->price*$pelanggan->qty,0, ',', '.')}}</td>
                      </tr>
                    </tbody>
                      </table>
                    </div>
                  <div class="row">
                <div class="col-lg-4 col-sm-5">
              </div>
            <div class="col-lg-4 col-sm-5 ml-auto">
          <table class="table table-clear">
        <tbody>
          <tr>
            <td class="left">
              <strong>Subtotal</strong>
                </td>
                  <td class="right">Rp {{number_format($pelanggan->price*$pelanggan->qty,0, ',', '.')}}</td>
                    </tr>
                      <tr>
                        <td class="left">
                          <strong>Discount</strong>
                            </td>
                              <td class="right">-</td>
                                </tr>
                                  <tr>
                                    <td class="left">
                                      <strong>VAT</strong>
                                        </td>
                                          <td class="right">-</td>
                                            </tr>
                                              <tr>
                                            <td class="left">
                                          <strong>Total</strong>
                                        </td>
                                      <td class="right">
                                    <strong>Rp {{number_format($pelanggan->price*$pelanggan->qty,0, ',', '.')}}</strong>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          <div class="form-group float-right">
                        <div class="form-group">
                      <td><a class="btn btn-primary btn-lg" href="{{url('pelanggan')}}">Batal</a></td>
                    <td><a href="{{action('PelangganController@print', $pelanggan['id'])}}" class="btn btn-primary btn-lg" target="_blank">Print</a></td>
                  </div>
                <br>
              </div>
            </form>
          </div>
        </div>
       </div>
      </div>
    </div>
  </div>
@endsection
