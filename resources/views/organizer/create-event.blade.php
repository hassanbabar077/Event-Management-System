<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{URL::asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/boxicons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/core.css"
    class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/theme-default.css"
    class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/apex-charts/apex-charts.css" />


</head>
<body>

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="row w-100 my-5 h-75">
                    <div class="col-md-12 my-5">
                        <div class="card mb-4 ps-5">
                            <h5 class="card-header">Create a New event info</h5>
                            <div class="card-body">
                                <form role="form"
                                    @if (empty($record['id'])) action="{{ route('organizer.create.eventsinfo') }}" @else action="{{ route('organizer.create.eventsinfo', $record['id']) }}" @endif
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="author">Main Image<span class="text-danger">*</span></label>
                                            <input type="file" name="main_image"
                                                data-default-file="{{ asset('uploads/main-images/cars/' .$record['main_image']) }}"
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
        </div>
    </div>

</body>
</html>
