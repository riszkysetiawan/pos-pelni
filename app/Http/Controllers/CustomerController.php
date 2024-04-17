<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
// use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     if (request()->wantsJson()) 
    //         return response(
    //             Barang::all()
    //         );
    //     }
    //     $customers = Barang::latest()->paginate(10);
    //     return view('customers.index')->with('customers', $customers);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('customers.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(CustomerStoreRequest $request)
    // {
    //     // Validasi input
    //     $validatedData = $request->validate([
    //         'panjang' => 'required|numeric',
    //         'lebar' => 'required|numeric',
    //         'tinggi' => 'required|numeric',
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
    //         'panjang' => $request->input('panjang'),
    //         'lebar' => $request->input('lebar'),
    //         'tinggi' => $request->input('tinggi'),
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    // public function show(Customer $customer)
    // {
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    // public function edit(Barang $customer)
    // {
    //     return view('customers.edit', compact('customer'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Barang $customer)
    // {

    //     $customer->kode_barang = $request->kode_barang;
    //     $customer->nama_barang = $request->nama_barang;
    //     $customer->jenis = $request->jenis;
    //     $customer->tujuan = $request->tujuan;
    //     $customer->letak_barang = $request->letak_barang;
    //     $customer->no_order = $request->no_order;
    //     $customer->berat = $request->berat;
    //     $customer->hasil_kubikasi = $request->hasil_kubikasi;

    //     if ($request->hasFile('gambar')) {
    //         // Delete old avatar
    //         if ($customer->avatar) {
    //             Storage::delete($customer->avatar);
    //         }
    //         // Store avatar
    //         $avatar_path = $request->file('gambar')->store('gambar', 'public');
    //         // Save to Database
    //         $customer->avatar = $avatar_path;
    //     }

    //     if (!$customer->save()) {
    //         return redirect()->back()->with('error', 'Sorry, Something went wrong while updating the customer.');
    //     }

    //     return redirect()->route('customers.index')->with('success', 'Success, The customer has been updated.');
    // }

    // public function destroy(Barang $customer)
    // {
    //     if ($customer->avatar) {
    //         Storage::delete($customer->avatar);
    //     }

    //     $customer->delete();

    //     return response()->json([
    //         'success' => true
    //     ]);
    // }
}
