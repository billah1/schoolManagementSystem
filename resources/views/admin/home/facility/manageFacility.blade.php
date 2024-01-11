@extends('admin.master')

@section('title')
    Manage Facility page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Facility Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th> Action </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($facilities as $facility)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$facility->title}}</td>
                                        <td>{{$facility->description}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('editFacility',['id'=>$facility->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{route('deleteFacility',['id'=>$facility->id])}}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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
                            <div class="d-flex justify-content-center">
                                {{ $facilities->links() }}
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($facilities->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $facilities->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($facilities->getUrlRange(1, $facilities->lastPage()) as $page => $url)
                                        <li class="page-item {{ $facilities->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($facilities->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $facilities->nextPageUrl() }}">Next</a>
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

