@extends('master')

@section('title')
    Donor all   Details
@endsection

@section('body')


    <section class="py-3 " >
        <div class="container">
            <h3 class="text-center">Our Donor</h3>
            <hr style="color: #1d2025;border: 1px black solid;">
            <div class="row">
                @foreach($donors as $key => $donor)
                    <div class="col-md-4">
                        <div class="card" style="height: 500px; overflow: hidden; border: 1px solid #ddd;">
                            <div class="card-header">
                                @if($donor->image)
                                    <img src="{{asset($donor->image)}}" class="card-img-top" alt="Card Image" height="270">
                                @else
                                    <img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg" class="card-img-top" alt="Default Image" height="270">
                                @endif
                            </div>

                            <div class="card-body" style="height: 310px; ">
                                <h6 class="card-title mb-2" style="word-spacing: 1px;">{{ $donor->title }}</h6>
                                <p class="card-text mb-3" style="text-align: left; margin: 0;  text-overflow: ellipsis;">
                                <p class="card-text" style="height: 80px; overflow: hidden;">{{ substr($donor->description, 0, 80) }}{{ strlen($donor->description) > 80 ? '...' : '' }}</p>
                                </p>
                                <a href="{{route('donor-single',['id'=>$donor->id])}}" class="btn btn-primary" style="margin-top: 2px; margin-bottom: 2px; width: 100%;">Details</a>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>



            <hr style="color: #1d2025;border: 1px black solid;">
        </div>
    </section>

@endsection

