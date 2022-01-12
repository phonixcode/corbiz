@extends('layouts.master')

@section('title', 'Work')

@section('content')

    <!-- This section classes require for whole page sliders -->
    <div id="sequence" style="display:none;">
        <ul class="seq-canvas">
        </ul>
    </div>

    <!-- End Slider -->

    <!-- Main banner -->
    <div class="inner-page-main-banner work">
        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- H2 heading -->
                    <h2>Project lists</h2>
                    <!-- H1 Heading -->
                    <h1>Our cases</h1>
                    <!-- Bredcum links -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                            <ul>
                                <li> <a href="/">Home » </a> </li>
                                <li>Works</li>
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

    <!-- Portfolio -->
    <div id="portfolio" class="site-portfolio innerpage-work site-grey-section">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- H3 heading -->
                    <h3>Our Cases</h3>

                    <!-- Paragraph -->
                    <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 center-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been
                            the industrys standard dummy text ever since the when an unknown printer took a galley of type
                            and scra</p>
                    </div>

                    <!-- Tabs Buttons -->
                    <ul class="site-portfolio-tabs">

                        <!-- Active Item -->
                        <li class="active" data-filter="all">All</li>
                        <li data-filter="web-design">Web Design</li>
                        <li data-filter="web-development">Web Development</li>
                        <li data-filter="logo-design">Logo Design</li>
                        <li data-filter="branding">Branding</li>
                    </ul>

                    <!-- Bootstrap inner row -->
                    <div class="row">

                        <!-- Tabs Content -->
                        <div class="site-portfolio-tabs-content">
                            <!-- Web development -->
                            <div class="all web-development web-design portfolio-items col-sm-4 col-xs-12">
                                <!-- box -->
                                <div class="site-box">
                                    <!-- Image -->
                                    <img src="{{ asset('assets/images/portfolio-1.jpg') }}" alt="Image">
                                    <!-- Caption -->
                                    <div class="portfolio-caption">
                                        <!-- Light box open click on icon -->
                                        <a class="venobox" href="{{ asset('assets/images/portfolio-1.jpg') }}" data-gall="myGallery">
                                            <i class="fa fa-plus"></i> <!-- Icon -->
                                        </a>
                                        <h5>Web Development</h5> <!-- heading -->
                                        <h6>Sub Heading</h6> <!-- Sub heading -->
                                    </div>
                                </div>
                            </div>
                            <!-- Web design -->
                            <div class="all web-design portfolio-items web-development logo-design col-sm-4 col-xs-12">
                                <!-- box -->
                                <div class="site-box">
                                    <!-- Image -->
                                    <img src="{{ asset('assets/images/portfolio-2.jpg') }}" alt="Image">
                                    <!-- Caption -->
                                    <div class="portfolio-caption">
                                        <!-- Light box open click on icon -->
                                        <a class="venobox" href="{{ asset('assets/images/portfolio-2.jpg') }}" data-gall="myGallery">
                                            <i class="fa fa-plus"></i> <!-- Icon -->
                                        </a>
                                        <h5>Web Development</h5> <!-- heading -->
                                        <h6>Web Design</h6> <!-- Sub heading -->
                                    </div>
                                </div>
                            </div>
                            <!-- Branding -->
                            <div class="all branding portfolio-items web-design logo-design col-sm-4 col-xs-12">
                                <!-- box -->
                                <div class="site-box">
                                    <!-- Image -->
                                    <img src="{{ asset('assets/images/portfolio-3.jpg') }}" alt="Image">
                                    <!-- Caption -->
                                    <div class="portfolio-caption">
                                        <!-- Light box open click on icon -->
                                        <a class="venobox" href="{{ asset('assets/images/portfolio-3.jpg') }}" data-gall="myGallery">
                                            <i class="fa fa-plus"></i> <!-- Icon -->
                                        </a>
                                        <h5>Branding</h5> <!-- heading -->
                                        <h6>Sub Heading</h6> <!-- Sub heading -->
                                    </div>
                                </div>
                            </div>
                            <!-- Branding -->
                            <div class="all branding portfolio-items web-development col-sm-4 col-xs-12">
                                <!-- box -->
                                <div class="site-box">
                                    <!-- Image -->
                                    <img src="{{ asset('assets/images/portfolio-5.jpg') }}" alt="Image">
                                    <!-- Caption -->
                                    <div class="portfolio-caption">
                                        <!-- Light box open click on icon -->
                                        <a class="venobox" href="{{ asset('assets/images/portfolio-5.jpg') }}" data-gall="myGallery">
                                            <i class="fa fa-plus"></i> <!-- Icon -->
                                        </a>
                                        <h5>Branding</h5> <!-- heading -->
                                        <h6>Sub Heading</h6> <!-- Sub heading -->
                                    </div>
                                </div>
                            </div>
                            <!-- Logo Design -->
                            <div class="all logo-design portfolio-items web-design col-sm-4 col-xs-12">
                                <!-- box -->
                                <div class="site-box">
                                    <!-- Image -->
                                    <img src="{{ asset('assets/images/portfolio-4.jpg') }}" alt="Image">
                                    <!-- Caption -->
                                    <div class="portfolio-caption">
                                        <!-- Light box open click on icon -->
                                        <a class="venobox" href="{{ asset('assets/images/portfolio-4.jpg') }}" data-gall="myGallery">
                                            <i class="fa fa-plus"></i> <!-- Icon -->
                                        </a>
                                        <h5>Logo Design</h5> <!-- heading -->
                                        <h6>Sub Heading</h6> <!-- Sub heading -->
                                    </div>
                                </div>
                            </div>
                            <!-- Branding -->
                            <div class="all branding portfolio-items web-development logo-design col-sm-4 col-xs-12">
                                <!-- box -->
                                <div class="site-box">
                                    <!-- Image -->
                                    <img src="{{ asset('assets/images/portfolio-6.jpg') }}" alt="Image">
                                    <!-- Caption -->
                                    <div class="portfolio-caption">
                                        <!-- Light box open click on icon -->
                                        <a class="venobox" href="{{ asset('assets/images/portfolio-6.jpg') }}" data-gall="myGallery">
                                            <i class="fa fa-plus"></i> <!-- Icon -->
                                        </a>
                                        <h5>Branding</h5> <!-- heading -->
                                        <h6>Sub Heading</h6> <!-- Sub heading -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End Portfolio -->

    @include('layouts.partials.call-to-action')

@endsection
