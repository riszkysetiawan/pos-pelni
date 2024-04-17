<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Barang;
use App\Models\Shipper;
use App\Models\Gudang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     // $orders = Order::with(['items', 'payments'])->get();
    //     $jumlah_barang = Barang::count();
    //     $jumlah_barang_gudang = Gudang::count();

    //     return view('home', [
    //         'orders_count' => $jumlah_barang->count(),
    //         'income' => $jumlah_barang->map(function ($i) {
    //             if ($i->receivedAmount() > $i->total()) {
    //                 return $i->total();
    //             }
    //             return $i->receivedAmount();
    //         })->sum(),
    //         'income_today' => $orders->where('created_at', '>=', date('Y-m-d') . ' 00:00:00')->map(function ($i) {
    //             if ($i->receivedAmount() > $i->total()) {
    //                 return $i->total();
    //             }
    //             return $i->receivedAmount();
    //         })->sum(),
    //         'customers_count' => $customers_count,
    //         'products_count' => $products_count
    //     ]);
    // }
    public function index()
    {
        $jumlahBarang = Barang::count();
        $jumlahBarangGudang = Gudang::count();
        $jumlah_kontainer_terisi = Shipper::count();
        $jumlah_kontainer_tersedia = max(0, 60 - $jumlah_kontainer_terisi);
        return view('home', compact('jumlahBarang', 'jumlahBarangGudang', 'jumlah_kontainer_terisi', 'jumlah_kontainer_tersedia'));
    }
}
