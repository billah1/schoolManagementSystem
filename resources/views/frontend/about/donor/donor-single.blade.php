@extends('master')

@section('title')

   Donor single  Details
@endsection

@section('body')

    <section class="py-5" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h1 style="font-family: 'Times New Roman'">{{$donor->title}}</h1>
                        <img src="{{asset($donor->image)}}" class="card-img-top my-4 mx-auto" alt="..." style="height: 300px; width: 300px; display: block;" />
                        <hr>
                        <p class="card-text text-justify" style="font-family: 'Times New Roman'">{{$donor->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
