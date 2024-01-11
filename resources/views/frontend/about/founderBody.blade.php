@extends('master')

@section('title')
    Founder Body
@endsection

@section('body')
    <section >
        <div class="container">
            <div class="row">
                @foreach($founders as $index => $founder)
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-md-12 mb-5" style="height: auto;width: auto;">
                                @if($index === 0)
                                    <h3 style="text-align:left;background: #9fcdff;width: 100%" class="mb-2  "><span>{{$founder->title}}</span> </h3>
                                @endif

                                <div class="col-md-12" style="margin-top: 30px;text-align: center;">
                                    <img src="{{asset($founder->image)}}" class="img-fluid" alt="" style="height: 200px;width: 250px;border: 5px saddlebrown solid">
                                </div>

                                <div class="section-title mt-3">
                                    <h5>{{$founder->name}}</h5>
                                    <hr style="color: #1d2025;border: 1px black solid;">
                                </div>

                                <div class="mb-2">
                                    <p style="text-align: justify; color: #333;">{{$founder->description}}</p>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
