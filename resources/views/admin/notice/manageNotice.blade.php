@extends('admin.master')

@section('title')
    Manage notice page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Notice Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>PDF</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{-- //this is reversed --}}
                                @foreach($notices->reverse() as $notice)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $notice->title }}</td>
                                        <td>{{ $notice->date }}</td>
                                        <td>
                                            @if($notice->pdf)
                                                <a href="{{ asset($notice->pdf) }}" target="_blank" download>Download PDF</a>
                                            @else
                                                No PDF available
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('editNoticeMain', ['id' => $notice->id]) }}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{ route('deleteNoticeMain', ['id' => $notice->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {{ $notices->links() }}
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($notices->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $notices->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($notices->getUrlRange(1, $notices->lastPage()) as $page => $url)
                                        <li class="page-item {{ $notices->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($notices->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $notices->nextPageUrl() }}">Next</a>
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


{{--                //this is normal --}}
{{--<tbody>--}}

{{--@foreach($notices as $notice)--}}
{{--    <tr>--}}
{{--        <td>{{ $loop->iteration }}</td>--}}
{{--        <td>{{ $notice->title }}</td>--}}
{{--        <td>{{ $notice->date }}</td>--}}
{{--        <td>--}}
{{--            @if($notice->pdf)--}}
{{--                <a href="{{ asset($notice->pdf) }}" target="_blank" download>{{$notice->title }}</a>--}}
{{--            @else--}}
{{--                No PDF available--}}
{{--            @endif--}}
{{--        </td>--}}
{{--        <td class="d-flex">--}}
{{--            <a href="{{ route('editNoticeMain', ['id' => $notice->id]) }}" class="btn btn-success btn-sm">EDIT</a>--}}
{{--            <form action="{{ route('deleteNoticeMain', ['id' => $notice->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">--}}
{{--                @csrf--}}
{{--                <button type="submit" class="btn btn-danger btn-sm">Delete</button>--}}
{{--            </form>--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--@endforeach--}}
{{--</tbody>--}}
