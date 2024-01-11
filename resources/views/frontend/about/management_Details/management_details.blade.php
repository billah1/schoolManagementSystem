@extends('master')

@section('title')

    Management   Details
@endsection

@section('body')


    {{-- Principal Section --}}
    <style>
        .principal-section {
            padding: 50px 0;
            background-color: whitesmoke;
        }

        .principal-content {
            text-align: justify;
            font-size: 14px;
            margin-top: 5px;
            transition: background-color 0.3s ease;
        }

        .principal-content:hover {
            background-color: #f0f0f0;
        }

        .principal-image {
            margin-bottom: 3px;
            border: 1px solid black;
            padding: 2px;
            border-radius: 5px;
            margin-right: 10px;
            height: 210px;
            width: 222px;
        }

        @media (max-width: 767px) {
            .principal-image {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
    </style>

    <section class="principal-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h3 style="text-align: center; margin-bottom: 5px; font-family:'Times New Roman'">{{$management_body->name}}</h3>
                    <div class="mt-5">
                        <img src="{{asset($management_body->image)}}" class="pull-left principal-image" alt="Principal Image">
                        <p class="principal-content" style="font-family: 'Times New Roman';font-size: 18px">
                            The distinguished <strong>{{$management_body->name}}&nbsp;</strong>, born in <strong>{{$management_body->dob}}&nbsp;</strong> to &nbsp;
                            <strong>{{$management_body->father}}</strong> and <strong>{{$management_body->mother}}</strong>
                            assumed the role of <strong> {{$management_body->designation}}</strong>on the governing body in <strong>{{$management_body->joining_date}}&nbsp;</strong>.
                            As a key member steering the organization, his leadership reflects a commitment to excellence.
                            For seamless communication, you can connect with him at <strong>{{$management_body->email}}&nbsp;</strong>.
                            Embrace a collaborative journey with our dynamic governing body, ensuring a harmonious blend of experience and vision for a successful organizational trajectory.
                        </p>
                        <p class="principal-content" style="font-size: 18px; margin-top: 5px;font-family: 'Times New Roman';"><strong style="font-size: 20px">Education&nbsp;:&nbsp;</strong>{{$management_body->education}}</p>
                        <br>
                        <p class="principal-content" style="font-size: 18px; margin-top: 5px;font-family: 'Times New Roman';"><strong style="font-size: 20px">Working Life&nbsp;:&nbsp;</strong>{{$management_body->serviceLife}}</p>
                        <br>
                        <p class="principal-content" style="font-size: 18px; margin-top: 5px;font-family: 'Times New Roman';"><strong style="font-size: 20px">Social Activities&nbsp;:&nbsp;</strong>{{$management_body->socialActivities}}</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


