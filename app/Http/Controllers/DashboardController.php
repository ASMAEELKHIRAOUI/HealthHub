<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
// use Spatie\Permission\Models\Role;
class DashboardController extends Controller
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
    public function index()
    {
        return view('dashboard');
    }
    public function statistics()
    {
        $productsInStock = Product::where('stock','>',0)->count();
        $productsOutOfStock = Product::where('stock','=',0)->count();
        $brands = Brand::count();
        $users = User::role('user')->count();
        $orders = Order::count();
        $ordersToday = Order::whereDate('created_at','=',Carbon::now()->toDateString())->get()->count();
        return view('dashboard')->with(['productsInStock' => $productsInStock, 'productsOutOfStock' => $productsOutOfStock, 'brands' => $brands, 'users' => $users, 'orders' => $orders, 'ordersToday' => $ordersToday]);
    }
}
