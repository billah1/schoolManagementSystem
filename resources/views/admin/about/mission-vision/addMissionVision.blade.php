@extends('admin.master')

@section('title')
    Add Mission and Vision page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add You mission and vision  </div>
                        <div class="card-body">


                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>

                            <form action="{{route('storeMissionVision')}}" method="POST" enctype="multipart/form-data">
                                @csrf



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Title bar</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="title1"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Describe Mission</label>
                                    <div class="col-md-9">
                                        <textarea name="description1"  class="form-control" cols="30" rows="10"></textarea>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Title bar</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="title2"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Describe Vision</label>
                                    <div class="col-md-9">
                                        <textarea name="description2"  class="form-control" cols="30" rows="10"></textarea>
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
