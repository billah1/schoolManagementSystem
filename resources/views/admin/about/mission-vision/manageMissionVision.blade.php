@extends('admin.master')

@section('title')
    Manage Mission and Vision page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Mission and Vision Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> SL NO  </th>
                                    <th> Title 1  </th>
                                    <th> Described 1 </th>
                                    <th> Title 2  </th>
                                    <th> Described 2  </th>
                                    <th> Action  </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($mission_visions as $mission_vision)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$mission_vision->title1}}</td>
                                    <td>{{$mission_vision->description1}}</td>
                                    <td>{{$mission_vision->title2}}</td>
                                    <td>{{$mission_vision->description2}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('editMissionVision',['id'=>$mission_vision->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{ route('deleteMissionVision', ['id' => $mission_vision->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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

