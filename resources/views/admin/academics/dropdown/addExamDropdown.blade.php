@extends('admin.master')

@section('title')
    Add Dropdown  page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Dropdown </div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{route('storeExamDropdown')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  Class</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="class"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  semester</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"   name="semester"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  section</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"   name="section"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  Year</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control"   name="date"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Create " style="color: white"/>
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
