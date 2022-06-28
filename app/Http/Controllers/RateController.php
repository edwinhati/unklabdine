<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RateController extends Controller
{
    //
    // public function main($name) {
    //     $quote = DB::table('quote')->get();
    //     return view('rate.'.$name ,["quote"=>$quote]);
    // }
    public function main() {
        $quote = DB::table('quote')->get();
        return view('rate.index' ,["quote"=>$quote]);
    }
    public function store(Request $request) {
        dd($request->all());
    }
}
