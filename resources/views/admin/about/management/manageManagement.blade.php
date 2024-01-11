@extends('admin.master')

@section('title')
    manage Management page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Management Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Father</th>
                                    <th>Mother</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Joining Date</th>
                                    <th>Education</th>
                                    <th>Service Life</th>
                                    <th>Social Activities</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($management_bodies as $management_body)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $management_body->title }}</td>
                                        <td>{{ $management_body->name }}</td>
                                        <td>{{ $management_body->designation }}</td>
                                        <td>{{ $management_body->father }}</td>
                                        <td>{{ $management_body->mother }}</td>
                                        <td>{{ $management_body->dob }}</td>
                                        <td>{{ $management_body->email }}</td>
                                        <td>{{ $management_body->joining_date }}</td>
                                        <td>{{ $management_body->education }}</td>
                                        <td>{{ $management_body->serviceLife }}</td>
                                        <td>{{ $management_body->socialActivities }}</td>
                                        <td>
                                            <img src="{{ asset($management_body->image) }}" alt="{{ $management_body->name }}" height="50" width="50">
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('editManagementBody', ['id' => $management_body->id]) }}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{ route('deleteManagementBody', ['id' => $management_body->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($management_bodies->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $management_bodies->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($management_bodies->getUrlRange(1, $management_bodies->lastPage()) as $page => $url)
                                        <li class="page-item {{ $management_bodies->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($management_bodies->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $management_bodies->nextPageUrl() }}">Next</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Next</span>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

