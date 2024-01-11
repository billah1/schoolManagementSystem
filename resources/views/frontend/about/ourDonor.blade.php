@extends('master')

@section('title')
    Donor Page
@endsection

@section('body')



    <section class="py-3 "  >
        <div class="container">
            <h3 class="text-center" >OUR DONOR </h3>
            <hr style="color: #1d2025;border: 1px black solid;">
            <div class="row">
                @foreach($donors as $key => $donor)
                    <div class="col-md-4 mx-auto">

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
                                    {{ Illuminate\Support\Str::limit($donor->description, 75) }}
                                </p>
                                <a href="{{route('donor-single',['id'=>$donor->id])}}" class="btn btn-primary" style="width: 100%">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr style="color: #1d2025;border: 1px black solid;">
            <div class="ml-md-0 mt-2 text-left">
                <a  href="{{route('donor-all')}}" type="button" class="btn btn-info">VIEW MORE →</a>
            </div>
            <hr class="my-4">
        </div>
    </section>



@endsection

