@extends('admin.master')

@section('title')
    Add profile  page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Your Profile   </div>
                        <div class="card-body">

                            <form action="{{route('storeProfile')}}" method="POST" enctype="multipart/form-data">
                                <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                                @csrf


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Title bar</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="title"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add image bar</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control"  name="image"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Add School Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="schoolName"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Name Of The Principal</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="principle"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="address"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="mobile"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Fax Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="fax"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control"  name="email"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Web address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="webAddress"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Probable Admission date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control"  name="admissionDate"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Established:</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control"  name="established"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">EIIN</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control"  name="eiin"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Create Profile " style="color: white"/>
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
