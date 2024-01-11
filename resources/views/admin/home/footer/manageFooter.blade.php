@extends('admin.master')

@section('title')
    Manage news and event  page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All news and events Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> SL NO </th>
                                    <th> Logo </th>
                                    <th> Description</th>
                                    <th> Address </th>
                                    <th> Mobile </th>
                                    <th> Email </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($footers as $footer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$footer->description}}</td>
                                    <td>{{$footer->mobile}}</td>
                                    <td>{{$footer->email}}</td>
                                    <td>{{$footer->address}}</td>
                                    <td>
                                        <img src="{{asset($footer->image)}}" alt="" height="50px;" width="50px;">
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{route('editFooter',['id'=>$footer->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{ route('deleteFooter', ['id' => $footer->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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

