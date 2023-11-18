<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Output Data Barang</title>
</head>
<body>
    <h1>Hasil</h1>
    <p><strong>Kode Barang:</strong> {{ $barang->kode_barang }}</p>
    <p><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>
    <p><strong>Jenis Varian:</strong> {{ $barang->jenis_varian }}</p>
    <p><strong>Qty:</strong> {{ $barang->qty }}</p>
    <p><strong>Harga Jual:</strong> {{ $barang->harga_jual }}</p>
    <p><strong>Total Harga Jual:</strong> {{ $totalHargaJual }}</p>
    <p><strong>Diskon:</strong> {{ $diskon }}</p>
    <p><strong>Harga Setelah Diskon:</strong> {{ $hargaSetelahDiskon }}</p>

</body>
</html>