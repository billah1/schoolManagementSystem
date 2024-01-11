@extends('admin.master')

@section('title')
    Edit Exam Result Page
@endsection

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

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Edit Results</div>
                        <div class="card-body">

                            <h1 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                            <form action="{{ route('updateResult', $result_detail->id) }}" method="POST">
                                @csrf
                                @method('PUT') {{-- Use method('PUT') for update --}}
                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Edit Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{ $result_detail->name }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Edit Roll</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="roll" value="{{ $result_detail->roll }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Edit Section</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="sec" value="{{ $result_detail->sec }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Edit Date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="date" value="{{ $result_detail->date }}" />
                                    </div>
                                </div>
                                <hr>
                                <h2 style="text-align:center">Marks and Subject Edit </h2>
                                <hr>

                                <!-- ... other form fields ... -->
{{--                                @if ($result_detail && $result_detail->details)--}}
                                    @foreach($result_detail->resultMarks as $detail)

                                    <div class="row">
                                        <div class="col-md-5 d-flex flex-column align-items-center">
                                            <label class="form-label" for="sub">Subject</label>
                                            <input type="text" id="sub" name="subject[]" class="form-control" value="{{ $detail->subject }}">
                                        </div>

                                        <div class="col-md-3 d-flex flex-column align-items-center">
                                            <label class="form-label" for="mark">Marks</label>
                                            <input type="text" id="mark" name="marks[]" class="form-control percentage" value="{{ $detail->marks }}">
                                        </div>

                                        <div class="col-md-2 mt-4 d-flex align-items-center">
                                            <button type="button" class="btn btn-danger deleteFieldButton">Delete</button>
                                        </div>

                                        <div class="col-md-2 mt-4 d-flex align-items-center">
                                            <button type="button" class="btn btn-success addFieldButton">Add field</button>
                                        </div>
                                    </div>



                                @endforeach
{{--                                @endif--}}



                                <div id="fieldContainer"></div>


                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-success ">Update Field</button>
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
        $(document).ready(function () {

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

            $(".addFieldButton").click(function () {
                addRow();
            });

            $("#fieldContainer").on("click", ".deleteFieldButton", function () {
                const row = $(this).closest(".added-row");
                const rowNumber = row.data("row");
                row.remove();
            });
        });
    </script>

@endsection
