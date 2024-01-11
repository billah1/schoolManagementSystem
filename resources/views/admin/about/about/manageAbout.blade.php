@extends('admin.master')

@section('title')
    Manage about page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All About Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> Title  </th>
                                    <th> Description  </th>
                                    <th> Action  </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($abouts as $about)
                                <tr>
                                    <td>{{$loop->iteration}}]</td>
                                    <td>{{$about->title}}</td>
                                    <td>{{$about->description}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('editAbout',['id'=>$about->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{ route('deleteAbout', ['id' => $about->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

