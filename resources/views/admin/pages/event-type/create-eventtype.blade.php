@extends('admin.layout.app')

@section('admin-content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span>Create a New Event info</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Create a New event info</h5>
                    <div class="card-body">
                        <form role="form"
                            @if (empty($record['id'])) action="{{ route('create.event-typeinfo') }}" @else action="{{ route('create.event-typeinfo', $record['id']) }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label for="author">Type Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ $record['name'] }}"
                                        class="form-control" notrequired>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn btn-secondary">Save</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
