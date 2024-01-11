@extends('admin.master')

@section('title')
  Update news and event  page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Update News and events  </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{route('updateNewsEvent',['id'=>$news_event->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$news_event->title}}"  name="title"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description"   class="form-control">{{$news_event->description}}</textarea>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add Image</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image" alt="Image" class="form-control"/>
                                        <img src="{{asset($news_event->image)}}" alt="" height="60" width="60">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update news events " style="color: white"/>
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
