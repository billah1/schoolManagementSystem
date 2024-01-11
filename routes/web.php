<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OurHistoryController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ShowResultController;





//Home Controller
Route::get('/',[HomeController::class,'index'])->name('home');


Route::get('/news-and-events-Detail/{id}',[HomeController::class,'newsDetails'])->name('newsDetails');
Route::get('/news-and-events-Detail-all',[HomeController::class,'newsDetailAll'])->name('newsDetailAll');




Route::get('/achievement-Details/{id}',[HomeController::class,'achievementDetails'])->name('achievementDetails');
Route::get('/achievement-Details-all',[HomeController::class,'achievementDetailAll'])->name('achievementDetailAll');



Route::get('/gallery-Details',[HomeController::class,'galleryDetails'])->name('galleryDetails');




//About Controller

Route::get('/aboutUs',[AboutController::class,'aboutUsIndex'])->name('aboutUs');


Route::get('/missionAndvision',[AboutController::class,'missionAndvisionIndex'])->name('missionAndvision');
Route::get('/profile',[AboutController::class,'profileIndex'])->name('profile');
Route::get('/founderBody',[AboutController::class,'founderBodyIndex'])->name('founderBody');
//donor
Route::get('/ourDonor',[AboutController::class,'ourDonorIndex'])->name('ourDonor');
Route::get('/ourDonorSingle/{id}',[AboutController::class,'donorSingle'])->name('donor-single');
Route::get('/ourDonorAll',[AboutController::class,'donorAll'])->name('donor-all');


Route::get('/managementBody',[AboutController::class,'managementBodyIndex'])->name('managementBody');
Route::get('/managementBodyDetails/{id}',[AboutController::class,'managementBodyIndexDetails'])->name('managementBodyDetails');



//our history
Route::get('/ourHistory',[OurHistoryController::class,'ourHistory'])->name('ourHistory');



//notice
Route::get('/notice',[NoticeController::class,'noticeIndex'])->name('notice');

//contact

Route::get('/contact',[ContactUsController::class,'contactUsIndex'])->name('contact');
Route::post('/contact-store',[ContactUsController::class,'contactStore'])->name('StoreContact');


//Result

Route::get('/exam-result',[AcademicController::class,'resultLogin'])->name('exam-result-login');
Route::post('/exam-result-view',[AcademicController::class,'resultPage'])->name('exam-result-view');

Route::resource('showResults',ShowResultController::class);



Route::get('/teachers',[AcademicController::class,'teacherIndex'])->name('teachers');

Route::get('/teachers-details',[AcademicController::class,'teachersDetails'])->name('teachersDetails');

Route::get('/teacher-single-details/{id}', [AcademicController::class, 'teacherSingleDetails'])->name('teacherSingleDetails');





//middleware

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');

//header

    Route::get('/add-header',[AdminDashboardController::class,'addHeader'])->name('addHeader');
    Route::post('/add-header-Store',[AdminDashboardController::class,'addHeaderStore'])->name('addHeaderStore');
    Route::get('/manage-header',[AdminDashboardController::class,'manageHeader'])->name('manageHeader');
    Route::get('/edit-header/{id}',[AdminDashboardController::class,'editHeader'])->name('editHeader');
    Route::post('/update-header/{id}',[AdminDashboardController::class,'updateHeader'])->name('updateHeader');
    Route::post('/delete-header/{id}',[AdminDashboardController::class,'deleteHeader'])->name('deleteHeader');



//marquee notice

    Route::get('/add-header-notice',[AdminDashboardController::class,'addNoticeMarquee'])->name('addNoticeMarquee');
    Route::post('/store-marquee-notice',[AdminDashboardController::class,'storeNoticeMarquee'])->name('storeNoticeMarquee');
    Route::get('/manage-marquee-notice',[AdminDashboardController::class,'manageNoticeMarquee'])->name('manageNoticeMarquee');
    Route::get('/edit-marquee-notice/{id}',[AdminDashboardController::class,'editNoticeMarquee'])->name('editNoticeMarquee');
    Route::post('/update-marquee-notice/{id}', [AdminDashboardController::class, 'updateNoticeMarquee'])->name('updateNoticeMarquee');
    Route::get('/delete-marquee-notice/{id}',[AdminDashboardController::class,'deleteNoticeMarquee'])->name('deleteNoticeMarquee');


