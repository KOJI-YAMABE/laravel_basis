<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class TestController extends Controller
{
    public function index() {

        // エロクアント
        $values = Test::all();
        $count = Test::count();
        $first = TEST::findOrFail(1);
        $whereBBB = TEST::where('id', '=', '2')->get();

        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('id', '=', '1')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);
        return view('tests.test', compact('values'));
    }
}
