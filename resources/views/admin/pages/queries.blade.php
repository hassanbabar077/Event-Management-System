@extends('admin.layout.app')

@section('admin-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-lg-12 d-flex justify-content-around align-content-center">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span>List of Queries</h4>

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
                    <h5 class="card-header">List of Services</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($record as $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td> {{ $data->email }}</td>
                                            <td> {{ $data->number }}</td>
                                            <td> {{ $data->message }}</td>
                                            <td>

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

@endsection
