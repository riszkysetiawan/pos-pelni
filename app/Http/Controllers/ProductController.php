<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Shipper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // Ambil data dari database
    //     $orderData = Shipper::all(); // Gantikan dengan model dan query yang sesuai dengan struktur database Anda

    //     // Tampilkan view dengan melewatkan data
    //     return view('products.index', compact('orderData'));
    // }
    // public function index()
    // {
    // $products = new Product();
    // if ($request->search) {
    //     $products = $products->where('name', 'LIKE', "%{$request->search}%");
    // }
    // $products = $products->latest()->paginate(10);
    // if (request()->wantsJson()) {
    //     return ProductResource::collection($products);
    // }

    // return view('products.create', compact('takenSeats'));
    // return view('products.index')->with('takenSeats');
    // return view('products.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $takenSeats = Shipper::pluck('no_order')->toArray();

    //     return view('products.create', compact('takenSeats'));
    // }

    // public function store(Request $request)
    // {
    //     // Validasi data yang diterima dari form
    //     $validatedData = $request->validate([
    //         'no_order' => 'required|string',
    //         'nama_shipper' => 'required|string',
    //         'tujuan' => 'required|string',
    //         'alamat' => 'required|string',
    //     ]);

    //     // Ambil data dari form
    //     $noOrder = $request->input('no_order');
    //     $namaShipper = $request->input('nama_shipper');
    //     $tujuan = $request->input('tujuan');
    //     $alamat = $request->input('alamat');

    //     // Simpan data ke dalam database
    //     $shipper = new Shipper();
    //     $shipper->no_order = $noOrder;
    //     $shipper->nama_shipper = $namaShipper;
    //     $shipper->tujuan = $tujuan;
    //     $shipper->alamat = $alamat;
    //     $shipper->save();

    //     // Redirect atau tampilkan pesan sukses
    //     return redirect()->back()->with('success', 'Data berhasil disimpan.');
    // }

    // public function checkSeat($seat)
    // {
    //     // Periksa apakah seat sudah ada data di database berdasarkan nomor seat
    //     $isTaken = Shipper::where('no_order', $seat)->exists();

    //     // Mengembalikan status seat (isTaken) dalam format JSON
    //     return response()->json(['isTaken' => $isTaken]);
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(ProductStoreRequest $request)
    // {
    //     $image_path = '';

    //     if ($request->hasFile('image')) {
    //         $image_path = $request->file('image')->store('products', 'public');
    //     }

    //     $product = Product::create([
    //         'name' => $request->name,
    //         'description' => $request->description,
    //         'image' => $image_path,
    //         'barcode' => $request->barcode,
    //         'price' => $request->price,
    //         'quantity' => $request->quantity,
    //         'status' => $request->status
    //     ]);

    //     if (!$product) {
    //         return redirect()->back()->with('error', 'Sorry, Something went wrong while creating product.');
    //     }
    //     return redirect()->route('products.index')->with('success', 'Success, New product has been added successfully!');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function edit(Product $product)
    // {
    //     return view('products.edit')->with('product', $product);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function update(ProductUpdateRequest $request, Product $product)
    // {
    //     $product->name = $request->name;
    //     $product->description = $request->description;
    //     $product->barcode = $request->barcode;
    //     $product->price = $request->price;
    //     $product->quantity = $request->quantity;
    //     $product->status = $request->status;

    //     if ($request->hasFile('image')) {
    //         // Delete old image
    //         if ($product->image) {
    //             Storage::delete($product->image);
    //         }
    //         // Store image
    //         $image_path = $request->file('image')->store('products', 'public');
    //         // Save to Database
    //         $product->image = $image_path;
    //     }

    //     if (!$product->save()) {
    //         return redirect()->back()->with('error', 'Sorry, Something went wrong while updating product.');
    //     }
    //     return redirect()->route('products.index')->with('success', 'Success, Product has been updated.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Product $product)
    // {
    //     if ($product->image) {
    //         Storage::delete($product->image);
    //     }
    //     $product->delete();

    //     return response()->json([
    //         'success' => true
    //     ]);
    // }
}
