@extends('admin.master')

@section('title')
    Manage Teachers page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Teachers Page Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr >
                                    <th> Serial NO </th>
                                    <th> Name </th>
                                    <th> Designation </th>
                                    <th> Subject </th>
                                    <th> Gender </th>
                                    <th> Email </th>
                                    <th> Mobile </th>
                                    <th> Education </th>
                                    <th> Description </th>
                                    <th> Image </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->designation }}</td>
                                        <td>{{ $teacher->subject }}</td>
                                        <td>{{ $teacher->gender }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->mobile }}</td>
                                        <td>{{ $teacher->education }}</td>
                                        <td>{{ $teacher->description }}</td>
                                        <td>
                                            <img src="{{ asset($teacher->image) }}" alt="" height="50" width="50">
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('editTeacher', ['id' => $teacher->id]) }}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{ route('deleteTeacher', ['id' => $teacher->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($teachers->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $teachers->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($teachers->getUrlRange(1, $teachers->lastPage()) as $page => $url)
                                        <li class="page-item {{ $teachers->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($teachers->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $teachers->nextPageUrl() }}">Next</a>
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

