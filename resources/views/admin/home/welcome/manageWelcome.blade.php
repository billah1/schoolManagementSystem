@extends('admin.master')

@section('title')
    Manage Slider page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Slider Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> SL NO </th>
                                    <th> Add Title  </th>
                                    <th> Add Description  </th>
                                    <th> Action  </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($welcomes as $welcome)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$welcome->title}}</td>
                                    <td>{{$welcome->description}}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('editWelcome', ['id' => $welcome->id]) }}" class="btn btn-success btn-sm">EDIT</a>

                                        <form action="{{ route('deleteWelcome', ['id' => $welcome->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')" style="margin-left: 10px;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
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

