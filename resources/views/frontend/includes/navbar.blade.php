<section >
    <div class="container" style="text-align: center" >

        <div class="navigation sticky-top " style="background-color: whitesmoke" >
            {{--    //navber background--}}
            <div class="container" style="border-top: 1px solid black;border-bottom: 1px solid black;text-align: center">
                <div class="row" style="text-align: center;">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8" style="text-align: center">

                        <nav class="navbar navbar-expand-lg  ">
                            <button class="navbar-toggler active" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>


                            <div class="navbar-collapse sub-menu-bar collapse show" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto">

                                    <li class="nav-item">
                                        <a class="active" href="{{route('home')}}">Home</a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{route('aboutUs')}}">ABOUT US<button class="sub-nav-toggler"  > <i class="fa fa-caret-down" ></i> </button></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('missionAndvision')}}">MISSION AND VISION</a></li>
                                            <li><a href="{{route('profile')}}">PROFILE</a></li>
                                            <li><a href="{{route('founderBody')}}">FOUNDER BODY</a></li>
                                            <li><a href="{{route('ourDonor')}}">OUR DONOR</a></li>
                                            <li><a href="{{route('managementBody')}}">MANAGEMENT BODY</a></li>
                                        </ul>
                                    </li>



                                    <!-- Our History Menu -->
                                    <li class="nav-item">
                                        <a href="{{route('ourHistory')}}">OUR HISTORY</a>
                                    </li>


                                    <!-- Notice Menu -->
                                    <li class="nav-item">
                                        <a href="{{route('notice')}}">NOTICE</a>
                                    </li>

                                    <!-- Result Menu -->
                                    <li class="nav-item">
                                        <a href="{{route('teachers')}}">ACADEMICS<button class="sub-nav-toggler" > <i class="fa fa-caret-down" ></i> </button></a></a>
                                        <ul class="sub-menu">
                                            <li><a  href="{{route('exam-result-login')}}">EXAM RESULT</a></li>
                                            <li><a  href="https://eboardresults.com/v2/home">BOARD RESULT</a></li>
                                            <li><a  href="{{route('teachers')}}">TEACHERS</a></li>

                                        </ul>
                                    </li>

                                    <!-- Contact Menu -->
                                    <li class="nav-item">
                                        <a href="{{route('contact')}}">OUR CONTACT</a>
                                    </li>










                                </ul>
                            </div>

                        </nav> <!-- nav -->

                    </div>

                </div> <!-- row -->
            </div> <!-- container -->
        </div>


    </div>
</section>
