@extends('admin.master')

@section('title')
    Add teacher  page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Teachers </div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{route('storeTeacher')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="name"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="designation"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Subject</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="subject"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="gender" class="col-md-3">Add Gender</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control"  name="email"/>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control"  name="mobile"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Education</label>
                                    <div class="col-md-9">
                                        <textarea  class="form-control" rows="5" cols="10"  name="education"></textarea>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Description</label>
                                    <div class="col-md-9">
                                        <textarea  class="form-control" rows="5" cols="10"  name="description"></textarea>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add Image</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image" alt="Image" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Create Teachers" style="color: white"/>
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
