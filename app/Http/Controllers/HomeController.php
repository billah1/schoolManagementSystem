<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\ContactNumber;
use App\Models\Facility;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\Map;
use App\Models\NewsEvent;
use App\Models\NoticeHeadline;
use App\Models\Principal;
use App\Models\Slider;
use App\Models\User;
use App\Models\Welcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $noticeHeadlines        = NoticeHeadline::all();
        $sliders                = Slider::all();
        $footers                = Footer::all();
        $galleries              = Gallery::all();
        $achievements           = Achievement::take(3)->get();
        $news_events            = NewsEvent::all();
        $principals             = Principal::all();
        $facilities             = Facility::all();
        $welcomes               = Welcome::all();
        $maps                   = Map::all();
        $contact_numbers        = ContactNumber::all();


        return view('frontend.home.home.index', ['noticeHeadlines' => $noticeHeadlines, 'sliders' => $sliders,'footers'=>$footers,'galleries'=>$galleries,'achievements'=>$achievements,'news_events'=>$news_events,'principals'=>$principals,'facilities'=>$facilities,'welcomes'=>$welcomes,'maps'=>$maps,'contact_numbers'=>$contact_numbers]);

    }



    public function newsDetails($id)

    {
        $news_event = NewsEvent::find($id);
        return view('frontend.home.newsAndevent.newsDetails',compact('news_event'));
    }

    public function newsDetailAll()

    {
        $news_events = NewsEvent::all();
        return view('frontend.home.newsAndevent.newsDetailAll',compact('news_events'));
    }






    public function achievementDetails($id)

    {
        $achievement = Achievement::find($id);
        return view('frontend.home.achievement.achievementDetails',compact('achievement'));
    }



    public function achievementDetailAll()

    {
        $achievements = Achievement::all();
        return view('frontend.home.achievement.achievementDetailAll',compact('achievements'));
    }




    public function galleryDetails()

    {
        $galleries = Gallery::all();
        return view('frontend.home.gallery.galleryDetails',compact('galleries'));
    }






}
