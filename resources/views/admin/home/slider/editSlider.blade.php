@extends('admin.master')

@section('title')
    Edit Slider page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit Slider & Title  </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{route('updateSlider',['id'=> $slider -> id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Slider Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$slider->title}}"  name="title"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Slider Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" rows="5" cols="10"  class="form-control">{{$slider->description}}</textarea>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add slider Image</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image" alt="sliderImage" class="form-control"/>
                                        <img src="{{asset($slider->image)}}" alt="" height="50" width="50">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update Slider" style="color: white"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
