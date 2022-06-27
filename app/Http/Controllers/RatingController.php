<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RatingController extends Controller
{
    //
    public function main() {
        $overall = DB::table('response')->avg('rating');
        $overall = round($overall, 1);

        $count = DB::table('response')->count('rating');
        $five = DB::table('response')->where('rating', 5)->count('rating');
        $four = DB::table('response')->where('rating', 4)->count('rating');
        $three = DB::table('response')->where('rating', 3)->count('rating');
        $two = DB::table('response')->where('rating', 2)->count('rating');
        $one = DB::table('response')->where('rating', 1)->count('rating');

        $quote = DB::table('quote')->get();
        return view('rating', ['overall'=>$overall, 'count'=>$count, 'five'=>$five, 'four'=>$four, 'three'=>$three, 'two'=>$two, 'one'=>$one, 'quote'=>$quote]);
    }
}
