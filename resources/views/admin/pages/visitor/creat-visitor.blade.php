@extends('admin.layout.app')

@section('admin-content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Visitor Data</span></h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    {{-- <h5 class="card-header">Create a New event info</h5> --}}
                    <div class="card-body">
                        <form role="form"
                        action="{{route('updateinfo',$contact->id)}}"
                            {{-- @if (empty($info['id'])) action="{{ route('create.visitorinfo') }}" @else action="{{ route('create.visitorinfo', $info['id']) }}" @endif --}}
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="name">name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ $info['name'] }}" class="form-control"
                                        required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="email">email<span class="text-danger">*</span></label>
                                    <input type="text" email="email" value="{{ $info['email'] }}" class="form-control"
                                        required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="number">number<span class="text-danger">*</span></label>
                                    <input type="text" number="number" value="{{ $info['number'] }}" class="form-control"
                                        required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="message">message<span class="text-danger">*</span></label>
                                    <input type="text" name="message" value="{{ $info['message'] }}"
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
