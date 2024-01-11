<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Achievement;
use App\Models\Contact;
use App\Models\ContactNumber;
use App\Models\Donor;
use App\Models\Dropdown;
use App\Models\Facility;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\ManagementBody;
use App\Models\Map;
use App\Models\MissionVision;
use App\Models\NewsEvent;
use App\Models\Notice;
use App\Models\NoticeHeadline;
use App\Models\OurHistory;
use App\Models\Principal;
use App\Models\Profile;
use App\Models\ResultDetail;
use App\Models\Slider;
use App\Models\StudentResult;
use App\Models\Teacher;
use App\Models\Founder;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Carbon\Carbon;



use function PHPUnit\Framework\returnValue;

class AdminDashboardController extends Controller
{

    private $headers,$header,$noticeHeadlines,$noticeHeadline,$sliders,$slider,$gallery,$galleries,$our_histories,$our_history;
    private $footers,$footer,$achievements,$achievement,$news_events,$news_event,$contacts,$contact,$notices,$notice,$abouts,$about,$profiles,$profile;
    private $mission_visions,$mission_vision,$principals,$principal,$teachers,$teacher,$founders,$founder,$facility,$facilities;
    private $welcomes,$welcome,$result_details,$result_detail,$contact_numbers,$contact_number,$donors,$donor,$dropdowns,$dropdown;
    public function index()
    {
        return view('admin.home.dashboard');
    }

//    header

    public function addHeader()
    {
        return view('admin.home.header.addHeader');
    }

    public function addHeaderStore(Request $request)
    {
        Header::createNewHeader($request);
        return back()->with('success', 'Header Created successfully.');
    }

    public function manageHeader()
    {
        $this->headers = Header::all();
        return view('admin.home.header.manageHeader', ['headers' => $this->headers]);

    }

    public function editHeader($id)
    {
        $this->header = Header::find($id);
        return view('admin.home.header.editHeader', ['header' => $this->header]);
    }

    public function updateHeader(Request $request, $id)
    {
        Header::updateHeader($request, $id);
        return redirect('/manage-header') ->with('message', 'Header Info Updated Successfully');
    }

    public function deleteHeader($id)
    {
        Header::deleteHeader($id);
        return redirect('/manage-header') ->with('message', 'Header Info Delete Successfully');


    }


    //notice marquee header

    public function addNoticeMarquee()
    {
        return view('admin.home.noticeHeadline.addNoticeMarquee');
    }

    public function storeNoticeMarquee(Request $request)
    {
        NoticeHeadline::storeNoticeMarquee($request);
        return back()->with('success', 'Notice Created successfully.');
    }

    public function manageNoticeMarquee()
    {
        $this->noticeHeadlines = NoticeHeadline::paginate(10);
        return view('admin.home.noticeHeadline.manageNoticeMarquee', ['noticeHeadlines' => $this->noticeHeadlines]);
    }

    public function editNoticeMarquee($id)
    {
        $noticeHeadline = NoticeHeadline::find($id);
        return view('admin.home.noticeHeadline.editNoticeMarquee', ['noticeHeadline' => $noticeHeadline]);
    }


    public function updateNoticeMarquee(Request $request, $id)
    {
        NoticeHeadline::updateNoticeMarquee($request, $id);
        return redirect('/manage-marquee-notice') ->with('message', 'Notice Info Updated Successfully');
    }

    public function deleteNoticeMarquee($id)
    {
        NoticeHeadline::deleteNoticeMarquee($id);
        return redirect('/manage-marquee-notice') ->with('message', 'notice Info Delete Successfully');


    }


    //slider

    public function addSlider()
    {
        return view('admin.home.slider.addSlider');
    }

    public function storeSlider(Request $request)
    {
        Slider::storeSliderNew($request);
        return back()->with('success', 'Slider Created successfully.');
    }


    public function manageSlider()
    {
        $sliders = Slider::paginate(10);
        return view('admin.home.slider.manageSlider', compact('sliders'));
    }

    public function editSlider($id)
    {
        $slider = Slider::find($id); // Note the plural name
        return view('admin.home.slider.editSlider', compact('slider'));
    }

