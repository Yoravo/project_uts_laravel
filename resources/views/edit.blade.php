@extends('utama')
@section('content')
<body>
    <form method="post" action="{{ route('update', ['id' => $barang->id]) }}">
        @csrf
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Barang</h4>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" placeholder="Kode Barang" name="kode_barang" value="{{ $barang->kode_barang }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_varian">Jenis Varian</label>
                        <input type="text" class="form-control" id="jenis_varian" placeholder="Jenis Varian" name="jenis_varian" value="{{ $barang->jenis_varian }}">
                    </div>
                    <div class="form-group">
                        <label for="qty">QTY</label>
                        <input type="number" class="form-control" id="qty" placeholder="QTY" name="qty" value="{{ $barang->qty }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" placeholder="Harga Jual" name="harga_jual" value="{{ $barang->harga_jual }}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <a href="{{ route('hasil', ['id' => $barang->id]) }}" class="btn btn-light">Cancel</a>

                </div>
            </div>
        </div>
    </form>
</body>
@endsection