//add slider

    Route::get('/add-slider',[AdminDashboardController::class,'addSlider'])->name('addSlider');
    Route::post('/store-slider',[AdminDashboardController::class,'storeSlider'])->name('storeSlider');
    Route::get('/manage-slider',[AdminDashboardController::class,'manageSlider'])->name('manageSlider');
    Route::get('/edit-slider/{id}',[AdminDashboardController::class,'editSlider'])->name('editSlider');
    Route::post('/update-slider/{id}',[AdminDashboardController::class,'updateSlider'])->name('updateSlider');
    Route::post('/delete-slider/{id}',[AdminDashboardController::class,'deleteSlider'])->name('deleteSlider');

//add welcome

    Route::get('/add-welcome',[AdminDashboardController::class,'addWelcome'])->name('addWelcome');
    Route::post('/store-welcome',[AdminDashboardController::class,'storeWelcome'])->name('storeWelcome');
    Route::get('/manage-welcome',[AdminDashboardController::class,'manageWelcome'])->name('manageWelcome');
    Route::get('/edit-welcome/{id}',[AdminDashboardController::class,'editWelcome'])->name('editWelcome');
    Route::post('/update-welcome/{id}',[AdminDashboardController::class,'updateWelcome'])->name('updateWelcome');
    Route::post('/delete-welcome/{id}',[AdminDashboardController::class,'deleteWelcome'])->name('deleteWelcome');


//add Facility

    Route::get('/add-facility',[AdminDashboardController::class,'addFacility'])->name('addFacility');
    Route::post('/store-facility',[AdminDashboardController::class,'storeFacility'])->name('storeFacility');
    Route::get('/manage-facility',[AdminDashboardController::class,'manageFacility'])->name('manageFacility');
    Route::get('/edit-facility/{id}',[AdminDashboardController::class,'editFacility'])->name('editFacility');
    Route::post('/update-facility/{id}',[AdminDashboardController::class,'updateFacility'])->name('updateFacility');
    Route::post('/delete-facility/{id}',[AdminDashboardController::class,'deleteFacility'])->name('deleteFacility');


//add Location map

    Route::get('/add-map',[AdminDashboardController::class,'addMap'])->name('addMap');
    Route::post('/store-map',[AdminDashboardController::class,'storeMap'])->name('storeMap');
    Route::get('/manage-map',[AdminDashboardController::class,'manageMap'])->name('manageMap');
    Route::get('/edit-map/{id}',[AdminDashboardController::class,'editMap'])->name('editMap');
    Route::post('/update-map/{id}',[AdminDashboardController::class,'updateMap'])->name('updateMap');
    Route::post('/delete-map/{id}',[AdminDashboardController::class,'deleteMap'])->name('deleteMap');


//add Contacts number

    Route::get('/add-contact-number',[AdminDashboardController::class,'addContactNumber'])->name('addContactNumber');
    Route::post('/store-contact-number',[AdminDashboardController::class,'storeContactNumber'])->name('storeContactNumber');
    Route::get('/manage-contact-number',[AdminDashboardController::class,'manageContactNumber'])->name('manageContactNumber');
    Route::get('/edit-contact-number/{id}',[AdminDashboardController::class,'editContactNumber'])->name('editContactNumber');
    Route::post('/update-contact-number/{id}',[AdminDashboardController::class,'updateContactNumber'])->name('updateContactNumber');
    Route::post('/delete-contact-number/{id}',[AdminDashboardController::class,'deleteContactNumber'])->name('deleteContactNumber');

//add Principle Talk

    Route::get('/add-Principal',[AdminDashboardController::class,'addPrincipal'])->name('addPrincipal');
    Route::post('/store-Principal',[AdminDashboardController::class,'storePrincipal'])->name('storePrincipal');
    Route::get('/manage-Principal',[AdminDashboardController::class,'managePrincipal'])->name('managePrincipal');
    Route::get('/edit-Principal/{id}',[AdminDashboardController::class,'editPrincipal'])->name('editPrincipal');
    Route::post('/update-Principal/{id}',[AdminDashboardController::class,'updatePrincipal'])->name('updatePrincipal');
    Route::post('/delete-Principal/{id}',[AdminDashboardController::class,'deletePrincipal'])->name('deletePrincipal');