    public function updateSlider(Request $request,$id)
    {
        Slider::updateSliderNew($request,$id);
        return redirect('/manage-slider') ->with('message', 'Slider  Info Updated Successfully');

    }

    public function deleteSlider($id)
    {
        Slider::deleteSliderNew($id);
        return redirect('/manage-slider') ->with('message', 'slider Info Delete Successfully');

    }



    //welcomeMessage

    public function addWelcome()
    {
        return view('admin.home.welcome.addWelcome');
    }

   public function storeWelcome(Request $request)
    {
        Welcome::storeWelcomeNew($request);
        return back()->with('success', 'Welcome Created successfully.');
    }

    public function manageWelcome()
    {
        $welcomes = Welcome::all();
        return view('admin.home.welcome.manageWelcome',compact('welcomes'));
    }

    public function editWelcome($id)
    {
        $welcome = Welcome::find($id);
        return view('admin.home.welcome.editWelcome', compact('welcome'));
    }


    public function updateWelcome(Request $request,$id)
    {
        Welcome::updateWelcomeNew($request,$id);
        return redirect('/manage-welcome') ->with('success', 'Welcome   Info Updated Successfully');
    }


    public function deleteWelcome($id)
    {
        Welcome::deleteWelcomeNew($id);
        return redirect('/manage-welcome') ->with('success', 'Welcome   Info Delete Successfully');
    }




    //Facility

    public function addFacility()
    {
        return view('admin.home.facility.addFacility');
    }

    public function storeFacility(Request $request)
    {
        Facility::storeFacilityNew($request);
        return back()->with('success', 'Facility Created successfully.');
    }


    public function manageFacility()
    {
        $facilities = Facility::paginate(10);
        return view('admin.home.facility.manageFacility',compact('facilities'));
    }


    public function editFacility($id)
    {
        $facility = Facility::find($id);
        return view('admin.home.facility.editFacility',compact('facility'));
    }


    public function updateFacility(Request $request,$id)
    {
        Facility::updateFacilityNew($request,$id);
        return redirect('/manage-facility') ->with('message', 'facility Info update Successfully');
    }


    public function deleteFacility($id)
    {;
        Facility::deleteFacilityNew($id);
        return redirect('/manage-facility') ->with('message', 'facility Info Delete Successfully');
    }





   //managePrinciple

    public function addPrincipal()
    {
        return view('admin.home.principal.addPrincipal');
    }

    public function storePrincipal(Request $request)
    {
        Principal::storePrincipalNew($request);

        return back()->with('success', 'Principal Created successfully.');

    }

    public function managePrincipal()
    {
        $principals= Principal::all();
        return view('admin.home.principal.managePrincipal',compact('principals'));

    }

    public function editPrincipal($id)
    {
        $principal = Principal::find($id);
        return view('admin.home.principal.editPrincipal',compact('principal'));

    }

    public function updatePrincipal(Request $request,$id)
    {
        Principal::updatePrincipalNew($request,$id);
        return redirect('/manage-Principal') ->with('message', 'Principal  Info Updated Successfully');
    }

    public function deletePrincipal($id)
    {
          Principal::deletePrincipalNew($id);
          return redirect('/manage-Principal') ->with('message', 'Principal  Info Updated Successfully');
    }





//contact number

    public function addContactNumber()
    {
        return view('admin.home.contactNumber.addContactNumber');
    }

    public function storeContactNumber(Request $request)
    {
        ContactNumber::storeContactNumberNew($request);
        return back()->with('success', 'Contact Number Created successfully.');
    }

    public function manageContactNumber()
    {
        $contact_numbers= ContactNumber::paginate(10);
        return view('admin.home.contactNumber.manageContactNumber',compact('contact_numbers'));

    }

    public function editContactNumber($id)
    {
        $contact_number = ContactNumber::find($id);
        return view('admin.home.contactNumber.editContactNumber',compact('contact_number'));

    }

    public function updateContactNumber(Request $request,$id)
    {
        ContactNumber::updateContactNumberNew($request,$id);
        return redirect('/manage-contact-number') ->with('message', 'Contact Number  Info Updated Successfully');
    }

