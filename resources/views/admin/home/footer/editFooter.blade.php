@extends('admin.master')

@section('title')
    Update Footer   page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Update Footer</div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{route('updateFooter',['id'=> $footer -> id])}}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" rows="5" cols="10"   class="form-control" placeholder="Add description atmost 30 words ">{{$footer->description}}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="slider-address" class="col-md-3">Add Address</label>
                                    <div class="col-md-9">
                                        <textarea name="address"   class="form-control">{{$footer->address}}</textarea>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Mobile </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$footer->mobile}}"  name="mobile"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="{{$footer->email}}"  name="email"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add Logo</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image" alt="Image" class="form-control"/>
                                        <img src="{{asset($footer->image)}}" alt="" height="50" width="50">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update Footer " style="color: white"/>
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
