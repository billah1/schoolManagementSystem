@extends('admin.master')

@section('title')
    Student Result Show
@endsection


@section('body')

    <section class="py-5">
        <div class="container mb-5">

            <div class="col-md-8 offset-md-2 result-form p-4" style="border: 2px solid #007bff; border-radius: 10px; background-color: #f8f9fa;">

                <h2 class="text-center mb-4">Welcome To {{$detail->name}}</h2>

                <div class="result-details p-3 mt-4 border rounded">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Name:</strong> {{$detail->name}}</p>
                            <p><strong>Roll Number:</strong> {{$detail->roll}}</p>
                            <p><strong>Class:</strong> {{$detail->class}}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Section:</strong> {{$detail->sec}}</p>
                            <p><strong>Date:</strong>  {{$detail->date}}</p>
                        </div>
                    </div>
                </div>


                <table class="table mt-4 table-bordered table-hover result-table">
                    <hr>
                    <h3 style="text-align: center"> {{$detail->semester}} SEMESTER {{ \Carbon\Carbon::parse($detail->date)->format('Y') }} RESULT</h3>
                    <hr>
                    <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Marks</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $allNumber=0;
                    @endphp
                    @foreach($student_details as  $student_detail)
                    <tr>
                        <td>{{ $student_detail->subject}}</td>
                        <td>{{ $student_detail->marks}}</td>
                    </tr>
                        @php
                        $allNumber +=$student_detail->marks;
                        @endphp
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Total</td>
                        <td>{{$allNumber}}</td>
                    </tr>
                    </tfoot>
                </table>
            </div>

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
