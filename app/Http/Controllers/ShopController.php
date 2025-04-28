<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller {
    public function index() {

        // 親 -> 子
        $shops = Area::find(1)->shops;
        // dd($shops);

        // 子 -> 親
        $area = Shop::find(3)->area;
        // dd($area);

        // 多 対 多
        $routes = Shop::find(1)->routes()->get();

        dd($routes);
    }
}
