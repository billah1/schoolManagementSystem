@extends('admin.master')

@section('title')
    Update Notice  page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Update Notice </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{ route('updateNoticeMain', ['id' => $notice->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf


                                <div class="row mb-3">
                                    <label for="pdf" class="col-md-3">Add Date </label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control"  value="{{$notice->date}}"  name="date"  />
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="pdf" class="col-md-3">Add Title </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$notice->title}}" name="title"  />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="pdf" class="col-md-3">Update PDF</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" value="{{$notice->pdf}}"  name="pdf" accept=".pdf" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update Notice" style="color: white" />
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
