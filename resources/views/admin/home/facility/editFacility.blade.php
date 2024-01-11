@extends('admin.master')

@section('title')
    Edit Facility  page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit Facility</div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{route('updateFacility',['id'=>$facility->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Welcome Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$facility->title}}"  name="title"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">add Facility</label>
                                    <div class="col-md-9">
                                        <textarea  class="form-control" cols="5" rows="10"  name="description">{{$facility->description}}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Create Facility" style="color: white"/>
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
