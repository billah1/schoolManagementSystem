@extends('admin.master')

@section('title')
Manage header page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Header Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> Add Name Bangla </th>
                                    <th> Add name English </th>
                                    <th> Add established </th>
                                    <th> Add Logo </th>
                                    <th> Action </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($headers as $header)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$header->nameB}}</td>
                                        <td>{{$header->nameE}}</td>
                                        <td>{{$header->established}}</td>
                                        <td><img src="{{asset($header->image)}}" alt="" height="60" width="60"></td>
                                        <td class="d-flex ">
                                            <a href="{{route('editHeader',['id'=>$header->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{route('deleteHeader',['id'=>$header->id])}}" method="post" >
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

