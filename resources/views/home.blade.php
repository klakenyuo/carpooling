@extends('template')

	@section('title')
		Home
	@endsection

	@section('content')
		
    <section class="main-content">

           

		 <div class="container">
                <div class="row">

                    <div class="page-content">

                        <div class="services clearfix">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="page-sub-title textcenter">
                                    <h2>Services</h2>
                                    <div class="line"></div>
                                </div><!-- end .page-sub-title -->

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-car"></i>

                                    <h3>Share your ride</h3>
                                    <p>Are you getting sick of traveling alone and spent so much money on gas? Share your ride today,and forget about this problems.</p>


                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-users"></i>

                                    <h3>Find new friends</h3>
                                    <p>Finding new friends is easier than ever,nothing makes better friendship than spending few hours casually chatting with some interesting people.</p>

                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-map-marker"></i>

                                    <h3>Go to new places</h3>
                                    <p> Find some new favourite place to chill out,you have no longer got excuse for not travelling and discovering. </p>

                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                        </div><!-- end .services -->

                        <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="background parallax" style="background-image:url('img/XWBIL5.jpg');" data-img-width="1600" data-img-height="1064">

                                <div class="main-parallax-content">

                                    <div class="second-parallax-content">

                                        <div class="parallax-content clearfix">

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">5,000</span>
                                                    <span>Happy users</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">7,000</span>
                                                    <span>Successful rides</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">600,000</span>
                                                    <span>Miles traveled in a good company</span>
                                                </div>
                                            </div>

                                        </div><!-- end .parallax-content -->

                                    </div><!-- end .main-parallax-content -->

                                </div><!-- end .paralax -->

                            </div><!-- end .fullscreen .background .parallax -->

                        </div><!-- end .col-md-12 -->

                        <div class="clearfix"></div>

                        <div class="last-rides">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="page-sub-title textcenter">
                                    <h2>Last rides</h2>
                                    <div class="line"></div>
                                </div><!-- end .page-sub-title -->

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Plovdiv to Sofia</a></h3>ride by <a href="#">Stefan Valkov</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 20, 2014 at 19:00 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                1
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Milano to Rome</a></h3>ride by <a href="#">Carlo Corti</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 18, 2014 at 06:00 AM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                4
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Lyon to Paris</a></h3>ride by <a href="#">Antoine Bonnet</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 15, 2014 at 20:00 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                3
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Barcelona to Madrid</a></h3>ride by <a href="#">Adriana Bello</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 10, 2014 at 09:00 AM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                2
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Munich to Berlin</a></h3>ride by <a href="#">Albert Becker</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 08, 2014 at 22:00 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                1
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <div class="clearfix"></div>

                                <div class="read-all pagination-margin">
                                    <a href="rides.html">Read all</a>
                                </div>

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                        </div><!-- end .last-rides -->

                        <div class="clearfix"></div>

                        <div class="events box-fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="page-sub-title textcenter">
                                    <h2>Events</h2>
                                    <div class="line"></div>
                                </div><!-- end .page-sub-title -->

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="event vertical vertical-two">
                                    <figure>
                                        <img src="img/events/event-1.jpg" alt="" >
                                    </figure>
                                    <div class="event-info">
                                        <div class="box event-name">
                                            <h3>Live concert</h3>
                                        </div>
                                        <div class="box event-ride">
                                            10 ride
                                        </div>
                                        <div class="box event-read">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="event horizontal-one">
                                    <figure>
                                        <img src="img/events/event-2.jpg" alt="" >
                                    </figure>
                                    <div class="event-info">
                                        <div class="box event-name">
                                            <h3>Live concert</h3>
                                        </div>
                                        <div class="box event-ride">
                                            200 ride
                                        </div>
                                        <div class="box event-read">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="event horizontal-one">
                                    <figure>
                                        <img src="img/events/event-3.jpg" alt="" >
                                    </figure>
                                    <div class="event-info">
                                        <div class="box event-name">
                                            <h3>Live concert</h3>
                                        </div>
                                        <div class="box event-ride">
                                            100 ride
                                        </div>
                                        <div class="box event-read">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="read-all pagination-margin">
                                    <a href="events.html">Show all events</a>
                                </div>

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                        </div><!-- end .events -->

                    </div><!-- end .page-content -->

                </div><!-- end .row -->
            </div><!-- end .container -->

            </section>
	@endsection