@extends('layout.app')
@section('centent')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Hello Organizer
                        <br><span>Welcome</span>
                    </h1>


                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section bg-light">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-4"><span>Create</span> Event</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>

                </div>

                <div class="col-lg-2 text-center mt-5">
                    <a href="{{route('create.eventsinfo')}}">Click Here</a>
                </div>
            </div>
        </div>
    </section>




@endsection
