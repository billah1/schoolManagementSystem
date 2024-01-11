@extends('admin.master')

@section('title')
    Manage Principal page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Manage  Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> SL No</th>
                                    <th> Title  </th>
                                    <th> Description  </th>
                                    <th> Name and Tag  </th>
                                    <th> schoolName  </th>
                                    <th> Add Image    </th>
                                    <th> Action  </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($principals as $principal)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$principal->title}}</td>
                                    <td>{{$principal->description}}</td>
                                    <td>{{$principal->name}}</td>
                                    <td>{{$principal->designation}}</td>
                                    <td>{{$principal->schoolName}}</td>

                                    <td>
                                        <img src="{{asset($principal->image)}}" alt="principal" height="60" width="60">
                                    </td>

                                    <td class="d-flex ">
                                        <a href="{{route('editPrincipal',['id'=>$principal->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{route('deletePrincipal',['id'=>$principal->id])}}"  method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                delete

                                            </button>

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

