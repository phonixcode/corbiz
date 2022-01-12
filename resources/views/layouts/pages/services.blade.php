@extends('layouts.master')

@section('title', 'Service')

@section('content')

    <!-- This section classes require for whole page sliders -->
    <div id="sequence" style="display:none;">
        <ul class="seq-canvas">
        </ul>
    </div>

    <!-- End Slider -->

    <!-- Main banner -->
    <div class="inner-page-main-banner services">
        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- H2 heading -->
                    <h2>What we do</h2>
                    <!-- H1 Heading -->
                    <h1>Our Services</h1>
                    <!-- Bredcum links -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                            <ul>
                                <li> <a href="/">Home » </a> </li>
                                <li>Services</li>
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

    <!-- service box -->
    <div id="service-image-box" class="service-section inner-page-white-section">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- H3 Heading -->
                    <h3>What we offer</h3>

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

                                <!-- image -->
                                <div class="service-image"> <img src="{{ asset('assets/images/service1.jpg') }}" alt="image"> </div>

                                <div class="content">
                                    <!-- H4 heading -->
                                    <h4><a href="/services-details">Consultancy</a></h4>

                                    <!-- Paragraph -->
                                    <p>Lorem Ipsum is simply dummy of theti
                                        ngand typeseing industry Lorem Ipsum
                                        been industry Lorem Ipsum.</p>

                                    <!-- Read more -->
                                    <a class="site-permalink" href="/services-details">
                                        <span>MORE</span>
                                        <i class="icon-service-arrow"></i>
                                    </a>

                                    <!-- Icon -->
                                    <figure><i class="fa fa-briefcase"></i></figure>
                                </div>
                            </div>
                            <!-- End box -->

                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">

                                <!-- image -->
                                <div class="service-image"> <img src="{{ asset('assets/images/service2.jpg') }}" alt="image"> </div>

                                <div class="content">
                                    <!-- H4 heading -->
                                    <h4><a href="/services-details">Financial planning</a></h4>

                                    <!-- Paragraph -->
                                    <p>Lorem Ipsum is simply dummy of theti
                                        ngand typeseing industry Lorem Ipsum
                                        been industry Lorem Ipsum.</p>

                                    <!-- Read more -->
                                    <a class="site-permalink" href="/services-details">
                                        <span>MORE</span>
                                        <i class="icon-service-arrow"></i>
                                    </a>

                                    <!-- Icon -->
                                    <figure><i class="fa fa-briefcase"></i></figure>
                                </div>
                            </div>
                            <!-- End box -->

                        </div>

                        <!-- Clearfix for small view -->
                        <div class="clearfix visible-sm"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">

                                <!-- image -->
                                <div class="service-image"> <img src="{{ asset('assets/images/service3.jpg') }}" alt="image"> </div>

                                <div class="content">
                                    <!-- H4 heading -->
                                    <h4><a href="/services-details">Business research</a></h4>

                                    <!-- Paragraph -->
                                    <p>Lorem Ipsum is simply dummy of theti
                                        ngand typeseing industry Lorem Ipsum
                                        been industry Lorem Ipsum.</p>

                                    <!-- Read more -->
                                    <a class="site-permalink" href="/services-details">
                                        <span>MORE</span>
                                        <i class="icon-service-arrow"></i>
                                    </a>

                                    <!-- Icon -->
                                    <figure><i class="fa fa-briefcase"></i></figure>
                                </div>
                            </div>
                            <!-- End box -->

                        </div>

                        <!-- Clearfix for medium and large view -->
                        <div class="clearfix visible-lg visible-md"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">

                                <!-- image -->
                                <div class="service-image"> <img src="{{ asset('assets/images/service4.jpg') }}" alt="image"> </div>

                                <div class="content">
                                    <!-- H4 heading -->
                                    <h4><a href="/services-details">Consultancy</a></h4>

                                    <!-- Paragraph -->
                                    <p>Lorem Ipsum is simply dummy of theti
                                        ngand typeseing industry Lorem Ipsum
                                        been industry Lorem Ipsum.</p>

                                    <!-- Read more -->
                                    <a class="site-permalink" href="/services-details">
                                        <span>MORE</span>
                                        <i class="icon-service-arrow"></i>
                                    </a>

                                    <!-- Icon -->
                                    <figure><i class="fa fa-briefcase"></i></figure>
                                </div>
                            </div>
                            <!-- End box -->

                        </div>

                        <!-- Clearfix for small view -->
                        <div class="clearfix visible-sm"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">

                                <!-- image -->
                                <div class="service-image"> <img src="{{ asset('assets/images/service5.jpg') }}" alt="image"> </div>

                                <div class="content">
                                    <!-- H4 heading -->
                                    <h4><a href="/services-details">Consultancy</a></h4>

                                    <!-- Paragraph -->
                                    <p>Lorem Ipsum is simply dummy of theti
                                        ngand typeseing industry Lorem Ipsum
                                        been industry Lorem Ipsum.</p>

                                    <!-- Read more -->
                                    <a class="site-permalink" href="/services-details">
                                        <span>MORE</span>
                                        <i class="icon-service-arrow"></i>
                                    </a>

                                    <!-- Icon -->
                                    <figure><i class="fa fa-briefcase"></i></figure>
                                </div>
                            </div>
                            <!-- End box -->

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                            <!-- Site box -->
                            <div class="site-box">

                                <!-- image -->
                                <div class="service-image"> <img src="{{ asset('assets/images/service6.jpg') }}" alt="image"> </div>

                                <div class="content">
                                    <!-- H4 heading -->
                                    <h4><a href="/services-details">Consultancy</a></h4>

                                    <!-- Paragraph -->
                                    <p>Lorem Ipsum is simply dummy of theti
                                        ngand typeseing industry Lorem Ipsum
                                        been industry Lorem Ipsum.</p>

                                    <!-- Read more -->
                                    <a class="site-permalink" href="/services-details">
                                        <span>MORE</span>
                                        <i class="icon-service-arrow"></i>
                                    </a>

                                    <!-- Icon -->
                                    <figure><i class="fa fa-briefcase"></i></figure>
                                </div>
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

    @include('layouts.partials.tabs')

    <!-- Statistic -->
    <div class="innerpage-site-statistic inner-page-dark-section" id="statistic" >

        <!-- Bootstrap -->
        <div class="container">
            <!-- inner box -->
            <div class="site-section-box">

	            <div class="row">
                    <!-- Number -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="site-number-2">
                            <!-- Inline wrapper -->
                            <div class="site-number-inline-2">
                                <!-- Icon -->
                                <figure> <img src="{{ asset('assets/images/stat-icon-white-1.png') }}" alt="image"> </figure>
                                <!-- Heading -->
                                <h3><span class="counter counter-default">20</span>+</h3>
                                <!-- Paragraph -->
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="site-number-2">
                            <!-- Inline wrapper -->
                            <div class="site-number-inline-2">
                                <!-- Icon -->
                                <figure> <img src="{{ asset('assets/images/stat-icon-white-2.png') }}" alt="image"> </figure>
                                <!-- Heading -->
                                <h3><span class="counter counter-default">500</span>K</h3>
                                <!-- Paragraph -->
                                <p>project completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="site-number-2">
                            <!-- Inline wrapper -->
                            <div class="site-number-inline-2">
                                <!-- Icon -->
                                <figure> <img src="{{ asset('assets/images/stat-icon-white-3.png') }}" alt="image"> </figure>
                                <!-- Heading -->
                                <h3><span class="counter counter-default">550</span></h3>
                                <!-- Paragraph -->
                                <p>Happy users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="site-number-2">
                            <!-- Inline wrapper -->
                            <div class="site-number-inline-2">
                                <!-- Icon -->
                                <figure> <img src="{{ asset('assets/images/stat-icon-white-4.png') }}" alt="image"> </figure>
                                <!-- Heading -->
                                <h3><span class="counter counter-default">380</span>K</h3>
                                <!-- Paragraph -->
                                <p>Cups of coffee</p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <!-- End Bootstrap -->

    </div>
    <!-- End Statistic -->

@endsection
