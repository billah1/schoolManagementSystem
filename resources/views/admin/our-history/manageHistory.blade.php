@extends('admin.master')

@section('title')
    Manage History  page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All History Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> SL NO </th>
                                    <th> Title  </th>
                                    <th> Description  </th>
                                    <th> Action  </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($our_histories as $our_history)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$our_history->title}}</td>
                                    <td>{{$our_history->description}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('editHistory',['id'=>$our_history->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{ route('deleteHistory', ['id' => $our_history->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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

