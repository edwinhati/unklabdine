<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RateController extends Controller
{
    // public function mealtime() {
    //     $time = date('G') + 8;
    //     if ($time >= 5 && $time < 11) {
    //         return 'B';
    //     } else if($time >= 11 && $time < 17) {
    //         return 'L';
    //     } else {
    //         return 'D';
    //     }
    // }
    //
    // public function main($name) {
    //     $quote = DB::table('quote')->get();
    //     return view('rate.'.$name ,["quote"=>$quote]);
    // }
    public function main() {
        $quote = DB::table('quote')->get();
        $ide = DB::table('response')->max('id')+1;
        $ids = DB::table('response')->max('id')+2;
        $idf = DB::table('response')->max('id')+3;
        return view('rate.test' ,["quote"=>$quote, 'ide'=>$ide, 'ids'=>$ids, 'idf'=>$idf]);
    }
    public function store(Request $request) {
        // Rate::create($request->except('_token'));

        $time = date('G') + 8;
        if ($time >= 5 && $time < 11) {
            $mealtime = 'B';
        } else if($time >= 11 && $time < 17) {
            $mealtime = 'L';
        } else {
            $mealtime = 'D';
        }
        
        // dd($request->except('_token'));
        // dd($request->all());
        $id = $request->id;
        $responden = $request->responden;
        $timecreated = date('Y-m-d');
        $comments = $request->comments;
        $rating = $request->rating;
        $type = ['E', 'S', 'F'];
        for ($i=0; $i < 3; $i++) { 
            $data = [
                'id' => $id[$i],
                'responden' => $responden[0],
                'timecreated' => $timecreated,
                'comments' => $comments[$i],
                'rating' => $rating[$i],
                'type' => $type[$i],
                'mealtime' => $mealtime
            ];
            DB::table('response')->insert($data);
        }
        
    }
}