    public function deleteContactNumber($id)
    {
        ContactNumber::deleteContactNumberNew($id);
        return redirect('/manage-contact-number') ->with('message', 'Contact Number  Info Updated Successfully');
    }




//maps



    public function addMap()
    {
        return view('admin.home.location.addMap');
    }

    public function storeMap(Request $request)
    {
        Map::storeMapNew($request);
        return back()->with('success', 'Map Created successfully.');
    }

    public function manageMap()
    {
        $maps= Map::all();
        return view('admin.home.location.manageMap',compact('maps'));

    }

    public function editMap($id)
    {
        $map = Map::find($id);
        return view('admin.home.location.editMap',compact('map'));

    }

    public function updateMap(Request $request,$id)
    {
        Map::updateMapNew($request,$id);
        return redirect('/manage-map') ->with('message', 'Map  Info Updated Successfully');
    }

    public function deleteMap($id)
    {
        Map::deleteMapNew($id);
        return redirect('/manage-map') ->with('message', 'Map  Info Updated Successfully');
    }




   //news and events
    public function addNews()
    {
        return view('admin.home.news&events.addNewsEvent');
    }

    public function storeNewsEvent(Request $request)
    {
        NewsEvent::storeNewsEventNew($request);
        return back()->with('success','NewsEvent Created Successfully');
    }

    public function manageNewsEvent()
    {
        $news_events = NewsEvent::paginate(10);
        return view('admin.home.news&events.manageNewsEvent',compact('news_events'));
    }


    public function editNewsEvent($id)
    {
        $news_event = NewsEvent::find($id);
        return view('admin.home.news&events.editNewsEvent', compact('news_event'));
    }

    public function updateNewsEvent(Request $request,$id)
    {
        NewsEvent::updateNewsEventNew($request,$id);
        return redirect('/manage-news-event') ->with('success', 'News -event   Info Updated Successfully');
    }


    public function deleteNewsEvent($id)
    {
        NewsEvent::deleteNewsEventNew($id);
        return redirect('/manage-news-event') ->with('success', 'News events  Info Delete Successfully');

    }







    //achivement
    public function addAchievement()
    {
        return view('admin.home.achievement.addAchievement');
    }

    public function storeAchievement(Request $request)
    {
        Achievement::storeAchievementNew($request);
        return back()->with('success','Achievement Created Successfully');
    }

    public function manageAchievement()
    {
        $achievements = Achievement::paginate(10);
        return view('admin.home.achievement.manageAchievement',compact('achievements'));
    }
    public function editAchievement($id)
    {
        $achievement = Achievement::find($id);
        return view('admin.home.achievement.editAchievement', compact('achievement'));
    }

    public function updateAchievement(Request $request,$id)
    {
        Achievement::updateAchievementNew($request,$id);
        return redirect('/manage-Achievement') ->with('success', 'Achievement  Info Updated Successfully');

    }


    public function deleteAchievement($id)
    {
        Achievement::deleteAchievementNew($id);
        return redirect('/manage-Achievement') ->with('success', 'Achievement  Info Delete Successfully');

    }








    //Gallery
    public function addGallery()
    {
        return view('admin.home.gallery.addGallery');
    }

    public function storeGallery(Request $request)
    {
        Gallery::storeGalleryNew($request);
        return back()->with('success','Gallery Created Successfully');
    }

    public function manageGallery()
    {
        $galleries = Gallery::paginate(10);
        return view('admin.home.gallery.manageGallery',compact('galleries'));
    }

    public function editGallery($id)
    {
        $gallery = Gallery::find($id); // Note the plural name
        return view('admin.home.gallery.editGallery', compact('gallery'));
    }

    public function updateGallery(Request $request,$id)
    {
        Gallery::updateGalleryNew($request,$id);
        return redirect('/manage-Gallery') ->with('success', 'Gallery  Info Updated Successfully');

    }

    public function deleteGallery($id)
    {
        Gallery::deleteGalleryNew($id);
        return redirect('/manage-Gallery') ->with('success', 'Gallery Info Delete Successfully');

    }









//about
    public function addAbout()
    {
        return view('admin.about.about.addAbout');
    }

