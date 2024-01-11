<!-- manage-results.blade.php -->

@extends('admin.master')

@section('title')
    Manage Results page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Results page Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Sec</th>
                                    <th>Roll</th>
                                    <th>Date</th>
                                    <th>Semester</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($result_details as $result_detail)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$result_detail->name}}</td>
                                        <td>{{$result_detail->class}}</td>
                                        <td>{{$result_detail->sec}}</td>
                                        <td>{{$result_detail->roll}}</td>
{{--                                        <td>{{$result_detail->date}}</td>--}}
                                        <td>{{ \Carbon\Carbon::parse($result_detail->date)->format('Y') }}</td>
                                        <td>{{$result_detail->semester}}</td>

                                        <td>
                                            <a href="{{ route('showResult', $result_detail->id) }}" class="btn btn-primary btn-sm">Details</a>
                                        </td>


                                        <td class="d-flex">
                                            <a href="{{ route('editResult', $result_detail->id) }}" class="btn btn-success btn-sm">EDIT</a>

                                            <form action="{{ route('deleteResult', $result_detail->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    DELETE
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {{ $result_details->links() }}
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($result_details->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $result_details->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($result_details->getUrlRange(1, $result_details->lastPage()) as $page => $url)
                                        <li class="page-item {{ $result_details->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($result_details->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $result_details->nextPageUrl() }}">Next</a>
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