//add news

    Route::get('/add-news-event', [AdminDashboardController::class, 'addNews'])->name('addNewsEvent');
    Route::post('/store-news-event',[AdminDashboardController::class,'storeNewsEvent'])->name('storeNewsEvent');
    Route::get('/manage-news-event',[AdminDashboardController::class,'manageNewsEvent'])->name('manageNewsEvent');
    Route::get('/edit-news-event/{id}',[AdminDashboardController::class,'editNewsEvent'])->name('editNewsEvent');
    Route::post('/update-news-event/{id}',[AdminDashboardController::class,'updateNewsEvent'])->name('updateNewsEvent');
    Route::post('/delete-news-event/{id}',[AdminDashboardController::class,'deleteNewsEvent'])->name('deleteNewsEvent');


//add Achievement

    Route::get('/add-Achievement',[AdminDashboardController::class,'addAchievement'])->name('addAchievement');
    Route::post('/store-Achievement',[AdminDashboardController::class,'storeAchievement'])->name('storeAchievement');
    Route::get('/manage-Achievement',[AdminDashboardController::class,'manageAchievement'])->name('manageAchievement');
    Route::get('/edit-Achievement{id}',[AdminDashboardController::class,'editAchievement'])->name('editAchievement');
    Route::post('/update-Achievement{id}',[AdminDashboardController::class,'updateAchievement'])->name('updateAchievement');
    Route::post('/delete-Achievement{id}',[AdminDashboardController::class,'deleteAchievement'])->name('deleteAchievement');


//add Gallery

    Route::get('/add-Gallery',[AdminDashboardController::class,'addGallery'])->name('addGallery');
    Route::post('/store-Gallery',[AdminDashboardController::class,'storeGallery'])->name('storeGallery');
    Route::get('/manage-Gallery',[AdminDashboardController::class,'manageGallery'])->name('manageGallery');
    Route::get('/edit-Gallery/{id}',[AdminDashboardController::class,'editGallery'])->name('editGallery');
    Route::post('/update-Gallery/{id}',[AdminDashboardController::class,'updateGallery'])->name('updateGallery');
    Route::post('/delete-Gallery/{id}',[AdminDashboardController::class,'deleteGallery'])->name('deleteGallery');

//add About

    Route::get('/add-About',[AdminDashboardController::class,'addAbout'])->name('addAbout');
    Route::post('/store-About',[AdminDashboardController::class,'storeAbout'])->name('storeAbout');
    Route::get('/manage-About',[AdminDashboardController::class,'manageAbout'])->name('manageAbout');
    Route::get('/edit-About/{id}',[AdminDashboardController::class,'editAbout'])->name('editAbout');
    Route::post('/update-About/{id}',[AdminDashboardController::class,'updateAbout'])->name('updateAbout');
    Route::post('/delete-About/{id}',[AdminDashboardController::class,'deleteAbout'])->name('deleteAbout');


//add mission and vision

    Route::get('/add-mission-and-vision',[AdminDashboardController::class,'addMissionVision'])->name('addMissionVision');
    Route::post('/store-mission-and-vision',[AdminDashboardController::class,'storeMissionVision'])->name('storeMissionVision');
    Route::get('/manage-mission-and-vision',[AdminDashboardController::class,'manageMissionVision'])->name('manageMissionVision');
    Route::get('/edit-mission-and-vision/{id}',[AdminDashboardController::class,'editMissionVision'])->name('editMissionVision');
    Route::post('/update-mission-and-vision/{id}',[AdminDashboardController::class,'updateMissionVision'])->name('updateMissionVision');
    Route::post('/delete-mission-and-vision/{id}',[AdminDashboardController::class,'deleteMissionVision'])->name('deleteMissionVision');


