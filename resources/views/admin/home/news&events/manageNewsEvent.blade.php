@extends('admin.master')

@section('title')
    Manage news and event  page
@endsection

@section('body')<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>All News and Events Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> SL NO </th>
                                <th> Title </th>
                                <th> Description </th>
                                <th> Add Image </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news_events as $news_event)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $news_event->title }}</td>
                                    <td>{{ $news_event->description }}</td>
                                    <td>
                                        <img src="{{ asset($news_event->image) }}" alt="achievement_img" width="60" height="60">
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('editNewsEvent', ['id' => $news_event->id]) }}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{ route('deleteNewsEvent', ['id' => $news_event->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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
                                @if($news_events->previousPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $news_events->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                @endif

                                @foreach ($news_events->getUrlRange(1, $news_events->lastPage()) as $page => $url)
                                    <li class="page-item {{ $news_events->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                @if($news_events->nextPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $news_events->nextPageUrl() }}">Next</a>
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

