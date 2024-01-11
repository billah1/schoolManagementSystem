@extends('master')

@section('title')
    Student Result
@endsection

@section('body')

<section >
    <div class="container">
        <section class="py-5" style="background-color: #EDBB99 ;">
            <div class="container mb-5" style="color: #aaaaaa;">
                <div class="col-md-8 offset-md-2 result-form p-4" style="border: 2px solid #007bff; border-radius: 10px; background-color: #f8f9fa;">





                    <h2 class="text-center mb-4">Welcome To {{$students->name}}</h2>

                    <div class="result-details p-3 mt-4 border rounded">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Name:</strong> {{$students->name}}</p>
                                <p><strong>Roll Number:</strong> {{$students->roll}}</p>
                                <p><strong>Class:</strong> {{$students->class}}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Section:</strong> {{$students->sec}}</p>
                                <p><strong>Date:</strong>  {{$students->date}}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 style="text-align: center"> {{$students->semester}} SEMESTER {{ \Carbon\Carbon::parse($students->date)->format('Y') }} RESULT</h3>
                    <hr>


                    <table class="table mt-4 table-bordered table-hover result-table">
                        <thead style="background-color: black; color: white;">
                        <tr>
                            <th>Subject</th>
                            <th>Marks</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $allNumber = 0;
                        @endphp
                        @foreach($result as $student_detail)
                            <tr style="background-color:	#fffdd0 ;" class="table-hover">
                                <td style="color: black">{{ $student_detail->subject}}</td>
                                <td style="color: black">{{ $student_detail->marks}}</td>
                            </tr>
                            @php
                                $allNumber += $student_detail->marks;
                            @endphp
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr >
                            <td class="text-dark" style="background-color: #82E0AA ">Total</td>
                            <td class="text-dark" style="background-color: #82E0AA ">{{$allNumber}}</td>
                        </tr>
                        </tfoot>
                    </table>


                </div>
            </div>
            <div style="text-align: center">
                <a href="" class="btn btn-success " style="text-align: center">Downlaod Result</a>
            </div>
        </section>
    </div>

</section>

    <style>
        .result-details {
            background-color: #e3f2fd;
            transition: background-color 0.3s ease;
        }

        .result-details:hover {
            background-color: #bbdefb;
        }
    </style>
@endsection
