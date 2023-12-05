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
    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Varian</th>
            <th>Qty</th>
            <th>Harga Jual</th>
            <th>Total Harga Jual</th>
            <th>Diskon</th>
            <th>Harga Setelah Diskon</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->jenis_varian }}</td>
            <td>{{ $barang->qty }}</td>
            <td>{{ $barang->harga_jual }}</td>
            <td>{{ $totalHargaJual }}</td>
            <td>{{ $diskon }}</td>
            <td>{{ $hargaSetelahDiskon }}</td>
            <td>
                <a href="{{ route('edit', ['id' => $barang->id]) }}">Edit</a>
            </td>
        </tr>
    </table>
</body>
</html>