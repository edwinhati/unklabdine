<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function main($name) {
        $quote = DB::table('quote')->get();
        return view('rate.'.$name ,["quote"=>$quote]);
    }
}
