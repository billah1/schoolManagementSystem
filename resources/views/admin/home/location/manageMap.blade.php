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
                                    <th> Title  </th>
                                    <th> Link</th>
                                    <th> Action  </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($maps as $map)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$map->title}}</td>
                                        <td>{{ substr($map->link, 0, 100) }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('editMap', ['id' => $map->id]) }}" class="btn btn-success btn-sm">EDIT</a>

                                            <form action="{{ route('deleteMap',['id' => $map->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')" style="margin-left: 10px;">
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

