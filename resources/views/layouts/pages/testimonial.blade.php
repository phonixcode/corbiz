@extends('layouts.master')

@section('title', 'Testimonial')

@section('content')
    <!-- This section classes require for whole page sliders -->
    <div id="sequence" style="display:none;">
        <ul class="seq-canvas">
        </ul>
    </div>

    <!-- End Slider -->

    <!-- Main banner -->
    <div class="inner-page-main-banner testimonials">
        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- H2 heading -->
                    <h2>Testimonials</h2>
                    <!-- H1 Heading -->
                    <h1>Our Client Says</h1>
                    <!-- Bredcum links -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                            <ul>
                                <li> <a href="/">Home » </a> </li>
                                <li>Testimonials</li>
                            </ul>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting indus orem Ipsum has been
                                the industry's standard dummy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End bootstrap -->
    </div>
    <!-- End Main banner -->

    <!-- testimonials box -->
    <div id="testimonials" class="testimonials-section inner-page-white-section">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- H3 Heading -->
                    <h3>500+ happy clients</h3>

                    <!-- Paragraph -->
                    <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 center-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been
                            the industrys standard dummy text ever since the when an unknown printer took a galley of type
                            and scra</p>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Excellent service & support!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-1.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Devil Shohemark</h5>
                                <!-- description -->
                                <h6>MD, Envato</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span
                                        class="grey-star"><i class="fa fa-star"></i> </span> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>The team are very responsible!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the typesetting industry Lorem Ipsum has been the
                                    industrys printing and.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-2.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Samantha Setty</h5>
                                <!-- description -->
                                <h6>CEO, Kalanidhi Themes</h6>
                            </div>
                            <!-- End box -->

                        </div>


                        <!-- Clearfix for small view -->
                        <div class="clearfix visible-sm"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <span class="grey-star"><i
                                            class="fa fa-star"></i> </span> <span class="grey-star"><i
                                            class="fa fa-star"></i> </span> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Prefered this team !</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-3.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Saloni Saimon</h5>
                                <!-- description -->
                                <h6>Company Name</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <!-- Clearfix for medium and large view -->
                        <div class="clearfix visible-lg visible-md"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Excellent service & support!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-3.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Mark devil</h5>
                                <!-- description -->
                                <h6>Kick Design</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <!-- Clearfix for small view -->
                        <div class="clearfix visible-sm"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Excellent service & support!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-1.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Shahu Jose</h5>
                                <!-- description -->
                                <h6>Daimond Consultation</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Excellent service & support!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-2.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Devil Shohemark</h5>
                                <!-- description -->
                                <h6>ECO, Kalanidhi</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Excellent service & support!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-1.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Devil Shohemark</h5>
                                <!-- description -->
                                <h6>MD, Envato</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>The team are very responsible!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the typesetting industry Lorem Ipsum has been the
                                    industrys printing and.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-2.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Samantha Setty</h5>
                                <!-- description -->
                                <h6>CEO, Kalanidhi Themes</h6>
                            </div>
                            <!-- End box -->

                        </div>


                        <!-- Clearfix for small view -->
                        <div class="clearfix visible-sm"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Prefered this team !</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-3.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Saloni Saimon</h5>
                                <!-- description -->
                                <h6>Company Name</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <!-- Clearfix for medium and large view -->
                        <div class="clearfix visible-lg visible-md"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Excellent service & support!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-3.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Mark devil</h5>
                                <!-- description -->
                                <h6>Kick Design</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <!-- Clearfix for small view -->
                        <div class="clearfix visible-sm"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Excellent service & support!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-1.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Shahu Jose</h5>
                                <!-- description -->
                                <h6>Daimond Consultation</h6>
                            </div>
                            <!-- End box -->

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">
                                <!-- Icon -->
                                <div class="star"> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <!-- Paragraph -->
                                <p>
                                    <strong>Excellent service & support!!</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                    has been the industrys.
                                </p>

                                <!-- Image -->
                                <figure><img src="{{ asset('assets/images/testimonial-user-2.png') }}" alt="User"></figure>
                                <!-- Title -->
                                <h5>Devil Shohemark</h5>
                                <!-- description -->
                                <h6>ECO, Kalanidhi</h6>
                            </div>
                            <!-- End box -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End service box -->

    <!-- Dont remove this section, it's classes is nececery for swiper slider used in other sections-->
    <div id="team" class="site-team site-white-section" style="display:none;">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-10 col-md-push-2">

                    <!-- Swiper slider -->
                    <div class="swiper-container team-section-slider" id="team-section-slider">

                        <!-- Content -->
                        <div class="swiper-wrapper">
                        </div>

                    </div>
                    <!-- End slider -->

                </div>
                <div class="col-xs-12 col-md-2 col-md-pull-10">

                    <!-- Thumbnail -->
                    <div class="swiper-container thumbnail" id="team-thumbnails">
                        <ul class="swiper-wrapper">

                        </ul>
                    </div>
                    <!-- End thumbnail -->

                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End team -->

    @include('layouts.partials.call-to-action')
@endsection
