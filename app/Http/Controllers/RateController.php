<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RateController extends Controller
{
    public function main() {
        $quote = DB::table('quote')->get();
        $ide = DB::table('response')->max('id')+1;
        $ids = DB::table('response')->max('id')+2;
        $idf = DB::table('response')->max('id')+3;
        return view('rate.index', ["quote"=>$quote, 'ide'=>$ide, 'ids'=>$ids, 'idf'=>$idf]);
    }
    public function store(Request $request) {

        $time = date('G') + 8;
        if ($time >= 5 && $time < 11) {
            $mealtime = 'B';
        } else if($time >= 11 && $time < 17) {
            $mealtime = 'L';
        } else {
            $mealtime = 'D';
        }
        
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
        $quote = DB::table('quote')->get();

        return view('rate.thankyou', ['quote'=>$quote]);
    }
}
