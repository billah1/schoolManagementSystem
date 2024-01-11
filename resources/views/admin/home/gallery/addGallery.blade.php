@extends('admin.master')

@section('title')
    Add Gallery  page
@endsection

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Gallery</div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::has('message') ? Session::get('message') : '' }}</h1>
                            <form action="{{route('storeGallery')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Add Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title" id="titleInput" oninput="validateTitleLength(this)"/>
                                        <p id="titleError" style="color: red; display: none;">Please enter at most 6 words.</p>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Add Image</label>
                                    <div class="col-md-9">
                                        <input type="file"  name="image" alt="Image" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Create Gallery" style="color: white"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function validateTitleLength(input) {
            var words = input.value.split(' ').filter(function(word) {
                return word.length > 0;
            });

            var titleError = document.getElementById('titleError');

            if (words.length > 6) {
                titleError.style.display = 'block';
            } else {
                titleError.style.display = 'none';
            }
        }
    </script>
@endsection
