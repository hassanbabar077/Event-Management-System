@extends('layout.app')
@section('centent')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Events
                        <br><span>We Are Offering</span>
                    </h1>


                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section bg-light">
        <div class="container">

            <div class="row">
                @foreach ($event as $data)
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card flex-fill">
                            <img alt="Card Image" src="{{ asset('uploads/main-images/cars/' . $data->main_image) }}"
                                class="card-img-top">
                            <div class="card-header">
                                <h5 class="card-title mb-0">{{ $data->title }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $data->discription }}</p>
                                <h6>Status :<span>{{ $data->status }}</span></h6>
                                <h6>Ticket Price :<span>{{ $data->price }}</span></h6>
                                <h6>Total Ticket :<span>{{ $data->totaltickets }}</span></h6>
                                <h6>Starting Date :<span>{{ $data->startDate }}</span></h6>
                                <h6>Ending Date :<span>{{ $data->endDate }}</span></h6>
                                <h6>Timing :<span>{{ $data->time }}</span></h6>
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#notification-details-{{ $data->id }}" title="View Detail">
                                    Buy Ticket
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    @foreach ($event as $data)
        <div class="modal fade" id="notification-details-{{ $data->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                            <img src="{{ asset('uploads/main-images/cars/' . $data->main_image) }}"
                                class="img-fluid rounded float-left" width="200" alt="">
                        </div>
                        <div class="row gy-1 pt-75">
                            <div class="col-12 col-md-6 pb-3">
                                <h6>Title :<span>{{ $data->title }}</span></h6>
                                <div class="fw-bolder"> </div>
                            </div>
                            <div class="col-12 col-md-6 pb-3">
                                <h6>Status :<span>{{ $data->status }}</span></h6>
                                <div class="fw-bolder"> </div>
                            </div>
                            <div class="col-12 col-md-6 pb-3">

                                <h6>Ticket Price :<span>{{ $data->price }}</span></h6>
                                <div class="fw-bolder"></div>
                            </div>
                            <div class="col-12 col-md-6 pb-3">

                                <h6>Total Ticket :<span>{{ $data->totaltickets }}</span></h6>
                                <div class="fw-bolder"></div>
                            </div>
                            <div class="col-12 col-md-6 pb-3">

                                <div class="fw-bolder">
                                    <h6>Starting Date :<span>{{ $data->startDate }}</span></h6>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 pb-3">

                                <h6>Ending Date :<span>{{ $data->endDate }}</span></h6>
                                <div class="fw-bolder"></div>
                            </div>
                            <div class="col-12 col-md-6 pb-3">

                                <h6>Timing :<span>{{ $data->time }}</span></h6>
                                <div class="fw-bolder"></div>
                            </div>

                            <div class="col-12 col-md-12 pb-3 text-center">

                                <a href="{{route('payment' , $data->id)}}">
                                    Buy Ticket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
