@extends('admin.master')

@section('title')
     edit Founder body page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit  Founder  </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{route('updateFounder',['id'=>$founder->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$founder->title}}"  name="title"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$founder->name}}" name="name"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description"   class="form-control">{{$founder->description}}</textarea>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add  Image</label>
                                    <div class="col-md-9">
                                        <input type="file" value="{{$founder->image}}" name="image" alt="Image" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update  Founder" style="color: white"/>
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
