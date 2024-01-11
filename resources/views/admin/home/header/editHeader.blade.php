@extends('admin.master')

@section('title')
   Edit header page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit Header</div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{route('updateHeader',['id'=>$header->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add School (B) </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$header->nameB}}"  name="nameB"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add School (E) </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  value="{{$header->nameE}}"  name="nameE"/>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Established </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$header->established}}" name="established"/>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Logo Image</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image" alt="logo" class="form-control"/>
                                        <img src="{{asset($header->image)}}" alt="" height="50" width="50">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update Header" style="color: white"/>
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
