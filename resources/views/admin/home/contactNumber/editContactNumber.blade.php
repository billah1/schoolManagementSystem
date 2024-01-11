@extends('admin.master')

@section('title')
    Edit All contact page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit All contact in Your Community </div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{route('updateContactNumber',['id'=>$contact_number->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Edit School Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="schoolName" value="{{$contact_number->schoolName}}"  class="form-control"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Add a Name </label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" value="{{$contact_number->name}}"  class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">edit a Titile </label>
                                    <div class="col-md-9">
                                        <input type="text" name="title" value="{{$contact_number->title}}"  class="form-control"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">edit a Department</label>
                                    <div class="col-md-9">
                                        <input type="text" name="department" value="{{$contact_number->department}}"   class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">edit a Contact</label>
                                    <div class="col-md-9">
                                        <input type="text" name="contact" value="{{$contact_number->contact}}"   class="form-control"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">edit a Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" name="designation" value="{{$contact_number->designation}}"   class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">edit a Joining Date</label>
                                    <div class="col-md-9">
                                        <input type="date" name="date" value="{{$contact_number->date}}"   class="form-control"/>
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
