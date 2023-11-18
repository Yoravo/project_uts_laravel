<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isi Data Barang</title>
</head>
<body>
    <form method="post" action="/barang">
        @csrf
        <label for="kode_barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required><br><br>
    
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required><br><br>
    
        <label for="jenis_varian">Jenis Varian:</label>
        <input type="text" name="jenis_varian" required><br><br>
    
        <label for="qty">Qty:</label>
        <input type="number" name="qty" required><br><br>
    
        <label for="harga_jual">Harga Jual:</label>
        <input type="text" name="harga_jual" required><br><br>
    
        <button type="submit">Proses</button>
    </form>
</body>
</html>