<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use App\Models\About;
use App\Models\Achievement;
use App\Models\Contact;
use App\Models\ContactNumber;
use App\Models\Donor;
use App\Models\Dropdown;
use App\Models\Facility;
use App\Models\Footer;
use App\Models\Founder;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\ManagementBody;
use App\Models\Map;
use App\Models\MissionVision;
use App\Models\NewsEvent;
use App\Models\Notice;
use App\Models\NoticeHeadline;
use App\Models\OurHistory;
use App\Models\Profile;
use App\Models\Slider;
use App\Models\Teacher;
use App\Models\Welcome;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('master', function ($view) {
            $view->with([
                'headers'           => Header::all(),
                'noticeHeadlines'   => NoticeHeadline::all(),
                'sliders'           => Slider::all(),
                'footers'           => Footer::all(),
                'galleries'         => Gallery::all(),
                'achievements'      => Achievement::all(),
                'news_events'       => NewsEvent::all(),
                'contacts'          => Contact::all(),
                'our_histories'     => OurHistory::all(),
                'notices'           => Notice::all(),
                'abouts'            => About::all(),
                'profiles'          => Profile::all(),
                'mission_visions'   => MissionVision::all(),
                'teachers'          => Teacher::all(),
                'founders'          => Founder::all(),
                'facilities'        => Facility::all(),
                'welcomes'          => Welcome::all(),
                'maps'              => Map::all(),
                'contact_numbers'   => ContactNumber::all(),
                'donors'            => Donor::all(),
                'management_bodies' => ManagementBody::all(),
                'dropdowns'         => Dropdown::all(),
            ]);
        });
        Paginator::useBootstrap();
    }

}
