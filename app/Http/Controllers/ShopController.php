<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
//        1対多　親 -> 子を取得
        $shops = Area::find(3)->shops;
//        親　<- 子
        $area = Shop::find(4)->area;

//        多対多
        $routes = Shop::find(1)->routes()->get();

        dd($shops, $area, $routes);
    }
}
