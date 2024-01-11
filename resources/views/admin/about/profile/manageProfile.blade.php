@extends('admin.master')

@section('title')
    Manage profile page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Profile Information</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Sl NO</th>
                                        <th>Title</th>
                                        <th>School Name</th>
                                        <th>Name Of The Principal</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>Fax Number</th>
                                        <th>Email ID</th>
                                        <th>Web Address</th>
                                        <th>Probable Admission date</th>
                                        <th>Established</th>
                                        <th>EIIN</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($profiles as $profile)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$profile->title}}</td>
                                            <td>{{$profile->schoolName}}</td>
                                            <td>{{$profile->principle}}</td>
                                            <td>{{$profile->address}}</td>
                                            <td>{{$profile->mobile}}</td>
                                            <td>{{$profile->fax}}</td>
                                            <td>{{$profile->email}}</td>
                                            <td>{{$profile->webAddress}}</td>
                                            <td>{{$profile->admissionDate}}</td>
                                            <td>{{$profile->established}}</td>
                                            <td>{{$profile->eiin}}</td>
                                            <td>
                                                <img src="{{ asset($profile->image) }}" alt="{{ $profile->name }}" height="50" width="50">
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('editProfile',['id'=>$profile->id])}}" class="btn btn-success btn-sm mr-2">EDIT</a>
                                                    <form action="{{ route('deleteProfile', ['id' => $profile->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </div>
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
        </div>
    </section>

@endsection

