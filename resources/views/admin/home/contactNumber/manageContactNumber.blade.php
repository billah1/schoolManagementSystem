@extends('admin.master')

@section('title')
    Manage Contact page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All Contact Information</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> Title </th>
                                    <th> School Name </th>
                                    <th> Name </th>
                                    <th> Department</th>
                                    <th> Contact</th>
                                    <th> Designation</th>
                                    <th> Date</th>
                                    <th> Action </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contact_numbers as $contact_number)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$contact_number->title}}</td>
                                        <td>{{$contact_number->schoolName}}</td>
                                        <td>{{$contact_number->name}}</td>
                                        <td>{{$contact_number->department}}</td>
                                        <td>{{$contact_number->contact}}</td>
                                        <td>{{$contact_number->designation}}</td>
                                        <td>{{$contact_number->date}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('editContactNumber',['id'=>$contact_number->id])}}" class="btn btn-success btn-sm">EDIT</a>
                                            <form action="{{route('deleteContactNumber',['id'=>$contact_number->id])}}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
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
                                {{ $contact_numbers->links() }}
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($contact_numbers->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $contact_numbers->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($contact_numbers->getUrlRange(1, $contact_numbers->lastPage()) as $page => $url)
                                        <li class="page-item {{ $contact_numbers->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($contact_numbers->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $contact_numbers->nextPageUrl() }}">Next</a>
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

