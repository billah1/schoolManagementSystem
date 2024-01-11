<?php

namespace App\Http\Controllers;

use App\Models\OurHistory;
use Illuminate\Http\Request;

class OurHistoryController extends Controller
{

    public function ourHistory()
    {
        $our_histories = OurHistory::all();
        return view('frontend.ourHistory.ourHistory', compact('our_histories'));
    }
}
