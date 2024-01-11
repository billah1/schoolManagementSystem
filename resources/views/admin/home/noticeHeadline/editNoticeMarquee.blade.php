@extends('admin.master')

@section('title')
    Add notice headline page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Headline Notice</div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>

                            <form action="{{ route('updateNoticeMarquee', ['id' => $noticeHeadline->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Add Notice</label>

                                    <div class="col-md-9">
                                        <textarea name="notice" class="form-control" rows="5">{{ $noticeHeadline->notice }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Update Headline" style="color: white"/>
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
