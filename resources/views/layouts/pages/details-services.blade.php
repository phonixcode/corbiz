@extends('layouts.master')

@section('content')

    <!-- This section classes require for whole page sliders -->
    <div id="sequence" style="display:none;">
        <ul class="seq-canvas">
        </ul>
    </div>

    <!-- End Slider -->

    <!-- Main banner -->
    <div class="inner-page-main-banner service-details">
        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- H2 heading -->
                    <h2>Our Services</h2>
                    <!-- H1 Heading -->
                    <h1>Business Consulting</h1>
                    <!-- Bredcum links -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                            <ul>
                                <li> <a href="/">Home » </a> </li>
                                <li> <a href="/service">Service » </a> </li>
                                <li>Service Details</li>
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

    <!-- service details container -->
    <div id="service-details" class="service-page-details-section inner-page-white-section">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- Right colom  -->
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-push-4">

                        <!-- Inner Content -->
                        <div class="inner">

                            <!-- H3 heading -->
                            <h3>Best Business Consulting </h3>
                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has
                                been the industrys standard dummy text ever since the when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book It has survived not only five
                                centuries but also the leap into electronic typesetting remaining essentially unchanged It
                                was popularised in the with the release of Letraset sheets containing Lorem Ipsum passages,
                                and moe recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsume leap into electronic typesetting.
                            </p>
                            <!-- Icon -->
                            <figure> <img src="{{ asset('assets/images/service-detail1.jpg') }}" alt="icon"> </figure>

                        </div>

                        <!-- Inner Content -->
                        <div class="inner">

                            <!-- H3 heading -->
                            <h3>Some best features </h3>
                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has
                                been the industrys standard dummy text ever since the when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book It has survived.
                            </p>

                            <!-- feture list  -->
                            <div class="some-feature-box">
                                <div class="row">
                                    <!-- list left -->
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <ul>
                                            <!-- list 1 -->
                                            <li>
                                                <!-- icon -->
                                                <div class="icon"> <img src="{{ asset('assets/images/some-feature1.png') }}" alt="icon">
                                                </div>

                                                <!-- content -->
                                                <div class="content">
                                                    <h4>Worldwide leadership</h4>

                                                    <p>Lorem Ipsum is simply dummy text of the print ing and </p>
                                                </div>
                                            </li>

                                            <!-- list 2 -->
                                            <li>
                                                <!-- icon -->
                                                <div class="icon"> <img src="{{ asset('assets/images/some-feature2.png') }}" alt="icon">
                                                </div>

                                                <!-- content -->
                                                <div class="content">
                                                    <h4>Growth pro system</h4>

                                                    <p>typesetting industry Lorem lorem Ipsum is simply text of the print
                                                    </p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <!-- list Right -->
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <ul>
                                            <!-- list 3 -->
                                            <li>
                                                <!-- icon -->
                                                <div class="icon"> <img src="{{ asset('assets/images/some-feature3.png') }}" alt="icon">
                                                </div>

                                                <!-- content -->
                                                <div class="content">
                                                    <h4>Worldwide leadership</h4>

                                                    <p>Lorem Ipsum is simply dummy text of the print ing and </p>
                                                </div>
                                            </li>

                                            <!-- list 4 -->
                                            <li>
                                                <!-- icon -->
                                                <div class="icon"> <img src="{{ asset('assets/images/some-feature4.png') }}" alt="icon">
                                                </div>

                                                <!-- content -->
                                                <div class="content">
                                                    <h4>Achieve success</h4>

                                                    <p>typesetting industry Lorem lorem Ipsum is simply text of the print
                                                    </p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Inner Content -->
                        <div class="inner">

                            <!-- H3 heading -->
                            <h3>Some list of benifits</h3>
                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has
                                been the industrys standard dummy text ever since the when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book It has survived not only five
                                centuries but also the leap into electronic typesetting remaining essentially unchanged It
                                was popularised in the with the release of Letraset sheets containing Lorem Ipsum passages,
                                and moe recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsume leap into electronic typesetting.
                            </p>

                            <!-- list  -->
                            <div class="list">
                                <ul>
                                    <li>Lorem Ipsum is simply dummy text of the printing </li>
                                    <li>And typesetting industry Lorem Ipsum has been the industrys </li>
                                    <li>Standard dummy text ever since the </li>
                                    <li>When an unknown printer took a galley of type </li>
                                    <li>And scrambled it to make a type specimen book It has. </li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <!-- Left colom  -->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-md-pull-8 ">

                        <!-- Services box -->
                        <div class="left-box">

                            <!-- H3 heading -->
                            <h3>Our services </h3>
                            <div class="links">
                                <ul>
                                    <li> <a href="services-details.html" class="active">Corporate Consulting </a>
                                    </li>
                                    <li> <a href="services-details.html">Globle marketing </a> </li>
                                    <li> <a href="services-details.html">Investment Trade </a> </li>
                                    <li> <a href="services-details.html">Tax & Efficiency </a> </li>
                                    <li> <a href="services-details.html">Audit & Assurance </a> </li>
                                    <li> <a href="services-details.html">International Business </a> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Testimonials -->
                        <div class="left-box quote">
                            <!-- H3 heading -->
                            <h3>Testimonials </h3>

                            <div class="content">
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
                                <h6>ECO, Kalanidhi</h6>
                            </div>

                        </div>

                        <!-- Call to action -->
                        <div class="left-box cta">

                            <!-- Image -->
                            <figure><img src="{{ asset('assets/images/left-cta-icon.png') }}" alt="User"></figure>

                            <!-- H3 heading -->
                            <h3>How can we help ? </h3>

                            <!-- Paragraph -->
                            <p>
                                Let’s get in touch with us right now!!
                            </p>

                            <a href="tel:19876543213" class="call">+1 123 456 7890</a>
                            <a href="mailto:support@gmail.com" class="mail">support@gmail.com</a>

                        </div>

                        <!-- Download -->
                        <div class="left-box">
                            <!-- H3 heading -->
                            <h3>Downloads </h3>

                            <div class="content">
                                <!-- Button -->
                                <a class="download-btn" href="{{ asset('assets/images/pdf.pdf') }}" target="_blank"> <i
                                        class="fa fa-file-pdf-o"> </i> &nbsp; Company Profile</a>
                                <!-- Button -->
                                <a class="download-btn" href="{{ asset('assets/images/pdf.pdf') }}" target="_blank"> <i
                                        class="fa fa-file-powerpoint-o"> </i> &nbsp; Presentation PPT</a>
                            </div>

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
