@extends('admin.master')

@section('title')
  manage Founder page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Founder Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> SL NO  </th>
                                    <th> Founder Title</th>
                                    <th> Founder name</th>
                                    <th> Founder Description </th>
                                    <th> Founder Image</th>
                                    <th> Action  </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($founders as $founder)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$founder->title}}</td>
                                    <td>{{$founder->name}}</td>
                                    <td>{{$founder->description}}</td>
                                    <td>
                                        <img src="{{$founder->image}}" alt="founder_pic" height="50" width="50">
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{route('editFounder',['id'=>$founder->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{ route('deleteFounder', ['id' => $founder->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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