    public function storeAbout(Request $request)
    {
        About::storeAboutNew($request);
        return back()->with('success','About created successfully');
    }

    public function manageAbout()
    {
        $abouts = About::all();
        return view('admin.about.about.manageAbout',compact('abouts'));
    }

    public function editAbout($id)
    {
        $about = About::find($id);
        return view('admin.about.about.editAbout',compact('about'));
    }


    public function updateAbout(Request $request,$id)
    {
        About::  updateAboutNew($request,$id);
        return redirect('/manage-About') ->with('success', 'About  Info Updated Successfully');

    }


    public function deleteAbout($id)
    {
        About::deleteAboutNew($id);
        return redirect('/manage-About') ->with('success', 'About  Info Delete Successfully');
    }



//profile
    public function addProfile()
    {
        return view('admin.about.profile.addProfile');
    }

    public function storeProfile(Request $request)
    {
        Profile::storeProfileNew($request);
        return back()->with('success','Profile created successfully');

    }

    public function manageProfile()
    {
        $profiles= Profile::all();
        return view('admin.about.profile.manageProfile',compact('profiles'));
    }

    public function editProfile($id)
    {
        $profile = Profile::find($id);
        return view('admin.about.profile.editProfile',compact('profile'));
    }

    public function updateProfile(Request $request,$id)
    {
        Profile::  updateProfileNew($request,$id);
        return redirect('/manage-profile') ->with('success', 'Profile  Info Updated Successfully');

    }

    public function deleteProfile($id)
    {
        Profile::deleteProfileNew($id);
        return redirect('manage-profile') ->with('success', 'Profile  Info Delete Successfully');
    }





//mission and vision
    public function addMissionVision()
    {
        return view('admin.about.mission-vision.addMissionVision');
    }


    public function storeMissionVision(Request $request)
    {
        MissionVision::storeMissionVisionNew($request);
        return back()->with('success','Mission and Vision created successfully');

    }

    public function manageMissionVision()
    {
        $mission_visions = MissionVision::all();
        return view('admin.about.mission-vision.manageMissionVision',compact('mission_visions'));
    }

    public function editMissionVision($id)
    {
        $mission_vision = MissionVision::find($id);
        return view('admin.about.mission-vision.editMissionVision',compact('mission_vision'));
    }


    public function updateMissionVision(Request $request,$id)
    {
        MissionVision::  updateMissionVisionNew($request,$id);
        return redirect('/manage-mission-and-vision') ->with('success', 'Mission-Vision  Info Updated Successfully');

    }

    public function deleteMissionVision($id)
    {
        MissionVision::deleteMissionVisionNew($id);
        return redirect('manage-mission-and-vision') ->with('success', 'Mission-Vision  Info Delete Successfully');
    }





//founder
    public function addFounder()
    {
        return view('admin.about.founderBody.addFounder');
    }
   public function storeFounder(Request $request)
    {
        Founder::storeFounderNew($request);
        return back()->with('success','Founder created successfully');
    }

    public function manageFounder()
    {
        $founders = Founder::all();
        return view('admin.about.founderBody.manageFounder',compact('founders'));
    }


    public function editFounder($id)
    {
        $founder = Founder::find($id);
        return view('admin.about.founderBody.editFounder',compact('founder'));
    }


    public function updateFounder(Request $request,$id)
    {
        Founder::  updateFounderNew($request,$id);
        return redirect('/manage-Founder') ->with('message', 'Founder  Info Updated Successfully');
    }


    public function deleteFounder($id)
    {
        Founder::deleteFounderNew($id);
        return redirect('/manage-Founder') ->with('message', 'Founder  Info Delete Successfully');
    }



//Donor
    public function addDonor()
    {
        return view('admin.about.donor.addDonor');
    }
    public function storeDonor(Request $request)
    {
        Donor::storeDonorNew($request);
        return back()->with('success','Donor created successfully');
    }

    public function manageDonor()
    {
        $donors = Donor::paginate(10);
        return view('admin.about.donor.manageDonor',compact('donors'));
    }


    public function editDonor($id)
    {
        $donor = Donor::find($id);
        return view('admin.about.donor.editDonor',compact('donor'));
    }


