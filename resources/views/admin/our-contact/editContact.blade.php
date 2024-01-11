@extends('admin.master')

@section('title')
   Sec contact   page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">See all Contact  </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{route('Contact-update',['id'=>$contact->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Name </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$contact->name}}"  name="name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Email </label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="{{$contact->email}}"  name="email"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Subject </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$contact->subject}}"  name="subject"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Number </label>
                                    <div class="col-md-9">
                                        <input type="tel" class="form-control" value="{{$contact->contact}}" name="contact"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider-description" class="col-md-3">Message</label>
                                    <div class="col-md-9">
                                        <textarea name="message"   class="form-control">{{$contact->message}}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update " style="color: white"/>
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
