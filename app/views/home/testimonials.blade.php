@extends('layouts.main')

@section('title')
	Team
@stop

@section('content')
	<!-- start team -->
	<section id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>LARAVEL</span> TESTIMONIALS</h2>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn testimonial-wrapper-div" data-wow-offset="50" data-wow-delay="1.3s">
					<div class="team-wrapper">
						{{ HTML::image('images/testimonial1.jpg', 'Testimonial 1', array('class' => 'img-responsive')) }}						
						<div class="team-des">
							<h4>TESTIMONIAL 1</h4>
							<span>Description</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
						</div>						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn testimonial-wrapper-div" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						{{ HTML::image('images/testimonial2.jpg', 'Testimonial 2', array('class' => 'img-responsive')) }}
						<div class="team-des">
							<h4>TESTIMONIAL 2</h4>
							<span>Description</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
						</div>						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn testimonial-wrapper-div" data-wow-offset="50" data-wow-delay="1.3s">
					<div class="team-wrapper">
						{{ HTML::image('images/testimonial3.jpg', 'Testimonial 3', array('class' => 'img-responsive')) }}						
						<div class="team-des">
							<h4>TESTIMONIAL 3</h4>
							<span>Description</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
						</div>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn testimonial-wrapper-div" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						{{ HTML::image('images/testimonial4.png', 'Testimonial 4', array('class' => 'img-responsive')) }}
							<div class="team-des">
								<h4>TESTIMONIAL 4</h4>
								<span>Description</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn testimonial-wrapper-div" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						{{ HTML::image('images/testimonial5.jpg', 'Testimonial 5', array('class' => 'img-responsive')) }}
							<div class="team-des">
								<h4>TESTIMONIAL 5</h4>
								<span>Description</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn testimonial-wrapper-div" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						{{ HTML::image('images/testimonial6.jpg', 'Testimonial 6', array('class' => 'img-responsive')) }}
							<div class="team-des">
								<h4>TESTIMONIAL 6</h4>
								<span>Description</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn testimonial-wrapper-div" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						{{ HTML::image('images/testimonial7.jpg', 'Testimonial 7', array('class' => 'img-responsive')) }}
							<div class="team-des">
								<h4>TESTIMONIAL 7</h4>
								<span>Description</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn testimonial-wrapper-div" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						{{ HTML::image('images/testimonial8.jpg', 'Testimonial 8', array('class' => 'img-responsive')) }}
							<div class="team-des">
								<h4>TESTIMONIAL 8</h4>
								<span>Description</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
							</div>
					</div>
				</div>												

			</div>
		</div>
	</section>
	<!-- end team -->
@stop