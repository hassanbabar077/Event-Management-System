@extends('admin.layout.app')

@section('admin-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-lg-12 d-flex justify-content-around align-content-center">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span>List of events</h4>
            <div class="">
                <a href="{{ route('create.eventinfo') }}"  class="btn btn-success">Add Event info</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                @if (Session::has('success'))
                    <span class="text-success">{{ Session('success') }}</span>
                @endif

                @if (Session::has('error'))
                    <span class="text-danger">{{ Session::get('error') }}</span>
                @endif
                <div class="card mb-4">
                    <h5 class="card-header">List of Event</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($record as $data)
                                        <tr>
                                            {{-- @php
                                                dd($record);
                                            @endphp --}}
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <img src="{{asset('uploads/main-images/cars/' .$data->main_image) }}"
                                                    alt="not-found" width="100px" height="100px">
                                            </td>
                                            <td>{{ $data->title }}</td>
                                            <td> {{ $data->content }}</td>
                                            <td>
                                                <a href="{{ route('create.eventinfo', $data['id']) }}" class="me-3"><i
                                                        class='bx bx-edit-alt'></i></a>
                                                <a href="{{ route('delete.eventinfo', $data['id']) }}" class="me-3">
                                                    <i class='bx bx-trash-alt'></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#notification-details-{{ $data->id }}"
                                                    title="View Detail">
                                                    <i class='bx bx-selection'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @foreach ($record as $data)
        <div class="modal fade" id="notification-details-{{ $data->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                            <h1 class="mb-1">Hafiz Details</h1>
                            <p>IT Centre Rahim Yar Khan</p>
                            <img src="{{ asset('uploads/main-images/cars/' . $data->main_image) }}" class="img-fluid rounded float-left" width="200"
                                alt="">
                        </div>
                        <div class="row gy-1 pt-75">
                            <div class="col-12 col-md-4">
                                <label class="form-label" for="jobTitle">Title</label>
                                <div class="fw-bolder">{{ $data->title ?? '' }}</div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label" for="jobTitle">Content</label>
                                <div class="fw-bolder">{{ $data->content ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
