@extends('master')

@section('title')
    Teachers Details
@endsection

@section('body')

    <style>
        .profile-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .profile-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #dee2e6;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
        }

        tfoot {
            background-color: #f8f9fa;
        }

        .description {
            font-size: 18px;
            text-align: justify;
            margin-top: 10px;
        }
    </style>

    <section class="py-5" >
        <div class="container ">
            <div class="profile-container">
                <h3 class="text-center mb-3" style="font-family: 'Times New Roman';">Profile Of {{$teacher->name}}</h3>
                <hr>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <img src="{{asset($teacher->image)}}" alt="teacher photo" class="profile-image">
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin: 0 auto;">
                    <table>
                        <tbody style="text-align:left">
                        <tr>
                            <td>Name</td>
                            <td>{{$teacher->name}}</td>
                        </tr>

                        <tr>
                            <td>Teacher Designation</td>
                            <td>{{$teacher->designation}}</td>
                        </tr>

                        <tr>
                            <td>Subject</td>
                            <td>{{$teacher->subject}}</td>
                        </tr>

                        <tr>
                            <td>Gender</td>
                            <td>{{$teacher->gender}}</td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>{{$teacher->email}}</td>
                        </tr>

                        <tr>
                            <td>Mobile</td>
                            <td>{{$teacher->mobile}}</td>
                        </tr>
                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="2">
                                <p class="education"><strong>Education</strong></p>
                                <p class="educatin">{{$teacher->education}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p class="description"><strong>Description</strong></p>
                                <p class="description">{{$teacher->description}}</p>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
