@extends('admin.master')

@section('title')
   Update management body page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Update Management Body  </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>

                            <form action="{{route('updateManagementBody',['id'=>$management_body->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Edit Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$management_body->title}}" name="title"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Edit Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$management_body->name}}"  name="name"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$management_body->designation}}" name="designation"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit Father</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$management_body->father}}"  name="father"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit Mother</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$management_body->mother}}"  name="mother"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" value="{{$management_body->dob}}"  name="dob"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="{{$management_body->email}}"  name="email"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit joining_date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" value="{{$management_body->joining_date}}"  name="joining_date"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit Education</label>
                                    <div class="col-md-9">
                                        <textarea  class="form-control" rows="5" cols="10"  name="education">{{$management_body->education}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit Service Life</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="5" cols="10"  name="serviceLife">{{$management_body->serviceLife}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit Social Activities</label>
                                    <div class="col-md-9">
                                        <textarea  class="form-control" rows="5" cols="10"  name="socialActivities">{{$management_body->socialActivities}}</textarea>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Edit  Image</label>
                                    <div class="col-md-9">
                                        <input type="file" value="{{$management_body->image}}" name="image" alt="Image" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update" style="color: white"/>
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
