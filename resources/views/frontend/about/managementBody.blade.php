
@extends('master')

@section('title')
    Management Body
@endsection

@section('body')
    <section class="py-2" >
        <div class="container mt-5 mb-5">
            @foreach($management_bodies as $index => $management_body)
                @if($index === 0)
                    <h2 style="text-align: center; font-family: 'Times New Roman'" class="mt-5 mb-4">{{$management_body->title}}</h2>
                    <hr>
                    <div class="row">
                        @endif

                        <div class="col-md-4 mt-3" style="font-family: 'Times New Roman';">
                            <div class="card mb-3" style="width: 100%; border-radius: 5%;">
                                <h3 class="card-title mt-3" style="text-align: center; font-family: 'Times New Roman'">{{$management_body->designation}}</h3>
                                <div class="card-body">
                                    <!-- ... (rest of your card content) ... -->

                                    <div class="mb-5">
                                        <img src="{{asset($management_body->image)}}" alt="Default Image" width="260" height="250" style="display: block; margin-left: auto;border-radius: 5%; margin-right: auto;">
                                    </div>
                                    <table width="100%" class="mt-5">


                                        <tbody>



                                        <tr style="text-align: left">

                                            <td align="left" width="30%"><strong>Name</strong></td>

                                            <td align="left" width="5%">:</td>

                                            <td align="left">{{$management_body->name}}</td>

                                        </tr>



                                        <tr style="text-align: left">

                                            <td align="left" width="30%"><strong>Date of Birth</strong></td>

                                            <td align="left" width="5%">:</td>

                                            <td align="left">{{$management_body->dob}}</td>

                                        </tr>



                                        <tr style="text-align: left">

                                            <td align="left" width="30%"><strong>Joining Date</strong></td>

                                            <td align="left" width="5%">:</td>

                                            <td align="left">{{$management_body->joining_date}}</td>

                                        </tr>



                                        <tr style="text-align: left">

                                            <td align="left" width="30%"><strong>Email</strong></td>

                                            <td align="left" width="5%">:</td>

                                            <td align="left">{{$management_body->email}}</td>

                                        </tr>


                                        </tbody>


                                    </table>

                                    <a href="#" class="btn btn-success mt-2 float-right" style="border: 1px solid black;" data-toggle="modal" data-target="#managementBodyDetailsModal-{{$management_body->id}}">Details</a>
                                </div>
                            </div>
                        </div>

                        @if($index === count($management_bodies) - 1)
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    @foreach($management_bodies as $management_body)
        <div class="modal fade" id="managementBodyDetailsModal-{{$management_body->id}}" tabindex="-1" role="dialog" aria-labelledby="managementBodyDetailsModalLabel-{{$management_body->id}}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="background-color: #f8f9fa; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <div class="modal-header">
                        <h5 class="modal-title" id="managementBodyDetailsModalLabel-{{$management_body->id}}">{{$management_body->name}} Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="max-height:500px;overflow-y:auto ">



                        <div class="col-md-12 mt-2">

                            <h3 style="text-align: center; margin-bottom: 5px; font-family:'Times New Roman'">{{$management_body->name}}</h3>

                            <div class="mt-5">

                                <img src="{{asset($management_body->image)}}" class="img-fluid mx-auto d-block" alt="Principal Image" style="border-radius: 5%; max-width:200px; height:200px;">
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
            </div>
        </div>
    @endforeach
@endsection
