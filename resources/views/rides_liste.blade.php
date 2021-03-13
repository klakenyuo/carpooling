@extends('template')

	@section('title')
		Rides
	@endsection

	@section('content')
	<section class="main-content">
		<div class="container">
			<div class="row">
				 
				<div class="last-rides">

<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="page-sub-title textcenter">
		<h2>Last rides</h2>
		<div class="line"></div>
	</div><!-- end .page-sub-title -->

</div>

<div class="col-md-12 col-sm-12 col-xs-12">

	 
@foreach ($rides as $ride)

	<article class="ride-box clearfix">

		<div class="ride-content">
			<h3><a href="#">From {{$ride->from}} to {{$ride->to}} </a></h3>ride by <a href="#">{{$ride->by}}</a>
		</div>

		<ul class="ride-meta">

			<li class="ride-date">
				<a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
					<i class="fa fa-calendar"></i>
					{{$ride->date}} at 22:00 PM
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
 @endforeach
	<div class="clearfix"></div>

	<div class="read-all pagination-margin">
		<a href="rides.html">Read all</a>
	</div>

</div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

</div>
			</div>
		</div>
</section>		

	@endsection