//add profile

    Route::get('/add-profile',[AdminDashboardController::class,'addProfile'])->name('addProfile');
    Route::post('/store-profile',[AdminDashboardController::class,'storeProfile'])->name('storeProfile');
    Route::get('/manage-profile',[AdminDashboardController::class,'manageProfile'])->name('manageProfile');
    Route::get('/edit-profile/{id}',[AdminDashboardController::class,'editProfile'])->name('editProfile');
    Route::post('/update-profile/{id}',[AdminDashboardController::class,'updateProfile'])->name('updateProfile');
    Route::post('/delete-profile/{id}',[AdminDashboardController::class,'deleteProfile'])->name('deleteProfile');


//add FOUNDER

    Route::get('/add-Founder',[AdminDashboardController::class,'addFounder'])->name('addFounder');
    Route::post('/store-Founder',[AdminDashboardController::class,'storeFounder'])->name('storeFounder');
    Route::get('/manage-Founder',[AdminDashboardController::class,'manageFounder'])->name('manageFounder');
    Route::get('/edit-Founder/{id}',[AdminDashboardController::class,'editFounder'])->name('editFounder');
    Route::post('/update-Founder/{id}',[AdminDashboardController::class,'updateFounder'])->name('updateFounder');
    Route::post('/delete-Founder/{id}',[AdminDashboardController::class,'deleteFounder'])->name('deleteFounder');


//donor

    Route::get('/add-Donor',[AdminDashboardController::class,'addDonor'])->name('addDonor');
    Route::post('/store-Donor',[AdminDashboardController::class,'storeDonor'])->name('storeDonor');
    Route::get('/manage-Donor',[AdminDashboardController::class,'manageDonor'])->name('manageDonor');
    Route::get('/edit-Donor/{id}',[AdminDashboardController::class,'editDonor'])->name('editDonor');
    Route::post('/update-Donor/{id}',[AdminDashboardController::class,'updateDonor'])->name('updateDonor');
    Route::post('/delete-Donor/{id}',[AdminDashboardController::class,'deleteDonor'])->name('deleteDonor');



//ManagementBody

    Route::get('/add-ManagementBody',[AdminDashboardController::class,'addManagementBody'])->name('addManagementBody');
    Route::post('/store-ManagementBody',[AdminDashboardController::class,'storeManagementBody'])->name('storeManagementBody');
    Route::get('/manage-ManagementBody',[AdminDashboardController::class,'manageManagementBody'])->name('manageManagementBody');
    Route::get('/edit-ManagementBody/{id}',[AdminDashboardController::class,'editManagementBody'])->name('editManagementBody');
    Route::post('/update-ManagementBody/{id}',[AdminDashboardController::class,'updateManagementBody'])->name('updateManagementBody');
    Route::post('/delete-ManagementBody/{id}',[AdminDashboardController::class,'deleteManagementBody'])->name('deleteManagementBody');


//add history

    Route::get('/add-History',[AdminDashboardController::class,'addHistory'])->name('addHistory');
    Route::post('/store-History',[AdminDashboardController::class,'storeHistory'])->name('storeHistory');
    Route::get('/manage-History',[AdminDashboardController::class,'manageHistory'])->name('manageHistory');
    Route::get('/edit-History/{id}',[AdminDashboardController::class,'editHistory'])->name('editHistory');
    Route::post('/update-History/{id}',[AdminDashboardController::class,'updateHistory'])->name('updateHistory');
    Route::post('/delete-History/{id}',[AdminDashboardController::class,'deleteHistory'])->name('deleteHistory');


//add Notice

    Route::get('/add-Notice',[AdminDashboardController::class,'addNotice'])->name('addNoticeMain');
    Route::post('/store-Notice',[AdminDashboardController::class,'storeNotice'])->name('storeNoticeMain');
    Route::get('/manage-Notice',[AdminDashboardController::class,'manageNotice'])->name('manageNoticeMain');
    Route::get('/edit-Notice/{id}',[AdminDashboardController::class,'editNotice'])->name('editNoticeMain');
    Route::post('/update-Notice/{id}',[AdminDashboardController::class,'updateNotice'])->name('updateNoticeMain');
    Route::post('/delete-Notice/{id}',[AdminDashboardController::class,'deleteNotice'])->name('deleteNoticeMain');