    public function updateDonor(Request $request,$id)
    {
        Donor::updateDonorNew($request,$id);
        return redirect('/manage-Donor') ->with('message', 'donor  Info Updated Successfully');
    }


    public function deleteDonor($id)
    {
        Donor::deleteDonorNew($id);
        return redirect('/manage-Donor') ->with('message', 'donor  Info Delete Successfully');
    }

//management

    public function addManagementBody()
    {
        return view('admin.about.management.addManagement');
    }
    public function storeManagementBody(Request $request)
    {
        ManagementBody::storeManagementBodyNew($request);
        return back()->with('message',' Management Body created successfully');
    }

    public function manageManagementBody()
    {
        $management_bodies = ManagementBody::paginate(10);
        return view('admin.about.management.manageManagement',compact('management_bodies'));
    }


    public function editManagementBody($id)
    {
        $management_body = ManagementBody::find($id);
        return view('admin.about.management.editManagement',compact('management_body'));
    }


    public function updateManagementBody(Request $request,$id)
    {
        ManagementBody::updateManagementBodyNew($request,$id);
        return redirect('/manage-ManagementBody') ->with('message', ' Management Body  Info Updated Successfully');
    }


    public function deleteManagementBody($id)
    {
        ManagementBody::deleteManagementBodyNew($id);
        return redirect('/manage-ManagementBody') ->with('message', ' Management Body  Info Delete Successfully');
    }





















//our history
    public function addHistory()
    {
        return view('admin.our-history.addHistory');
    }


    public function storeHistory(Request $request)
    {
        OurHistory::storeHistory($request);
        return back()->with('success','History Created Successfully');
    }

    public function manageHistory()
    {
        $our_histories = OurHistory::all();
        return view('admin.our-history.manageHistory',compact('our_histories'));
    }


    public function editHistory($id)
    {
        $our_history = OurHistory::find($id);
        return view('admin.our-history.editHistory',compact('our_history'));
    }


    public function updateHistory(Request $request,$id)
    {
        OurHistory::updateHistory($request,$id);
        return redirect('/manage-History') ->with('success', 'History  Info Updated Successfully');
    }


    public function deleteHistory($id)
    {
        OurHistory::deleteHistory($id);
        return redirect('/manage-History') ->with('success', 'History Info Delete Successfully');
    }



//our Notice
    public function addNotice()
    {
        return view('admin.notice.addNotice');
    }

    public function storeNotice(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'pdf' => 'required|mimes:pdf|max:10240', // PDF validation
        ]);

        $pdfUrl = Notice::getPdfUrl($request);

        Notice::create([
            'title' => $request->title,
            'date' => $request->date,
            'pdf' => $pdfUrl,
        ]);

        return back()->with('success', 'Notice Created Successfully');
    }

    public function manageNotice()
    {
        $notices = Notice::paginate(10);
        return view('admin.notice.manageNotice',compact('notices'));
    }

    public function editNotice($id)
    {
        $notice = Notice::find($id);
        return view('admin.notice.editNotice',compact('notice'));
    }

    public function updateNotice(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'pdf' => 'sometimes|mimes:pdf|max:10240', // PDF validation
        ]);

        $notice = Notice::find($id);

        if ($request->hasFile('pdf')) {
            if ($notice->pdf && file_exists($notice->pdf)) {
                unlink($notice->pdf);
            }
            $pdfUrl = Notice::getPdfUrl($request);
        } else {
            $pdfUrl = $notice->pdf;
        }

        $notice->update([
            'title' => $request->title,
            'date' => $request->date,
            'pdf' => $pdfUrl,
        ]);

        return redirect('/manage-Notice')->with('success', 'Notice Info Updated Successfully');
    }

    public function deleteNotice($id)
    {
        Notice::deleteNoticeNew($id);
        return redirect('/manage-Notice') ->with('success', 'Notice  Info Updated Successfully');
    }







