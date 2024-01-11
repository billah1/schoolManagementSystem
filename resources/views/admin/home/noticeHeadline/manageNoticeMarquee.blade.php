@extends('admin.master')

@section('title')
    Manage headline page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All notice Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Notice</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($noticeHeadlines as $noticeHeadline)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $noticeHeadline->notice }}</td>

                                        <td class="d-flex ml-1 mr-1">
                                            <a href="{{ route('editNoticeMarquee', ['id' => $noticeHeadline->id]) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i> EDIT</a>
                                            <a href="{{ route('deleteNoticeMarquee', ['id' => $noticeHeadline->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')"><i class="bi bi-trash"></i> DELETE</a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $noticeHeadlines->links() }}
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($noticeHeadlines->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $noticeHeadlines->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($noticeHeadlines->getUrlRange(1, $noticeHeadlines->lastPage()) as $page => $url)
                                        <li class="page-item {{ $noticeHeadlines->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($noticeHeadlines->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $noticeHeadlines->nextPageUrl() }}">Next</a>
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
