<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GudangController extends Controller
{
    public function create()
    {
        $lastNoOrder = $this->getLastNoOrder();
        $lastKodeBarang = $this->getLastBarang();
        return view('gudang.create', compact('lastKodeBarang', 'lastNoOrder'));
    } //DONE


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|string',
            'no_order' => 'required|string',
            'letak_barang' => 'required|string',
            'berat' => 'required|string',
            'tgl_keluar' => 'required|date',
            'tgl_masuk' => 'required|date',
            'nama_barang' => 'required|string',
            'pelabuhan_awal' => 'required|string',
            'pelabuhan_tujuan' => 'required|string',
            'jenis_kapal' => 'required|string',
            'jenis_muatan' => 'required|string',
        ]);

        $gudang = new Gudang([
            'kode_barang' => $request->input('kode_barang'),
            'no_order' => $request->input('no_order'),
            'letak_barang' => $request->input('letak_barang'),
            'berat' => $request->input('berat'),
            'tgl_keluar' => $request->input('tgl_keluar'),
            'tgl_masuk' => $request->input('tgl_masuk'),
            'nama_barang' => $request->input('nama_barang'),
            'pelabuhan_awal' => $request->input('pelabuhan_awal'),
            'pelabuhan_tujuan' => $request->input('pelabuhan_tujuan'),
            'jenis_kapal' => $request->input('jenis_kapal'),
            'jenis_muatan' => $request->input('jenis_muatan')
        ]);

        $gudang->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
    public function getLastNoOrder()
    {
        $lastItem = Gudang::latest('no_order')->first();
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
        // return view('gudang.create', compact('lastBarang'));
    }


    public function getLastBarang()
    {
        $lastBarang = Gudang::latest('kode_barang')->first();
        $lastKodeBarang = $lastBarang ? (int)$lastBarang->kode_barang + 1 : 1;
        return $lastKodeBarang;
    }

    public function index()
    {
        if (request()->wantsJson()) {
            return response(
                Gudang::all()
            );
        }
        $gudang = Gudang::latest()->paginate(10);
        return view('gudang.index')->with('gudang', $gudang);
    }

    public function edit(Gudang $gudang)
    {
        return view('gudang.edit', compact('gudang'));
    }

    public function update(Request $request, Gudang $gudang)
    {
        $gudang->kode_barang = $request->kode_barang;
        $gudang->no_order = $request->no_order;
        $gudang->letak_barang = $request->letak_barang;
        $gudang->berat = $request->berat;
        $gudang->tgl_keluar = $request->tgl_keluar;
        $gudang->tgl_masuk = $request->tgl_masuk;
        $gudang->nama_barang = $request->nama_barang;
        $gudang->pelabuhan_awal = $request->pelabuhan_awal;
        $gudang->pelabuhan_tujuan = $request->pelabuhan_tujuan;
        $gudang->jenis_kapal = $request->jenis_kapal;
        $gudang->jenis_muatan = $request->jenis_muatan;

        if (!$gudang->save()) {
            return redirect()->route('gudang.edit', ['gudang' => $gudang])->with('error', 'Sorry, Something went wrong while updating the customer.');
        }
        return redirect()->route('gudang.index')->with('success', 'Success, The customer has been updated.');
    }
    public function destroy(Gudang $gudang)
    {
        $gudang->delete();

        return response()->json([
            'success' => true
        ]);
    }

    public function deleteAll()
    {

        Gudang::truncate();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
