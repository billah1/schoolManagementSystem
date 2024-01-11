@extends('master')

@section('title')
    Our History Page
@endsection

@section('body')

    <section  class="py-5">
        <div class="container mb-3 mt-2">
            @foreach($our_histories as $our_history)
                <h3 style="text-align: left; background:#b3ecef;font-family: 'Times New Roman'" class="m3-5 mb-3" >
                    <span>{{$our_history->title}}</span>
                </h3>
                <p style="text-align: justify; margin-bottom: 1.5rem;">{{$our_history->description}}</p>
            @endforeach
        </div>
    </section>



@endsection
