
@extends('master')

@section('title')
    Teachers Page
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

    <section class="py-2" >
        <div class="container mt-5 mb-5">
            <h3 class="text-center">TEACHERS</h3>
            <hr>
            <div class="row">
                @php $count = 0 @endphp
                @foreach($teachers as $teacher)
                    @if($count < 3)
                        <div class="col-md-4 mb-2">
                            <div class="card mx-1">
                                <img src="{{asset($teacher->image)}}" class="card-img-top" alt="..."  height="200">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Times New Roman'">{{$teacher->name}}</h5>
                                    <p>Subject:{{$teacher->subject}}</p>
                                    <p>Email:{{$teacher->email}}</p>
                                    <a href="{{ route('teacherSingleDetails', ['id' => $teacher->id]) }}" class="btn btn-info mt-2 float-right" style="border: 1px solid black;" >Details</a>
                                </div>
                            </div>
                        </div>
                        @php $count++ @endphp
                    @endif
                @endforeach
            </div>
            <hr>

            @if(count($teachers) > 3)

                <div class="ml-md-0 mt-2 text-left" style="margin-bottom: 10px;">
                    <a href="{{ route('teachersDetails') }}" class="btn btn-info float-right" style="border: 1px solid black;">VIEW MORE →</a>
                </div>
                <br>


            @endif
        </div>
    </section>

@endsection
