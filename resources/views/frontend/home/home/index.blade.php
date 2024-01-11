@extends('master')

@section('title')
    Home Page
@endsection

@section('body')
    <style>
        #googleMapModal {

            align-items: center;
            justify-content: center;
            margin-top: 10vh;
        }

        .modal-dialog {
            max-width: 50%;
        }
    </style>
    {{-- Marquee Section --}}
    <section >
        <div class="container">
            <div class="marquee-container" style="justify-content: center; background-color: #E3FAF9; line-height: 1 !important; border:1px solid transparent; overflow: hidden;">
                <!-- Marquee Header -->
                <div class="col-md-auto" style="background-color: #E3FAF9; text-align: center; padding: 5px;">
                    <h4 class="notice" style="padding-left: 2em;"> Notice: </h4>
                </div>

                <!-- Marquee Content -->
                <div class="marquee-wrapper" style="width: 100%; overflow-x: auto; white-space: nowrap;">
                    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();" style="width: 100%;">
                        @foreach($noticeHeadlines as $index => $noticeHeadline)
                            <span class="marquee-item mt-1" style="color: black; font-size: 16px;">
                                <b>★★★&nbsp;{{ $noticeHeadline->notice }}&nbsp;★★★&nbsp;</b>
                            </span>
                            @if ($index < count($noticeHeadlines) - 1)
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>
    </section>

    {{-- Slider Section --}}
    <section style="height: 500px;">
        <div class="container d-flex justify-content-center align-items-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000" style="height: 100%; width: 100%;">
                <!-- Slider Indicators -->
                <ol class="carousel-indicators">
                    @foreach($sliders as $key => $slider)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <!-- Slider Items -->
                <div class="carousel-inner" style="height: 500px;">
                    @foreach($sliders as $key => $slider)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" style="height: 100%;">
                            @if($slider->image)
                                <img src="{{ asset($slider->image) }}" alt="" class="img-fluid" style="height: 100%; width: 100%;">
                            @else
                                <img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg" class="card-img-top" alt="Default Image" height="250">
                        @endif

                        <!-- Slider Caption -->
                            <div class="carousel-caption mx-auto text-left" style="padding: 10px; top: 40%; background-color: rgba(0,0,0,0.5); border-radius: 15px; max-height: 200px; overflow: auto;">
                                <h4 style="color: white; margin: 0 20px;" class="mb-2">{{ $slider->title }}</h4>
                                <p style="color: white; margin: 0 20px; text-align: justify;">{{ $slider->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Slider Controls -->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    {{-- Principal Section --}}
    <section style="padding: 50px 0;">
        <div class="container">
            @foreach($principals as $principal)
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="text-align: center; margin-bottom:3px; font-family: 'Arial', sans-serif">{{$principal->title}}</h1>
                        <div class="mt-5">
                            <img src="{{asset($principal->image)}}" class="pull-left" alt="Principal Image" style="margin-bottom:3px; border: 1px solid black; padding: 2px; border-radius: 5px; margin-right:10px; height:210px; width:222px;">

                            <p style="text-align: justify; font-size: 14px; margin-top: 5px;">{{$principal->description}}</p>

                            <br>
                            <cite style="margin-top: 2px">
                                <p class="mt-1"><strong>{{$principal->name}}</strong><br></p>
                                <p class="mt-1"><strong>{{$principal->designation}}</strong><br></p>
                                <p class="mt-1"><strong>{{$principal->schoolName}}</strong></p>
                            </cite>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Additional Talk Section --}}
    <section style=" display: flex; justify-content: center; align-items: center; min-height: 150px; text-align: center;">
        <div class="container" >
            <hr class="my-4">
            <div id="rs-about" class="rs-about sec-spacer sec-color" style="padding: 50px 0;">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="accordion" class="rs-accordion-style1" style="margin-top: 30px;">
                            <!-- Welcome Section -->
                            <section class="col-lg-12 col-md-12">
                                @foreach($welcomes as $welcome)
                                    <div class="about-desc text-center">
                                        <h3 style="font-size: 30px; font-weight: 700; color: #333; margin-bottom: 20px; text-align: justify">{{$welcome->title}}</h3>
                                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 20px; text-align: justify">
                                            {{$welcome->description}}
                                        </p>
                                    </div>
                                @endforeach
                            </section>

                            <div class=" container  mt-5">
                                <div class="row">
                                    <!-- Facilities Section -->
                                    <div class="col-12 col-md-12">
                                        <section>
                                            <div style="border: none;">
                                                <div class="card-header mb-0" id="headingTwo" style="background-color: lightskyblue; border-bottom: 1px solid #eee; cursor: pointer; width: 100%;">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family: 'Arial', sans-serif">We have provided the facility.&nbsp;<sub style="font-size:18px;font-family: 'Times New Roman'">Click here </sub></h3>
                                                </div>

                                                <div id="collapseTwo" class="collapse col-md-12" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    @if(count($facilities) > 0)
                                                        @foreach($facilities as $facility)
                                                            <div class="card-body" style="padding: 20px; font-size: 16px; color: #666;background-color: #d1ecf1">
                                                                <h4 class="mb-2" style="font-family: 'Times New Roman'">{{$facility->title}}</h4>
                                                                <h6 style="text-align: justify; list-style-type: none; padding-left: 0; font-size: 20px; font-family:'Times New Roman'">
                                                                    <pre style="line-height: 1.5;font-family: 'Times New Roman'">{{$facility->description}}</pre>
                                                                </h6>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="card-body" style="padding: 20px; font-size: 16px; color: #666;background-color: #d1ecf1">
                                                            <p>No facilities available.</p>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <!-- All Contacts Section -->
                                    <div class="col-12 col-md-12">
                                        <section>
                                            <div style="border: none;">
                                                <div class="card-header mb-0" id="headingOne" style="background-color: lightskyblue; border-bottom: 1px solid #eee; cursor: pointer; width: 100%;">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseOne" aria-controls="collapseOne" style="font-family: 'Arial', sans-serif">
                                                        Every contact within our community.&nbsp;<sub style="font-size:18px;font-family: 'Times New Roman'">Click here </sub>
                                                    </h3>
                                                </div>

                                                <div id="collapseOne" class="collapse col-md-12" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <section id="features">
                                                            <div class="row">
                                                                @php $titleAndSchoolDisplayed = false; @endphp
                                                                <div class="col-sm-12 wow fadeInLeft" style="background: #fff;">
                                                                    <div style="width:100%; text-align:center; background:#00bfa5;">
                                                                        @if (!empty($contact_numbers) && isset($contact_numbers[0]))
                                                                            <h3 style="color:black;font-family: 'Arial', sans-serif;margin-top: 2px;margin-bottom: 2px">{{$contact_numbers[0]->schoolName}}</h3>
                                                                            <h3 style="color:black;font-family: 'Arial', sans-serif;margin-top: 2px;margin-bottom: 2px">{{$contact_numbers[0]->title}}</h3>
                                                                            @php $titleAndSchoolDisplayed = true; @endphp
                                                                        @endif
                                                                    </div>
                                                                    <div style="overflow-x:auto;">
                                                                        <div style="width:100%">
                                                                            <table style="width:100%" class="table table-bordered table-hover mytablecon" border="1" cellspacing="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th>Serial Number</th>
                                                                                    <th>Name</th>
                                                                                    <th>Department</th>
                                                                                    <th>Contact</th>
                                                                                    <th>Designation</th>
                                                                                    <th>Joining Date</th>
                                                                                </tr>
                                                                                @foreach($contact_numbers as $contact_number)
                                                                                    <tr>
                                                                                        <td>{{$loop->iteration}}</td>
                                                                                        <td>{{$contact_number->name}}</td>
                                                                                        <td>{{$contact_number->department}}</td>
                                                                                        <td>{{$contact_number->contact}}</td>
                                                                                        <td>{{$contact_number->designation}}</td>
                                                                                        <td>{{$contact_number->date}}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <!-- Map Section -->
                                    <div class="col-12 col-md-12">
                                        <section>
                                            <div style="border: none;">
                                                <div class="card-header mb-0" id="headingThree" style="background-color: lightskyblue; border-bottom: 1px solid #eee; cursor: pointer; width: 100%;">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseThree" aria-controls="collapseThree" style="font-family: 'Times New Roman'">
                                                        Our Location&nbsp;<sub style="font-size:18px;font-family: 'Times New Roman'">Click here </sub>
                                                    </h3>
                                                </div>

                                                <div id="collapseThree" class="collapse col-md-12" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body wow fadeInLeft" style="padding: 20px; font-size: 16px; color: #666; background-color: #d1ecf1">
                                                        <section id="features">
                                                            @foreach($maps as $map)
                                                                <h1 class="mt-2 ml-3 mb-2">{{$map->title}}</h1>
                                                                <div class="">
                                                                    <div id="googleMap" class="embed-responsive embed-responsive-16by9">
                                                                        <iframe class="embed-responsive-item" src="{{asset($map->link)}}"  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
        </div>
    </section>




    {{-- News and Event Section --}}
    <section class="py-3">
        <div class="container">
            <h3 class="text-center">RECENT AND UPCOMING EVENTS</h3>
            <hr style="color: #1d2025; border: 1px black solid;">

            @if(count($news_events) > 0)
                <div class="row">
                    @php $count = 0 @endphp
                    @foreach($news_events as $key => $news_event)
                        @if($count < 3)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100" style="border: 1px solid #ddd;">

                                    <div class="card-header">
                                        @if($news_event->image)
                                            <img src="{{asset($news_event->image)}}" class="card-img-top" alt="Card Image" height="270" style="border-radius: 5%;">
                                        @else
                                            <img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg" class="card-img-top" alt="Default Image" height="270" style="border-radius: 5%;">
                                        @endif
                                    </div>



                                    <div class="card-body">
                                        <h6 class="card-title mb-2" style="word-spacing: 1px;">{{ $news_event->title }}</h6>
                                        <p class="card-text mb-3" style="text-align: left; margin: 0;  text-overflow: ellipsis;">
                                            {{ Illuminate\Support\Str::limit($news_event->description, 75) }}
                                        </p>
                                        <a href="{{route('newsDetails',['id'=>$news_event->id])}}" class="btn btn-primary" style="width: 100%">Details</a>
                                    </div>
                                </div>
                            </div>
                            @php $count++ @endphp
                        @else
                            @break
                        @endif
                    @endforeach
                </div>

                @if(count($news_events) > 3)
                    <hr style="color: #1d2025; border: 1px black solid;">
                    <div class="ml-md-0 mt-2 text-left">
                        <a href="{{ route('newsDetailAll') }}" type="button" class="btn btn-info">VIEW MORE →</a>
                    </div>
                @endif

            @else
                <p class="text-center">No pictures available in the news event.</p>
            @endif

            <hr class="my-4">
        </div>
    </section>

    {{-- Achievements Section --}}
    <section class="py-3" >
        <div class="container">
            <h3 class="text-center">ACHIEVEMENTS</h3>
            <hr style="color: #1d2025; border: 1px black solid;">

            @if(count($achievements) > 0)
                <div class="row">
                    @foreach($achievements as $key => $achievement)
                        <div class="col-md-4 mb-4">
                            <div class="card mx-1 h-100">
                                @if($achievement->image)
                                    <img src="{{ asset($achievement->image) }}" class="card-img-top" alt="achievement" height="250" width="250">
                                @else
                                    <img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg" class="card-img-top" alt="Default_Image" height="250" width="250">
                                @endif
                                <div class="card-body">
                                    <h6 class="card-title mb-2" style="word-spacing: 1px;">{{$achievement->title}}</h6>
                                    <p class="card-text mb-2" style="word-spacing: 1px">{{ substr($achievement->description, 0, 70) }}</p>
                                    <a href="{{route('achievementDetails',['id'=>$achievement->id])}}" class="btn btn-primary" style="width: 100%">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">No pictures available in the achievements section.</p>
            @endif

            <hr style="color: #1d2025; border: 1px black solid;">
            <div class="ml-md-0 mt-2 text-left">
                <a href="{{route('achievementDetailAll')}}" type="button" class="btn btn-info">VIEW MORE →</a>
            </div>

            <hr class="my-4">
        </div>
    </section>


    {{-- Gallery Section --}}
    <section class="py-3" >
        <div class="container">
            <h3 class="text-center">GALLERY</h3>
            <hr style="color: #1d2025; border: 1px black solid;">

            @if(count($galleries) > 0)
                <div class="row">
                    @php $count = 0 @endphp
                    @foreach($galleries as $key => $gallery)
                        @if($count < 3)
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">

                                <div class="card" style="position: relative;">
                                    @if($gallery->image)
                                        <img src="{{ asset($gallery->image) }}" alt="Gallery_Image" class="card-img-top mb-2" style="height: 350px; object-fit: cover; padding: 30px; border-style: solid; border-width: 15px; border-top-color: lighten(#000, 20%); border-right-color: lighten(#000, 0%); border-bottom-color: lighten(#000, 20%); border-left-color: lighten(#000, 0%); box-shadow: 2px 2px 4px rgba(0,0,0,.6);">

                                        <div class="card-body mb-3 mt-3 text-center" style="position: absolute; bottom: 0; left: 0; width: 100%; background-color: rgba(255, 255, 255, 0.7); padding: 10px; margin-top: 3px !important;">
                                           <p>{{ $gallery->title }}</p>
                                        </div>

                                    @else
                                        <img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg') }}" alt="Default_Image" class="card-img-top mb-2" style="height: 350px; object-fit: cover; padding: 30px; border-style: solid; border-width: 15px; border-top-color: lighten(#000, 20%); border-right-color: lighten(#000, 0%); border-bottom-color: lighten(#000, 20%); border-left-color: lighten(#000, 0%); box-shadow: 2px 2px 4px rgba(0,0,0,.6);">

                                        <div class="card-body mb-3 mt-3 text-center" style="position: absolute; bottom: 0; left: 0; width: 100%; background-color: rgba(255, 255, 255, 0.7); padding: 10px; margin-top: 3px !important;">
                                            <p>{{ $gallery->title }}</p>
                                        </div>

                                    @endif
                                </div>



                            </div>

                            @php $count++ @endphp
                        @else
                            @break
                        @endif
                    @endforeach
                </div>

                @if(count($galleries) > 3)
                    <hr style="color: #1d2025; border: 1px black solid;">
                    <div class="ml-md-0 mt-2 text-left">
                        <a href="{{ route('galleryDetails') }}" type="button" class="btn btn-info">VIEW MORE →</a>
                    </div>
                @endif
            @else
                <p class="text-center">No pictures available in the gallery.</p>
            @endif

            <hr class="my-4">
        </div>
    </section>



@endsection

