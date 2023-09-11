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
                            @if (empty($record['id'])) action="{{ route('create.eventsinfo') }}" @else action="{{ route('create.eventsinfo', $record['id']) }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="author">Main Image<span class="text-danger">*</span></label>
                                    <input type="file" name="main_image"
                                        data-default-file="{{ asset('uploads/main-images/cars/' . $record['main_image']) }}"
                                        class="dropify form-control " notrequired>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name">Title<span class="text-danger">*</span></label>
                                    <input type="text" name="title" value="{{ $record['title'] }}" class="form-control"
                                        required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name">Discription<span class="text-danger">*</span></label>
                                    <input type="text" name="discription" value="{{ $record['decription'] }}" class="form-control"
                                        required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="author">Type<span class="text-danger">*</span></label>
                                    <select name="eventType_id" class="form-select" value="{{ $record['eventType_id'] }}"
                                        id="basicSelect">
                                        <option value="">Select</option>
                                        @foreach ($type as $data)
                                            <option value="{{ $data->id ?? '' }}">
                                                {{ $data->name ?? '' }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="author">Status<span class="text-danger">*</span></label>
                                    <input type="text" name="status" value="{{ $record['status'] }}" class="form-control"
                                        required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name">Ticket Price<span class="text-danger">*</span></label>
                                    <input type="text" name="price" value="{{ $record['price'] }}"
                                        class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name">Total Tickets<span class="text-danger">*</span></label>
                                    <input type="text" name="totaltickets" value="{{ $record['totaltickets'] }}"
                                        class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name">Start Date<span class="text-danger">*</span></label>
                                    <input type="date" name="startDate" value="{{ $record['startDate'] }}"
                                        class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name">Ending Date<span class="text-danger">*</span></label>
                                    <input type="date" name="endDate" value="{{ $record['endDate'] }}"
                                        class="form-control" required>
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn btn-secondary">Save</button>
                                        </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name">Timing<span class="text-danger">*</span></label>
                                    <input type="text" name="time" value="{{ $record['time'] }}" class="form-control"
                                        required>


                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
