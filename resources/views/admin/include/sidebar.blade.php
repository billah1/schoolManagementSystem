<style>
    /* Add this style to your existing styles or create a new style block */
    ul#sidebarnav li:hover {
        background-color:greenyellow; /* Change the background color on hover */
        color:black; /* Change the text color on hover */
    }
</style>

    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" style="font-family: 'Times New Roman';">
                    <div style="margin: auto; text-align: center;">
                        <a class="waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false" style="color:#1d2025;">
                            <span class="hide-menu"><strong style="font-size:20px;">Dashboard</strong></span>
                        </a>
                    </div>

                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="*" aria-expanded="false" style="color: black">
                            <i class="ti-layout-grid2"></i><span class="hide-menu">Home Page</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">

                            <div style="background: #b1dfbb" >
                                <li><a href="{{route('addHeader')}}"  style="color: black">Add Header </a></li>
                                <li><a href="{{route('manageHeader')}}"  style="color: black">Manage Header </a></li>
                            </div>

                            <div style="background:#1ac6ce" >
                                <li><a href="{{route('addNoticeMarquee')}}"  style="color: black">Add Notice Headline  </a></li>
                                <li><a href="{{route('manageNoticeMarquee')}}"  style="color: black">Manage Notice Headline </a></li>
                            </div>

                            <div style="background:#9de0f6" >
                                <li><a href="{{route('addSlider')}}"  style="color: black">Add Slider </a></li>
                                <li><a href="{{route('manageSlider')}}"  style="color: black">Manage Slider </a></li>
                            </div>

                            <div style="background: #b1dfbb" >
                                <li><a href="{{route('addPrincipal')}}" style="color: black">Add Principal  </a></li>
                                <li><a href="{{route('managePrincipal')}}" style="color: black">Manage Principal </a></li>
                            </div>


                            <div style="background:honeydew" >
                                <li><a href="{{route('addWelcome')}}"  style="color: black">Add Welcome </a></li>
                                <li><a href="{{route('manageWelcome')}}"  style="color: black">Manage Welcome </a></li>
                            </div>


                            <div style="background:cornsilk" >
                                <li><a href="{{route('addFacility')}}" style="color: black">Add Facility  </a></li>
                                <li><a href="{{route('manageFacility')}}" style="color: black">Manage Facility </a></li>
                            </div>



                            <div style="background:ivory" >
                              <li><a href="{{route('addContactNumber')}}" style="color: black">Add All Contacts</a></li>
                              <li><a href="{{route('manageContactNumber')}}" style="color: black">Manage Contacts</a></li>
                          </div>


