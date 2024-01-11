
@extends('master')

@section('title')
    Teachers Details
@endsection

@section('body')

    <style>
        .card {
            border-top-left-radius: 10%;
            border-top-right-radius: 10%;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .card:hover {
            transform: scale(1.05); /* Enlarge the card on hover */
        }
    </style>

    <section class="py-5" >
        <div class="container mt-5 mb-5">
            <h3 class="text-center">TEACHERS</h3>
            <hr>
            <div class="row">
                @foreach($teachers as $key => $teacher)
                    <div class="col-md-3 mb-2">
                        <div class="card mx-1 mb-5">
                            <img src="{{ asset($teacher->image) }}" class="card-img-top" alt="Teacher Image" height="200">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Times New Roman'">{{ $teacher->name }}</h5>
                                <p>Subject: {{ $teacher->subject }}</p>
                                <p>Email: {{ $teacher->email }}</p>
                                <a href="{{ route('teacherSingleDetails', ['id' => $teacher->id]) }}" class="btn btn-info mt-2 float-right" style="border: 1px solid black;" >Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