//add teachers

    Route::get('/add-teachers',[AdminDashboardController::class,'addTeacher'])->name('addTeacher');
    Route::post('/store-teachers',[AdminDashboardController::class,'storeTeacher'])->name('storeTeacher');
    Route::get('/manage-teachers',[AdminDashboardController::class,'manageTeacher'])->name('manageTeacher');
    Route::get('/edit-teachers{id}',[AdminDashboardController::class,'editTeacher'])->name('editTeacher');
    Route::post('/update-teachers{id}',[AdminDashboardController::class,'updateTeacher'])->name('updateTeacher');
    Route::post('/delete-teachers{id}',[AdminDashboardController::class,'deleteTeacher'])->name('deleteTeacher');





//add Exam Result
    Route::get('/add-exam-result',[AdminDashboardController::class,'addExamResult'])->name('addExamResult');
    Route::post('/store-exam-result',[AdminDashboardController::class,'storeExamResult'])->name('storeExamResult');
    Route::get('/manage-exam-result',[AdminDashboardController::class,'manageExamResult'])->name('manageExamResult');
    Route::get('/edit-exam-result/{id}',[AdminDashboardController::class,'editExamResult'])->name('editExamResult');
    Route::post('/update-exam-result/{id}',[AdminDashboardController::class,'updateExamResult'])->name('updateExamResult');
    Route::post('/delete-exam-result/{id}',[AdminDashboardController::class,'deleteExamResult'])->name('deleteExamResult');



//dropdown
    Route::get('/add-exam-Dropdown',[AdminDashboardController::class,'addExamDropdown'])->name('addExamDropdown');
    Route::post('/store-exam-Dropdown',[AdminDashboardController::class,'storeExamDropdown'])->name('storeExamDropdown');
    Route::get('/manage-exam-Dropdown',[AdminDashboardController::class,'manageExamDropdown'])->name('manageExamDropdown');
    Route::get('/edit-exam-Dropdown/{id}',[AdminDashboardController::class,'editExamDropdown'])->name('editExamDropdown');
    Route::post('/update-exam-Dropdown/{id}',[AdminDashboardController::class,'updateExamDropdown'])->name('updateExamDropdown');
    Route::post('/delete-exam-Dropdown/{id}',[AdminDashboardController::class,'deleteExamDropdown'])->name('deleteExamDropdown');


    //result
    Route::get('/create-result', [ResultController::class, 'create'])->name('createResult');
    Route::post('/store-result', [ResultController::class, 'store'])->name('storeResult');
    Route::get('/show-result/{id}', [ResultController::class, 'show'])->name('showResult');
    Route::get('/manage-results', [ResultController::class, 'manageResults'])->name('manageResults');
    Route::get('/edit-result/{id}', [ResultController::class, 'edit'])->name('editResult');
    Route::put('/update-result/{id}', [ResultController::class, 'update'])->name('updateResult');
    Route::delete('/delete-result/{id}', [ResultController::class, 'destroy'])->name('deleteResult');


//add Contact

    Route::get('/manage-Contact',[AdminDashboardController::class,'manageContact'])->name('manageContact');
    Route::get('/edit-Contact/{id}',[AdminDashboardController::class,'editContact'])->name('Contact-edit');
    Route::post('/update-Contact/{id}',[AdminDashboardController::class,'updateContact'])->name('Contact-update');
    Route::post('/delete-Contact/{id}',[AdminDashboardController::class,'deleteContact'])->name('Contact-delete');


    //add Footer

    Route::get('/add-Footer',[AdminDashboardController::class,'addFooter'])->name('addFooter');
    Route::post('/store-footer',[AdminDashboardController::class,'storeFooter'])->name('storeFooter');
    Route::get('/manage-footer',[AdminDashboardController::class,'manageFooter'])->name('manageFooter');
    Route::get('/edit-footer/{id}',[AdminDashboardController::class,'editFooter'])->name('editFooter');
    Route::post('/update-footer/{id}',[AdminDashboardController::class,'updateFooter'])->name('updateFooter');
    Route::post('/delete-footer/{id}',[AdminDashboardController::class,'deleteFooter'])->name('deleteFooter');




});
