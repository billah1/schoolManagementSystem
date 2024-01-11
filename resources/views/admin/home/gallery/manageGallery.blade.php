@extends('admin.master')

@section('title')
    Manage Gallery  page
@endsection

@section('body')

    <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>All Gallery Page Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> Sl NO </th>
                                <th> Title </th>
                                <th> Image </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gallery->title }}</td>
                                    <td>
                                        <img src="{{ asset($gallery->image) }}" alt="" height="50" width="50">
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('editGallery', ['id' => $gallery->id]) }}" class="btn btn-success btn-sm">EDIT</a>
                                        <form action="{{ route('deleteGallery', ['id' =>$gallery->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            {{ $galleries->links() }}
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                @if($galleries->previousPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $galleries->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                @endif

                                @foreach ($galleries->getUrlRange(1, $galleries->lastPage()) as $page => $url)
                                    <li class="page-item {{ $galleries->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                @if($galleries->nextPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $galleries->nextPageUrl() }}">Next</a>
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

