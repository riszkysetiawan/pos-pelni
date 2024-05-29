<?php

namespace App\Http\Controllers;

use App\Models\Shipper;
use Illuminate\Http\Request;


class ShipperController extends Controller
{

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'no_order' => 'required|string|regex:/^[A-Za-z0-9-]+$/',
            'nama_shipper' => 'required|string',
            'tujuan' => 'required|string',
            'alamat' => 'required|string',
            'jumlah' => 'required|numeric',
        ]);

        // Ambil data dari form
        $noOrder = $request->input('no_order');
        $namaShipper = $request->input('nama_shipper');
        $tujuan = $request->input('tujuan');
        $alamat = $request->input('alamat');
        $jumlah = $request->input('jumlah');

        // Simpan data ke dalam database
        $shipper = new Shipper();
        $shipper->no_order = $noOrder;
        $shipper->nama_shipper = $namaShipper;
        $shipper->tujuan = $tujuan;
        $shipper->alamat = $alamat;
        // $shipper->jumlah = $jumlah;
        $shipper->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
    public function create()
    {
        $takenSeats = Shipper::select('no_order')->get()->pluck('no_order')->toArray();
        $lastNoOrder = $this->getLastOrder();
        return view('products.create', compact('takenSeats', 'lastNoOrder'));
    }


    public function index(Request $request)
    {
        if (request()->wantsJson()) {
            return response(
                Shipper::all()
            );
        }
        $shipper = Shipper::latest()->paginate(10);
        return view('products.index')->with('shipper', $shipper);
    }

    public function edit(Shipper $shipper)
    {
        return view('products.edit', compact('shipper'));
    }
    public function destroy(Shipper $shipper)
    {
        $shipper->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function update(Request $request, Shipper $shipper)
    {
        $shipper->no_order = $request->no_order;
        $shipper->nama_shipper = $request->nama_shipper;
        $shipper->tujuan = $request->tujuan;
        $shipper->alamat = $request->alamat;
        $shipper->jumlah = $request->jumlah;

        if (!$shipper->save()) {
            return redirect()->back()->with('error', 'Sorry, Something went wrong while updating ship.');
        }
        return redirect()->route('products.index')->with('success', 'Success, Product has been updated.');
    }

    // public function checkSeat()
    // {
    //     // Mengambil semua nomor seat yang sudah terisi dari database
    //     $takenSeats = Shipper::select('no_order')->get()->pluck('no_order')->toArray();

    //     // Mengembalikan daftar seat yang sudah terisi dalam format JSON
    //     return response()->json(['takenSeats' => $takenSeats]);
    // }

    public function checkSeat()
    {
        // Mengambil semua data order (no_order) dan jumlah (qty) dari database
        $shipments = Shipper::select('no_order', 'jumlah')->get();

        // Menghitung jumlah pengisian per kode seat
        $seatCountData = [];
        $quantityData = [];

        foreach ($shipments as $shipment) {
            $seatCountData[$shipment->no_order] = isset($seatCountData[$shipment->no_order]) ? $seatCountData[$shipment->no_order] + 1 : 1;
            $quantityData[$shipment->no_order] = isset($quantityData[$shipment->no_order]) ? $quantityData[$shipment->no_order] + $shipment->jumlah : $shipment->jumlah;
        }

        // Mengembalikan daftar seat yang sudah terisi, jumlah pengisiannya, dan jumlah quantity dalam format JSON
        return response()->json(['seatCountData' => $seatCountData, 'quantityData' => $quantityData]);
    }
    public function getLastOrder()
    {
        $lastOrder = Shipper::latest('no_order')->first();
        $lastNoOrder = $lastOrder ? (int)$lastOrder->no_order + 1 : 1;
        return $lastNoOrder;
    }

    public function deleteAll()
    {

        Shipper::truncate();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
