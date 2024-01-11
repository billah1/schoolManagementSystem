@extends('admin.master')

@section('title')
    Manage Exam  page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">


                        <div class="card-header text-center">
                            <h2>All Exam  page Information</h2>

                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-10"></div>
                                <div class="col-md-2 ">
                                    <a href="{{route('addExamDropdown')}}" class="btn btn-success m-2">Add</a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr style="font-size: 16px">
                                    <th> Sl NO </th>
                                    <th> Class </th>
                                    <th> Semester </th>
                                    <th> Section </th>
                                    <th> Year </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dropdowns as $dropdown)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dropdown->class }}</td>
                                        <td>{{ $dropdown->semester }}</td>
                                        <td>{{ $dropdown->section }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dropdown->date)->format('Y') }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('editExamDropdown', ['id' => $dropdown->id]) }}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{ route('deleteExamDropdown', ['id' => $dropdown->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($dropdowns->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $dropdowns->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($dropdowns->getUrlRange(1, $dropdowns->lastPage()) as $page => $url)
                                        <li class="page-item {{ $dropdowns->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($dropdowns->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $dropdowns->nextPageUrl() }}">Next</a>
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
