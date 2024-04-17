<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function create()
    {
        $lastNoOrder = $this->getLastNoOrder();
        $lastKodeBarang = $this->getLastBarang();
        return view('customers.create', compact('lastKodeBarang', 'lastNoOrder'));
    }

    // public function store(Request $request)
    // {
    //     $hasil_kubikasi = $request('hasil_kubikasi');

    //     if ($hasil_kubikasi > 0.05) {
    //         return response()->json(['message' => 'Melebihi batas kubikasi'], 400);
    //     }

    //     $validatedData = $request->validate([
    //         'hasil_kubikasi' => 'required|numeric',
    //         'kode_barang' => 'required|string',
    //         'nama_barang' => 'required|string',
    //         'jenis' => 'required|string',
    //         'tujuan' => 'required|string',
    //         'letak_barang' => 'required|string',
    //         'no_order' => 'required|string',
    //         'berat' => 'required|string',
    //         'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Simpan data ke dalam database
    //     $gambar = $request->file('gambar');
    //     $gambarPath = $gambar->store('gambar', 'public');

    //     $barang = new Barang([
    //         'hasil_kubikasi' => $request->input('hasil_kubikasi'),
    //         'kode_barang' => $request->input('kode_barang'),
    //         'nama_barang' => $request->input('nama_barang'),
    //         'jenis' => $request->input('jenis'),
    //         'tujuan' => $request->input('tujuan'),
    //         'letak_barang' => $request->input('letak_barang'),
    //         'no_order' => $request->input('no_order'),
    //         'berat' => $request->input('berat'),
    //         'gambar' => $gambarPath,
    //     ]);

    //     $barang->save();

    //     // Redirect atau tampilkan pesan sukses
    //     return redirect()->back()->with('success', 'Data berhasil disimpan.');
    // }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hasil_kubikasi' => 'required|numeric',
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'jenis' => 'required|string',
            'tujuan' => 'required|string',
            'letak_barang' => 'required|string',
            'no_order' => 'required|string',
            'berat' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $hasil_kubikasi = $request->input('hasil_kubikasi');

        if ($hasil_kubikasi > 0.05) {
            return response()->json(['message' => 'Melebihi batas kubikasi'], 400);
        }

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('images', 'public');
        } else {
            $gambarPath = null;
        }

        $barang = new Barang([
            'hasil_kubikasi' => $hasil_kubikasi,
            'kode_barang' => $request->input('kode_barang'),
            'nama_barang' => $request->input('nama_barang'),
            'jenis' => $request->input('jenis'),
            'tujuan' => $request->input('tujuan'),
            'letak_barang' => $request->input('letak_barang'),
            'no_order' => $request->input('no_order'),
            'berat' => $request->input('berat'),
            'gambar' => $gambarPath,
        ]);

        $barang->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function getLastNoOrder()
    {
        $lastItem = Barang::latest('no_order')->first();
        if ($lastItem) {
            $lastNoOrder = $lastItem->no_order;
            // Mendapatkan angka dari nomor order terakhir
            $lastOrderNumber = intval(substr($lastNoOrder, 3));
            // Membuat nomor order baru
            $newOrderNumber = $lastOrderNumber + 1;
            $formattedOrderNumber = str_pad($newOrderNumber, 3, '0', STR_PAD_LEFT);
            $newNoOrder = 'sby' . $formattedOrderNumber;
        } else {
            $newNoOrder = 'sby001';
        }
        return $newNoOrder;
    }


    public function createKode()
    {
        $lastBarang = $this->getLastBarang();

        return view('customers.create', compact('lastBarang'));
    }


    public function getLastBarang()
    {
        $lastBarang = Barang::latest('kode_barang')->first();
        $lastKodeBarang = $lastBarang ? $lastBarang->kode_barang + 1 : 1;
        return $lastKodeBarang;
    }

    public function index()
    {
        if (request()->wantsJson()) {
            return response(
                Barang::all()
            );
        }
        $barang = Barang::latest()->paginate(10);
        return view('customers.index')->with('barang', $barang);
    }

    public function edit(Barang $barang)
    {
        return view('customers.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis = $request->jenis;
        $barang->tujuan = $request->tujuan;
        $barang->letak_barang = $request->letak_barang;
        $barang->no_order = $request->no_order;
        $barang->berat = $request->berat;
        $barang->hasil_kubikasi = $request->hasil_kubikasi;
        // $avatar_path = $request->file('gambar')->store('gambar', 'public');
        $gambar = $request->file('gambar');
        if ($request->hasFile('gambar')) {
            // Delete old avatar
            if ($barang->gambar) {
                Storage::delete($barang->gambar);
            }
            // Store avatar
            $avatar_path = $request->file('gambar')->store('images', 'public');
            // Save to Database
            $barang->gambar = $avatar_path;
        }

        if (!$barang->save()) {
            return redirect()->route('customers.edit', ['customer' => $barang])->with('error', 'Sorry, Something went wrong while updating the customer.');
        }
        return redirect()->route('customers.index')->with('success', 'Success, The customer has been updated.');
    }
    public function destroy(Barang $barang)
    {
        if ($barang->avatar) {
            Storage::delete($barang->avatar);
        }

        $barang->delete();

        return response()->json([
            'success' => true
        ]);
    }
    public function deleteAll()
    {

        Barang::truncate();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
