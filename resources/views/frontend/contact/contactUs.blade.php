@extends('master')

@section('title')
    Contact us  page
@endsection

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Contact Us</div>
                        <h1 class="text-danger text-center mt-2 mb-2" style="font-family: 'Times New Roman';">{{ Session::has('success') ? Session::get('success') : '' }}</h1>
                        <div class="card-body">
                            <h1 class="text-success"></h1>
                            <form class="my-form" method="post" enctype="multipart/form-data" action="{{ route('StoreContact') }}">
                                @csrf


                                <div class="form-group row mb-3">
                                    <label for="form-name" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name">
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="form-email" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="form-subject"  class="col-md-3">Subject</label>
                                    <div class="col-md-9">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="form-subject"  class="col-md-3">Telephone/Mobile</label>
                                    <div class="col-md-9">
                                        <input type="tel" class="form-control" name="contact" placeholder="Enter Your Correct Number">
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="form-message"  class="col-md-3">Email your Message</label>
                                   <div class="col-md-9">
                                       <textarea class="form-control" name="message" placeholder="Write your message here"></textarea>
                                   </div>
                                </div>







                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Submit" style="color: white"/>
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
        document.querySelector('.containerCommon h4').addEventListener('mouseenter', function () {
            this.style.backgroundColor = '#9ed8a1';
            this.style.color = 'white';
        });

        document.querySelector('.containerCommon h4').addEventListener('mouseleave', function () {
            this.style.backgroundColor = '#b1dfbb';
            this.style.color = 'black';
        });
    </script>

@endsection
