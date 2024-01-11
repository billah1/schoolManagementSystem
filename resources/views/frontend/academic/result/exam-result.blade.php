
@extends('master')

@section('title')
    Exam Result
@endsection

@section('body')

    <section >
        <div class="container">
            <section class="py-5" style="background-color:#EBDEF0  ;">
                <div class="container mb-5">

                    <div class="col-md-8 offset-md-2 result-form p-4" style="border: 2px solid #007bff; border-radius: 10px; background-color: #f8f9fa;">
                        <h4 class="text-center mb-4">Examination Result</h4>




                        <form action="{{route('exam-result-view')}}" method="post">
                            @csrf

                            @if(session('alert'))
                                <div class="alert alert-danger text-center">
                                    {{ session('alert') }}
                                </div>
                            @endif



                            <div class="form-group mt-3">
                                <label for="class">Name:</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>


                            <div class="form-group mt-3">
                                <label for="class">Class:<span class="manf" style="color: red;">*</span></label>
                                <input type="text" name="class" class="form-control" placeholder="write your Class"/>
                            </div>

                            <div class="form-group mt-3">
                                <label for="classRoll">Class Roll:<span class="manf" style="color: red;">*</span></label>
                                <input type="text" name="classRoll" class="form-control mb-2" placeholder="Enter Your Class Roll Number" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="section">Section:<span class="manf" style="color: red;">*</span></label>
                                <input type="text" name="sec" class="form-control" placeholder="write your Section"/>
                            </div>

                            <div class="form-group mt-3">
                                <label for="semester">Semester:<span class="manf" style="color: red;">*</span></label>
                                <input type="text" name="semester" class="form-control" placeholder="write your Semester"/>
                            </div>

                            <div class="form-group mt-3">
                                <label for="year">Year:<span class="manf" style="color: red;">*</span></label>
                                <input type="text" name="date" class="form-control" placeholder="write your Current year"/>
                            </div>




                            <div class="form-group text-center mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            </section>
        </div>
    </section>

@endsection


