<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Donor;
use App\Models\Founder;
use App\Models\ManagementBody;
use App\Models\MissionVision;
use App\Models\Profile;
use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function aboutUsIndex()
    {
        $abouts = About::all();
        return view('frontend.about.aboutUs',['abouts'=>$abouts]);
    }


    public function missionAndvisionIndex()
    {
        $mission_visions = MissionVision::all();
        return view('frontend.about.missionAndvision',['mission_visions'=>$mission_visions]);
    }




    public function managementBodyIndex()
    {
        $management_bodies  = ManagementBody::all();
        return view('frontend.about.managementBody',['management_bodies'=>$management_bodies]);
    }


    public function managementBodyIndexDetails($id)
    {
        $management_body  = ManagementBody::find($id);
        return view('frontend.about.management_Details.management_details',['management_body'=>$management_body]);
    }



    public function profileIndex()
    {
        $profiles =Profile::all();
        return view('frontend.about.profile',['profiles'=>$profiles]);
    }



    public function founderBodyIndex()
    {
        $founders =Founder::all();
        return view('frontend.about.founderBody',['founders'=>$founders]);
    }

    public function ourDonorIndex()
    {
        $donors =Donor::all();
        return view('frontend.about.ourDonor',['donors'=>$donors]);
    }

    public function donorSingle($id)

    {
        $donor = Donor::find($id);
        return view('frontend.about.donor.donor-single',compact('donor'));
    }

    public function donorAll()
    {
        $donors = Donor::all();
        return view('frontend.about.donor.donor-all', compact('donors'));
    }






}
