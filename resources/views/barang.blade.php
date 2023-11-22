@extends('utama')
@section('content')
<body>
    <form method="post" action="/barang">
        @csrf
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Default form</h4>
                <p class="card-description">
                  Basic form layout
                </p>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" placeholder="Kode Barang" name="kode_barang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang" name="nama_barang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Varian</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jenis Varian" name="jenis_varian">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">QTY</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="QTY" name="qty">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Jual</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Harga Jual" name="harga_jual">
                  </div>
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                      Remember me
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div> 
    </form>
</body>
@endsection