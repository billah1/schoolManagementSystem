@extends('admin.master')

@section('title')
    Manage Achievement  page
@endsection

@section('body')


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>All Achievement Page Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> Sl NO </th>
                                <th> Title </th>
                                <th> Description </th>
                                <th> Image </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($achievements as $achievement)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $achievement->title }}</td>
                                    <td>{{ $achievement->description }}</td>
                                    <td>
                                        <img src="{{ asset($achievement->image) }}" alt="achievement_img" width="60" height="60">
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('editAchievement', ['id' => $achievement->id]) }}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{ route('deleteAchievement', ['id' => $achievement->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            {{ $achievements->links() }}
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                @if($achievements->previousPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $achievements->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                @endif

                                @foreach ($achievements->getUrlRange(1, $achievements->lastPage()) as $page => $url)
                                    <li class="page-item {{ $achievements->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                @if($achievements->nextPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $achievements->nextPageUrl() }}">Next</a>
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

