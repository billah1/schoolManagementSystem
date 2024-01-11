@extends('admin.master')

@section('title')
    Edit Principal page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit principal</div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{route('updatePrincipal',['id'=>$principal->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Title bar</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$principal->title}}"  name="title"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description"   class="form-control">{{$principal->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Name and Tag </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$principal->name}}"  name="name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$principal->designation}}" name="designation"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add School name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$principal->schoolName}}"  name="schoolName"/>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add  Image</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image" alt="Image" value="{{$principal->image}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update Principal" style="color: white"/>
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
