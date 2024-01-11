<section style="background-color: #b0e0e9">
    <div class="container">
        <!--====== FOOTER PART START ======-->
        <footer>
            <div class="footer-top pt-4 pb-4">
                <div class="container">
                    @foreach($footers as $footer)
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="footer-about mt-3">

                                    <div class="logo align-items-center" style="text-align: center">
                                        @if($footer->image)
                                            <a href="{{route('home')}}"><img src="{{asset($footer->image)}}" alt="Logo" style="text-align: center; max-width: 100px;max-height: 100px"></a>
                                        @else
                                            <a href="{{route('home')}}"><img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg" alt="Default_Logo" style="text-align: center; max-width: 100px;"></a>
                                        @endif
                                    </div>


                                    <p style="text-align: justify;">
                                        @php
                                            $wordCount = str_word_count($footer->description);
                                            $limitedDescription = $wordCount <= 30 ? $footer->description : implode(' ', array_slice(str_word_count($footer->description, 1), 0, 30));
                                            echo $limitedDescription;
                                        @endphp
                                    </p>

                                    <ul class="mt-2 list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> <!-- footer about -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-link mt-5">
                                    <div class="footer-title pb-2">
                                        <h6>Sitemap</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a href="{{route('home')}}"><i class="fa fa-angle-right"></i>HOME</a></li>
                                        <li><a href="{{route('aboutUs')}}"><i class="fa fa-angle-right"></i>ABOUT US </a></li>
                                        <li><a href="{{route('ourHistory')}}"><i class="fa fa-angle-right"></i>OUR HISTORY </a></li>
                                        <li><a href="{{route('notice')}}"><i class="fa fa-angle-right"></i>NOTICE </a></li>
                                        <li><a href="{{route('exam-result-login')}}"><i class="fa fa-angle-right"></i>ACADEMICS </a></li>
                                        <li><a href="{{route('contact')}}"><i class="fa fa-angle-right"></i>OUR CONTACT </a></li>
                                    </ul>
                                </div> <!-- footer link -->
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-link support mt-5">
                                    <div class="footer-title pb-2">
                                        <h6>Support</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                    </ul>
                                </div> <!-- support -->
                            </div>


                            <div class="col-lg-2 col-md-6">
                                <div class="footer-address mt-5 ">
                                    <div class="footer-title pb-2">
                                        <h6>Contact Us</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="icon ">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="cont" style="width:200px; ">
                                                <p >
                                                    {{$footer->address}}
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="cont">
                                                <p style="white-space: nowrap;">{{$footer->mobile}}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="cont">
                                                <p>{{$footer->email}}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- footer address -->
                            </div>

                        </div> <!-- row -->
                @endforeach
                <!-- Copyright Section -->
                    <div class="mt-10" style="text-align: center" >
                        <p id="copyright" style="color:black"></p>
                    </div>
                </div> <!-- container -->
            </div> <!-- footer top -->
        </footer>
        <!--====== FOOTER PART ENDS ======-->


    </div>
</section>
<!--====== BACK TO TP PART START ======-->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<!--====== BACK TO TP PART ENDS ======-->
