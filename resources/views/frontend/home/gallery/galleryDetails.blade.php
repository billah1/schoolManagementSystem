@extends('master')

@section('title')

    Gallery   Details
@endsection

@section('body')

    <section class="py-3 gallery" style="background-color: whitesmoke">
        <div class="container">
            <h3 class="text-center">OUR GALLERY</h3>
            <hr style="color: #1d2025;border: 1px black solid;" >
            <div class="row mt-4">

                @foreach($galleries as $key => $gallery)
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-5">
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

                @endforeach

            </div>



        </div>
    </section>


@endsection
