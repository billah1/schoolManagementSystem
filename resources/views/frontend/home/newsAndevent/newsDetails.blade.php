@extends('master')

@section('title')

    News & events Details
@endsection

@section('body')
    <section class="py-1" style="background-color: whitesmoke">
        <div class="container mt-5 mb-5">
            <div class="card card-body">
                <h1 style="font-family: 'Times New Roman'">{{$news_event->title}}</h1>
                <img src="{{asset($news_event->image)}}" class="card-img-top my-4 mx-auto" alt="{{$news_event->title}}" style="height: 250px; width: 250px; display: block;" />
                <hr>
                <p class="card-text text-justify" style="font-family: 'Times New Roman'">{{$news_event->description}}</p>
            </div>
        </div>
    </section>



@endsection
