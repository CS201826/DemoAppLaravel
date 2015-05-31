<nav class="navbar navbar-default templatemo-nav" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			{{ HTML::link('home', 'Demo Laravel site', array('class' => 'navbar-brand')) }}			
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>{{ HTML::link('home', 'HOME') }}</li>
				<li>{{ HTML::link('about', 'ABOUT') }}</li>
				<li>{{ HTML::link('testimonials', 'TESTIMONIALS') }}</li>				
				<li>{{ HTML::link('latestnews', 'LATEST NEWS') }}</li>
				<li>{{ HTML::link('home#contact', 'CONTACT US') }}</li>
			</ul>
		</div>
	</div>
</nav>
