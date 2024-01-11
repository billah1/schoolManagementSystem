@extends('admin.master')

@section('title')
    Manage Slider page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Slider Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Add Title  </th>
                                    <th> Add Description  </th>
                                    <th> Add Image    </th>
                                    <th> Action  </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->description}}</td>
                                        <td><img src="{{asset($slider->image)}}" alt="" height="60" width="60"></td>
                                        <td class="d-flex">
                                            <a href="{{route('editSlider',['id'=>$slider->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{ route('deleteSlider', ['id' => $slider->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $sliders->links() }}
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($sliders->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $sliders->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($sliders->getUrlRange(1, $sliders->lastPage()) as $page => $url)
                                        <li class="page-item {{ $sliders->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($sliders->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $sliders->nextPageUrl() }}">Next</a>
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

