@extends('master')

@section('title')
   Achievement Details all Page
@endsection

@section('body')


    <section class="py-3 achievement" style="background-color: whitesmoke">
        <div class="container">
            <h3 class="text-center">ACHIEVEMENTS</h3>
            <hr style="color: #1d2025;border: 1px black solid;">
            <div class="row ">
                @foreach($achievements as $key => $achievement)
                    <div class="col-md-4 mt-4">
                        <div class="card mx-1 h-100">
                            @if($achievement->image)
                                <img src="{{ asset($achievement->image) }}" class="card-img-top" alt="achievement" height="250" width="250">
                            @else
                                <img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg" class="card-img-top" alt="Default_Image" height="250" width="250">
                            @endif
                            <div class="card-body">
                                <h6 class="card-title mb-2" style="word-spacing: 1px;">{{$achievement->title}}</h6>
                                <p  class="card-text mb-2" style="word-spacing: 1px">{{ substr($achievement->description, 0, 70) }}</p>
                                <a href="{{route('achievementDetails',['id'=>$achievement->id])}}" class="btn btn-primary" style="width: 100%">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>

    </section>


@endsection
