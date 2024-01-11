@extends('admin.master')

@section('title')
Edit teacher  page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit Teachers </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{route('updateTeacher',['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$teacher->name}}"  name="name"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$teacher->designation}}"  name="designation"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Subject</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$teacher->subject}}"  name="subject"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="gender" class="col-md-3">Add Gender</label>
                                    <div class="col-md-9">
                                        <select class="form-control" value="{{$teacher->gender}}" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="{{$teacher->email}}" name="email"/>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="{{$teacher->mobile}}"  name="mobile"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Edit Education</label>
                                    <div class="col-md-9">
                                        <textarea  class="form-control" rows="5" cols="10"  name="education">{{$teacher->education}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Description</label>
                                    <div class="col-md-9">
                                        <textarea  class="form-control" rows="5" cols="10"  name="description">{{$teacher->description}}</textarea>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add Image</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image"  {{$teacher->image}} alt="Image" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update Teachers" style="color: white"/>
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
