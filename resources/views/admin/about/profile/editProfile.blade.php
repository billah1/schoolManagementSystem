@extends('admin.master')

@section('title')
Edit profile  page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit Your Profile   </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{route('updateProfile',['id'=>$profile->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Edit Title bar</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$profile->title}}" name="title"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Edit image bar</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" value="{{$profile->image}}"  name="image"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Edit School Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$profile->schoolName}}" name="schoolName"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Name Of The Principal</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$profile->principle}}"  name="principle"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$profile->address}}" name="address"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$profile->mobile}}"  name="mobile"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Fax Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$profile->fax}}"  name="fax"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="{{$profile->email}}"  name="email"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Web address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$profile->webAddress}}"  name="webAddress"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Probable Admission date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" value="{{$profile->admissionDate}}"  name="admissionDate"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Established:</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" value="{{$profile->established}}" name="established"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">EIIN</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="{{$profile->eiin}}" name="eiin"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update Profile " style="color: white"/>
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
