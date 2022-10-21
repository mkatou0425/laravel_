<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){

        dd('test');

        //Eloquent エロクアント
        $values = Test::all();//全件取得

        $count = Test::count();//件数の取得

        $first = Test::findOrFail(1);//IDを指定すると、指定した数のインスタンスを返す

        //->get()はIlluminate\Database\Eloquent\Builder を Illuminate\Database\Eloquent\Collection に(データ型変える)
        $whereBBB = Test::where('text', '=', 'bbb')->get();//条件指定（text　が　bbb　のもの）


        //クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')//条件
                     ->select('id', 'text')//表示
                     ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);//処理を止めて中身を見る die + var_dump

        return view('tests.test', compact('values')); //compact関数でView側に変数を渡す
    }
}