//our teacher home
    public function addTeacher()
    {
        return view('admin.academics.teachers.addTeacher');
    }

    public function storeTeacher(Request $request)
    {
        Teacher::storeTeacherNew($request);
        return back()->with('success','Teacher Created Successfully');
    }

    public function manageTeacher()
    {
        $teachers = Teacher::paginate(10);

        return view('admin.academics.teachers.manageTeacher', compact('teachers'));
    }



    public function editTeacher($id)
    {
        $teacher = Teacher::find($id);
        return view('admin.academics.teachers.editTeacher',compact('teacher'));
    }


    public function updateTeacher(Request $request,$id)
    {
        Teacher::updateTeacherNew($request,$id);
        return redirect('/manage-teachers') ->with('success', 'Teacher  Info Updated Successfully');
    }


    public function deleteTeacher($id)
    {
        Teacher::deleteTeacherNew($id);
        return redirect('/manage-teachers') ->with('success', 'Teacher Info Delete Successfully');
    }






//Exam results
    public function addExamResult()
    {
        $dropdowns = Dropdown::all();
        return view('admin.academics.exam-result.addExamResult', compact('dropdowns'));
    }

//    public function storeTeacher(Request $request)
//    {
//        Teacher::storeTeacherNew($request);
//        return back()->with('success','Teacher Created Successfully');
//    }
//
//
    public function manageExamResult()
    {
        $result_details = StudentResult::paginate(10);
        return view('admin.academics.exam-result.manageExamResult',compact('result_details'));
    }





//our Contact

    public function manageContact()
    {
        $contacts = Contact::paginate(10);
        return view('admin.our-contact.manageContact',compact('contacts'));

    }

    public function editContact($id)
    {
        $contact = Contact::find($id);
        return view('admin.our-contact.editContact', compact('contact'));
    }

    public function updateContact(Request $request, $id)
    {
        Contact::updateContact($request, $id);
        return redirect('/manage-Contact')->with('success', 'Contact Info Updated Successfully');
    }


    public function deleteContact($id)
    {
        Contact::deleteContact($id);
        return redirect('/manage-Contact')->with('success', 'Contact Info Deleted Successfully');
    }




    // Footer section

    public function addFooter()
    {
        return view('admin.home.footer.addFooter');
    }


    public function storeFooter(Request $request)
    {
        Footer::storeFooterNew($request);
        return back()->with('success','Footer Created Successfully');

    }

    public function manageFooter()
    {
        $footers =Footer::all();
        return view('admin.home.footer.manageFooter',compact('footers'));
    }

    public function editFooter($id)
    {
        $footer = Footer::find($id);
        return view('admin.home.footer.editFooter',compact('footer'));
    }


    public function updateFooter(Request $request,$id)
    {
        Footer::updateFooterNew($request,$id);
        return redirect('/manage-footer') ->with('success', 'footer  Info Updated Successfully');

    }

    public function deleteFooter($id)
    {
        Footer::deleteFooterNew($id);
        return redirect('/manage-footer') ->with('success', 'Footer Info Delete Successfully');

    }








//Adding section,semester,class dropdown

    public function addExamDropdown()
    {
        return view('admin.academics.dropdown.addExamDropdown');
    }


    public function storeExamDropdown(Request $request)
    {
        if (Dropdown::storeDropDownNew($request)) {
            return redirect()->route('manageExamDropdown')->with('message', 'Dropdown Created Successfully');
        } else {
            return redirect()->back()->with('message', 'This value  already exists in the table ');
        }
    }

    public function manageExamDropdown()
    {
        $dropdowns = Dropdown::paginate(10);
        return view('admin.academics.dropdown.manageExamDropdown', compact('dropdowns'));
    }


    public function editExamDropdown($id)
    {
        $dropdown = Dropdown::find($id);
        return view('admin.academics.dropdown.editExamDropdown',compact('dropdown'));
    }


    public function updateExamDropdown(Request $request,$id)
    {
        Dropdown::updateDropDownNew($request,$id);
        return redirect('/manage-exam-Dropdown') ->with('message', 'Dropdown  Info Updated Successfully');

    }

    public function deleteExamDropdown($id)
    {
        Dropdown::deleteDropDownNew($id);
        return redirect('/manage-exam-Dropdown') ->with('message', 'Dropdown Info Delete Successfully');

    }




}
