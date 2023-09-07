@extends('layout.app')
@section('centent')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Events</span>
                <h2 class="mb-4"><span>Our</span> Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="speaker">
                            @foreach ($record as $data)
                            @if ($data->category == 'new')
                                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch text-center">
                                    <div class="card why-service-card mt-4 bg-gray">
                                        <img src="{{ URL::asset('images/' . $data->main_image) }}" alt=""
                                            class="img-fluid">
                                        <div class="d-flex mt-3">
                                            <div class="col-6">Title <span class="fw-bold text-danger">{{ $data->title }}</span></div>
                                            <div class="col-6">Content  <span class="fw-bold text-danger">{{ $data->content}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                          @endforeach
                     </div>
                 </div>
             </div>
          </div>
     </div>
  </div>
</section>

@endsection
