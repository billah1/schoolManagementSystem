
@extends('master')

@section('title')
    Profile page
@endsection

@section('body')


    <style>
        .frame {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img.framed {
            box-shadow:
                -50px -50px 0 -40px var(--red),
                50px 50px 0 -40px var(--red);
        }
    </style>







    <section class="  py-1" >
        <div class="mt-5  mb-5  container">
            @foreach($profiles as $profile)
                <div class="mb-1">
                    <h2 style="text-align: left;">{{$profile->title}}</h2>
                    <hr style="border: 1px transparent solid;width:auto;text-align:left;margin-left:0 " class="mb-3">

                    <div class="frame mb-5">
                        <img class="framed" src="{{asset($profile->image)}}" alt="random image" height="350" width="450">
                    </div>



                    <div style="text-align:left;">

                        <table class="profile-table" >

                            <tr style="border: 1px black solid">
                                <td style="width: 10%;">School Name</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="width: 10%;">{{$profile->schoolName}}</td>
                            </tr>

                            <tr  style="border: 1px black solid">
                                <td style="width: 10%;">Name Of The Principal</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="width: 10%;">{{$profile->principle}}</td>
                            </tr>

                            <tr  style="border: 1px black solid">
                                <td style="width: 10%;">Address</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="width: 10%;">{{$profile->address}}</td>
                            </tr>


                            <tr  style="border: 1px black solid">
                                <td style="width: 10%;">Contact Number</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="width: 10%;">{{$profile->mobile}}</td>
                            </tr>

                            <tr  style="border: 1px black solid">
                                <td style="width: 10%;">Fax Number</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="width: 10%;">{{$profile->fax}}</td>
                            </tr>

                            <tr  style="border: 1px black solid">
                                <td style="width: 10%;">Email ID</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="width: 10%;">{{$profile->email}}</td>
                            </tr>

                            <tr  style="border: 1px black solid">
                                <td style="width: 10%;">Web Address</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="width: 10%;">{{$profile->webAddress}}</td>
                            </tr>

                            <!-- Probable Admission Date -->
                            <tr  style="border: 1px black solid">
                                <td style="padding: 10px; width: 40%;">Probable Admission Date</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="padding: 10px; width: 50%;">{{$profile->admissionDate}}</td>
                            </tr>

                            <!-- Established -->
                            <tr  style="border: 1px black solid">
                                <td style="padding: 10px; width: 40%;">Established</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="padding: 10px; width: 50%;">{{$profile->established}}</td>
                            </tr>

                            <!-- EIIN -->
                            <tr  style="border: 1px black solid">
                                <td style="padding: 10px; width: 40%;">EIIN</td>
                                <td style="width: 5%;"><strong>:</strong></td>
                                <td style="padding: 10px; width: 50%;">{{$profile->eiin}}</td>
                            </tr>

                        </table>

                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection



