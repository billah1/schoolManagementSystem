@extends('admin.master')

@section('title')
    Manage Donor  page
@endsection

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Donors Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Add Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donors as $donor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $donor->title }}</td>
                                        <td>{{ $donor->description }}</td>
                                        <td>
                                            <img src="{{ asset($donor->image) }}" alt="donor_image" width="60" height="60">
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('editDonor', ['id' => $donor->id]) }}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{ route('deleteDonor', ['id' => $donor->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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
                                    @if($donors->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $donors->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($donors->getUrlRange(1, $donors->lastPage()) as $page => $url)
                                        <li class="page-item {{ $donors->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($donors->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $donors->nextPageUrl() }}">Next</a>
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

