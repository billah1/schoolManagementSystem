@extends('admin.master')

@section('title')
    Add All contact page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add All contact in Your Community </div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{route('storeContactNumber')}}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Add School Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="schoolName"   class="form-control"/>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Titile For Contact all </label>
                                    <div class="col-md-9">
                                        <input type="text" name="title"   class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Add a Name </label>
                                    <div class="col-md-9">
                                        <input type="text" name="name"   class="form-control"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Add a Department</label>
                                    <div class="col-md-9">
                                        <input type="text" name="department"   class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Add a Contact</label>
                                    <div class="col-md-9">
                                        <input type="text" name="contact"   class="form-control"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Add a Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" name="designation"   class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Add a Joining Date</label>
                                    <div class="col-md-9">
                                        <input type="date" name="date"   class="form-control"/>
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
