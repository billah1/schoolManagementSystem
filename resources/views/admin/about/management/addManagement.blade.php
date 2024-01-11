@extends('admin.master')

@section('title')
    Add management body page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Management Body  </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>

                            <form action="{{route('storeManagementBody')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="title"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="name"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="designation"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Father</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="father"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Mother</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="mother"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control"  name="dob"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Add Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control"  name="email"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Add joining Date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control"  name="joining_date"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Education</label>
                                    <div class="col-md-9">
                                        <textarea  class="form-control" cols="10" rows="5"  name="education"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Service Life</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" cols="10" rows="5"  name="serviceLife"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Social Activities</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" cols="10" rows="5" name="socialActivities"></textarea>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add  Image</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image" alt="Image" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Create" style="color: white"/>
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
