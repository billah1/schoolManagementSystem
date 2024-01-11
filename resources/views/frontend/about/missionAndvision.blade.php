@extends('master')

@section('title')
    Mission and Vision
@endsection

@section('body')


<section  class="py-1">
    <div class="container mb-5 mt-3">
        @foreach($mission_visions as $mission_vision)
            <div>
                <h1 style="text-align:left;font-family: 'Times New Roman'" class="mb-2 mt-5">{{$mission_vision->title1}}</h1>
                <hr style="border: 1px black solid;width:auto;text-align:left;margin-left:0">
                <p style="text-align: justify;height: auto" class="mb-5">{{$mission_vision->description1}}</p>
            </div>
            <div>
                <h1 style="text-align:left;font-family: 'Times New Roman'" class="mb-2 mt-5">{{$mission_vision->title2}}</h1>
                <hr style="border: 1px black solid;width:auto;text-align:left;margin-left:0">
                <p style="text-align: justify;height: auto">{{$mission_vision->description2}}</p>
            </div>
        @endforeach
    </div>


</section>


@endsection

