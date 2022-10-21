<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
      dd('test');

      // Eloquent　◎ リレーション(複数テーブルの連携)、スコープ(クエリの分割)
      $values = Test::all(); //モデル名::メソッド

      $count = Test::count();

      $first = Test::findOrfail(1);

      $whereBBB = Test::where('text', '=', 'bbb')->get();

      //クエリビルダ(こんな書き方もあるよ)
      $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->get();

      dd($values, $count, $first, $whereBBB, $queryBuilder); //コレクション型(配列を拡張した型)


      return view('tests.test', compact('values'));
    }
}