{{--                          <div style="background: #b1dfbb" >--}}
{{--                              <li><a href="{{route('addWelcome')}}" style="color: black">Add Welcome  </a></li>--}}
{{--                              <li><a href="{{route('manageWelcome')}}" style="color: black">Manage Welcome </a></li>--}}
{{--                          </div>--}}

                            <div style="background: #d1ecf1" >
                                <li><a href="{{route('addMap')}}" style="color: black">Add Google Map  </a></li>
                                <li><a href="{{route('manageMap')}}" style="color: black">Manage Google Map </a></li>
                            </div>


                            <div style="background:#bee5eb" >
                                <li><a href="{{route('addNewsEvent')}}"  style="color: black">Add News&Event </a></li>
                                <li><a href="{{route('manageNewsEvent')}}"  style="color: black">Manage News </a></li>
                            </div>

                            <div style="background: #d4edda" >
                                <li><a href="{{route('addAchievement')}}"  style="color: black">Add Achievement </a></li>
                                <li><a href="{{route('manageAchievement')}}"  style="color: black">Manage Achievement</a></li>
                            </div>

                           <div style="background:#b1dfbb" >
                               <li><a href="{{route('addGallery')}}"  style="color: black">Add Gallery </a></li>
                               <li><a href="{{route('manageGallery')}}"  style="color: black">Manage Gallery</a></li>
                           </div>

                            <div style="background:papayawhip" style="color: black">
                                <li><a href="{{route('addFooter')}}"  style="color: black">Add Footer </a></li>
                                <li><a href="{{route('manageFooter')}}"  style="color: black">Manage Footer</a></li>
                            </div>

                        </ul>
                    </li>


                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="*" aria-expanded="false"  style="color: black">
                            <i class="ti-layout-grid2"></i><span class="hide-menu">About us </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">

                            <div style="background: #1ac6ce">
                                <li><a href="{{route('addAbout')}}"  style="color: black">Add About </a></li>
                                <li><a href="{{route('manageAbout')}}"  style="color: black">Manage About</a></li>
                            </div>

                            <div style="background:#b1dfbb" >
                                <li><a href="{{route('addMissionVision')}}"  style="color: black">Add misison$Visiion </a></li>
                                <li><a href="{{route('manageMissionVision')}}"  style="color: black">Manage here</a></li>
                            </div>

                            <div style="background:lightgoldenrodyellow" >
                                <li><a href="{{route('addProfile')}}"  style="color: black">Add Profile </a></li>
                                <li><a href="{{route('manageProfile')}}"  style="color: black">Manage Profile</a></li>
                            </div>

                            <div style="background: #b1dfbb" >
                                <li><a href="{{route('addFounder')}}"  style="color: black">Add FounderBody </a></li>
                                <li><a href="{{route('manageFounder')}}"  style="color: black">Manage FounderBody</a></li>
                            </div>

                            <div style="background:#3fc3ee" >
                                <li><a href="{{route('addDonor')}}" style="color: black">Add Donor </a></li>
                                <li><a href="{{route('manageDonor')}}"  style="color: black">Manage</a></li>
                            </div>

                            <div style="background:lightgoldenrodyellow" >
                                <li><a href="{{route('addManagementBody')}}"  style="color: black">Add ManagementBody </a></li>
                                <li><a href="{{route('manageManagementBody')}}"  style="color: black">Manage</a></li>
                            </div>

                        </ul>
                    </li>



        <li>
            <a class="has-arrow waves-effect waves-dark" href="*" aria-expanded="false" style="color: black">
                <i class="ti-layout-grid2"></i><span class="hide-menu">Our History</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                <div style="background: #b1dfbb">
                    <li><a href="{{route('addHistory')}}"  style="color: black">Add History</a></li>
                    <li><a href="{{route('manageHistory')}}"  style="color: black">Manage History</a></li>
                </div>
            </ul>
        </li>


                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="*" aria-expanded="false" style="color: black">
                            <i class="ti-layout-grid2"></i><span class="hide-menu">Notice</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <div style="background: #b1dfbb">
                                <li><a href="{{route('addNoticeMain')}}"  style="color: black">Add Notice </a></li>
                                <li><a href="{{route('manageNoticeMain')}}"  style="color: black">Manage Notice</a></li>
                            </div>
                        </ul>
                    </li>



                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="*" aria-expanded="false" style="color: black">
                            <i class="ti-layout-grid2"></i><span class="hide-menu">Academics</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">

                            <div style="background:navajowhite" >
                                <li><a href="{{route('addTeacher')}}"  style="color: black">Add teachers </a></li>
                                <li><a href="{{route('manageTeacher')}}"  style="color: black">Manage teachers</a></li>
                            </div>

                            <div style="background:gainsboro">
{{--                                <li><a href="{{route('addExamDropdown')}}"   style="color: black"> </a></li>--}}
                                <li><a href="{{route('manageExamDropdown')}}"  style="color: black">Semester,section,Class</a></li>
                            </div>

                            <div style="background:#b1dfbb">
                                <li><a href="{{route('addExamResult')}}"   style="color: black">Add Results </a></li>
                                <li><a href="{{route('manageExamResult')}}"  style="color: black">Manage Results</a></li>
                            </div>

                        </ul>
                    </li>


                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="*" aria-expanded="false" style="color: black">
                            <i class="ti-layout-grid2"></i><span class="hide-menu">Our Contatct </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <div style="background: #b1dfbb">
                                <li><a href="{{route('manageContact')}}"  style="color: black">Manage Contact</a></li>
                            </div>
                        </ul>
                    </li>





                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->













