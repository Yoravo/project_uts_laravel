<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function praktikum()
    {
        return view('utama');
    }

    public function create()
    {
        return view('barang');
    }

    public function process(Request $request)
    {
        $barang = new Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_varian = $request->jenis_varian;
        $barang->qty = $request->qty;
        $barang->harga_jual = $request->harga_jual;

        $barang->save();

        $totalHargaJual = $request->qty * $request->harga_jual;
        $potongan = 0;

        if ($totalHargaJual >= 500000) {
            $potongan = 0.5;
        } elseif ($totalHargaJual >= 200000) {
            $potongan = 0.2;
        } elseif ($totalHargaJual >= 100000) {
            $potongan = 0.1;
        }

        $diskon = $totalHargaJual * $potongan;
        $hargaSetelahDiskon = $totalHargaJual - $diskon;

        return view('hasil')->with([
            'barang' => $barang,
            'totalHargaJual' => $totalHargaJual,
            'diskon' => $diskon,
            'hargaSetelahDiskon' => $hargaSetelahDiskon
        ]);
    }

    public function edit($id)
    {
        $barang = Barang::find($id);

        return view('edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_varian = $request->jenis_varian;
        $barang->qty = $request->qty;
        $barang->harga_jual = $request->harga_jual;

        $barang->save();

        // Redirect to the hasil view or any other view as needed
        return redirect()->route('hasil', ['id' => $barang->id]);
    }
    public function hasil($id)
    {
        $barang = Barang::find($id);
        $totalHargaJual = $barang->qty * $barang->harga_jual;
        $diskon = 0; 
        $hargaSetelahDiskon = $totalHargaJual - ($totalHargaJual * $diskon);
        
        return view('hasil', compact('barang', 'totalHargaJual', 'diskon', 'hargaSetelahDiskon'));
    }
}
