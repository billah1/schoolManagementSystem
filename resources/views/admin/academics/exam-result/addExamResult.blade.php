
@extends('admin.master')

@section('title')
    Add Exam result   page
@endsection

@section('body')

    <style>
        .delete-button {
            color: red;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            padding: 5px;

        }
    </style>



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Results  </div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{route('storeResult')}}" method="POST" enctype="multipart/form-data">
                                @csrf

{{--//name--}}
                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  name </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="name"/>
                                    </div>
                                </div>

{{--//class--}}
                                <div class="row mb-3">
                                    <label for="class" class="col-md-3">Select Class</label>
                                    <div class="col-md-9">
                                        <select name="class" class="form-control mb-2" required>
                                            <option value="na" selected>Select Your Class</option>
                                            @isset($dropdowns)
                                                @foreach($dropdowns->unique('class') as $dropdown)
                                                    <option value="{{ $dropdown->class }}">{{ $dropdown->class }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
{{--//section--}}
                                <div class="row mb-3">
                                    <label for="section" class="col-md-3">Select Section</label>
                                    <div class="col-md-9">
                                        <select name="section" class="form-control mb-2" required>
                                            <option value="na" selected>Select Your Section</option>
                                            @isset($dropdowns)
                                                @foreach($dropdowns->unique('section') as $dropdown)
                                                    <option value="{{ $dropdown->section }}">{{ $dropdown->section }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>

{{--//roll--}}
                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add  Roll </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  name="roll"/>
                                    </div>
                                </div>

{{--//semester--}}
                                <div class="row mb-3">
                                    <label for="semester" class="col-md-3">Add Semester</label>
                                    <div class="col-md-9">
                                        <select name="semester" class="form-control mb-2" required>
                                            <option value="na" selected>Select Your Semester</option>
                                            @isset($dropdowns)
                                                @foreach($dropdowns->unique('semester') as $dropdown)
                                                    <option value="{{ $dropdown->semester }}">{{ $dropdown->semester }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>


{{--//Year--}}
                                <div class="row mb-3">
                                    <label for="date" class="col-md-3">Add Year</label>
                                    <div class="col-md-9">
                                        <select name="date" class="form-control mb-2" required>
                                            <option value="na" selected>Select Your Year</option>
                                            @isset($dropdowns)
                                                @php
                                                    $addedYears = [];
                                                @endphp
                                                @foreach($dropdowns->unique('date') as $dropdown)
                                                    @php
                                                        $date = substr($dropdown->date, 0, 4);
                                                    @endphp
                                                    @if (!in_array($date, $addedYears))
                                                        <option value="{{ $date }}">{{ $date }}</option>
                                                        @php
                                                            $addedYears[] = $date;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>






                                <hr>
                                <p style="text-align:center">Details</p>
                                <hr>

                                <!-- ... other form fields ... -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class="form-label" for="sub">Subject</label>
                                        <input type="text" id="sub" name="subject[]" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-label" for="mark">Marks</label>
                                        <input type="text" id="mark" name="marks[]" class="form-control percentage">
                                    </div>

                                </div>

                                <div id="fieldContainer">

                                </div>
                                <div class="col-md-2 mt-2">
                                    <button type="button" class="btn btn-success addFieldButton">Add Field</button>
                                </div>
                                <div class="row mb-3">
                                    <label for="title" class="col-md-9"></label>
                                    <div class="col-md-3">
                                       <button type="submit" class="btn btn-primary">Submitted </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            let rowCount = 0;

            function addRow() {
                rowCount++;

                const newRow = `
                    <div class="row added-row" data-row="${rowCount}">
                        <div class="col-md-5">
                            <label class="form-label" for="sub"></label>
                            <input type="text" name="subject[]" class="form-control">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label" for="mark"></label>
                            <input type="text" name="marks[]" class="form-control percentage">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger mt-2 deleteFieldButton">Delete</button>
                        </div>
                    </div>
                `;

                $("#fieldContainer").append(newRow);
            }

            $(".addFieldButton").click(function() {
                addRow();
            });


            $("#fieldContainer").on("click", ".deleteFieldButton", function() {
                const row = $(this).closest(".added-row");
                const rowNumber = row.data("row");
                row.remove();
            });
        });
    </script>


@endsection
