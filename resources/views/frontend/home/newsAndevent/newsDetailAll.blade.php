@extends('master')

@section('title')
    News Details all Page
@endsection

@section('body')


    <section class="py-3 newsevent" style="background-color: whitesmoke">
    <div class="container">
        <h3 class="text-center">News & Events</h3>
        <hr style="color: #1d2025;border: 1px black solid;">
        <div class="row">
            @foreach($news_events as $key=>$news_event)
            <div class="col-md-4">
                <div class="card mb-5" style="height: 500px; overflow: hidden; border: 1px solid #ddd;">
                    <div class="card-header">
                        @if($news_event->image)
                            <img src="{{asset($news_event->image)}}" class="card-img-top" alt="Card Image" height="270">
                        @else
                            <img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg" class="card-img-top" alt="Default Image" height="270">
                        @endif
                    </div>

                    <div class="card-body" style="height: 310px; ">
                        <h6 class="card-title mb-2" style="word-spacing: 1px;">{{ $news_event->title }}</h6>
                        <p class="card-text mb-3" style="text-align: left; margin: 0;  text-overflow: ellipsis;">
                        <p class="card-text" style="height: 80px; overflow: hidden;">{{ substr($news_event->description, 0, 80) }}{{ strlen($news_event->description) > 80 ? '...' : '' }}</p>
                        </p>
                        <a href="{{route('newsDetails',['id'=>$news_event->id])}}" class="btn btn-primary" style="margin-top: 2px; margin-bottom: 2px; width: 100%;">Details</a>

                    </div>
                </div>
            </div>
            @endforeach


        </div>



        <hr style="color: #1d2025;border: 1px black solid;">
    </div>
</section>

@endsection

