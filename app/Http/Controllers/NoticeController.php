<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{


    public function noticeIndex()
    {
        $notices = Notice::all();
        return view('frontend.notice.notice',['notices'=>$notices]);
    }
}
