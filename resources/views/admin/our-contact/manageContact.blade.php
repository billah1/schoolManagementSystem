@extends('admin.master')

@section('title')
    Manage our contact page
@endsection

@section('body')
    <section class = "py-5">
        <div class ="container">
            <div class ="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>All our contact Infromation</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> SL NO   </th>
                                    <th> Name   </th>
                                    <th> Email   </th>
                                    <th> Subject   </th>
                                    <th> Telephone  </th>
                                    <th> Inbox Message  </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->contact}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('Contact-edit', ['id' => $contact->id]) }}" class="btn btn-success btn-sm">EDIT</a>

                                        <form action="{{ route('Contact-delete', ['id' => $contact->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')" style="margin-left: 10px;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $contacts->links() }}
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    @if($contacts->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $contacts->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                    @endif

                                    @foreach ($contacts->getUrlRange(1, $contacts->lastPage()) as $page => $url)
                                        <li class="page-item {{ $contacts->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    @if($contacts->nextPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $contacts->nextPageUrl() }}">Next</a>
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

