<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* e.g., it puts together the home page when no home.php file exists.
*
* Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
*
* @package Voervadsbro.dk
*/

get_header(); ?>
<div id="fb-root"></div>
<!-- Facebook -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=207249829313515";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<header class="header">
		<div class="bg-img"><img src="<?php echo get_template_directory_uri();?>/img/mainbg.jpg" alt="Background Image" /></div>
		<div class="wrapper title">
			<div class="slide">
				<div class="row">
					<div class="12-small columns">
						<h3>Velkommen til</h3>
					</div>
				</div>
				<div class="row">
					<div class="12-small columns">
						<h1>Voervadsbro</h1>
					</div>
				</div>
				<p class="subline">
					Landsbyforening
				</p>
			</div>
		</div>
	</header>
	<div class="trigger flyAnimation" data-info="&#xf109;"><span></span></div>

	<section class="divider ss-style-doublediagonal">
		<h2>Voervadsbro nu</h2>
		<div class="row">
			<div class="large-8 columns">
				<div class="event">

						<div class="event-date">
							<p class="event-month">Sept</p>
							<p class="event-day">18</p>
						</div>

						<div class="event-desc">
							<h4 class="event-desc-header">Day in the Life of Foundation for Apps</h4>
							<p class="event-desc-detail"><span class="event-desc-time"></span>BDConf - Altlanta</p>
							<a href="http://bdconf.com/speakers/brandon-arnold/" class="rsvp button">RSVP &amp; Details</a>
						</div>

					</div>

					<hr>

					<div class="event">

						<div class="event-date">
							<p class="event-month">Oct</p>
							<p class="event-day">21</p>
						</div>

						<div class="event-desc">
							<h4 class="event-desc-header">Day in the Life of Foundation for Apps</h4>
							<p class="event-desc-detail"><span class="event-desc-time"></span>BDConf - Washington, DC</p>
							<a href="http://bdconf.com/speakers/brandon-arnold/" class="rsvp button">RSVP &amp; Details</a>
						</div>

					</div>

					<hr>

					<div class="event">

						<div class="event-date">
							<p class="event-month">Oct</p>
							<p class="event-day">21</p>
						</div>

						<div class="event-desc">
							<h4 class="event-desc-header">Day in the Life of Foundation for Apps</h4>
							<p class="event-desc-detail"><span class="event-desc-time"></span>BDConf - Washington, DC</p>
							<a href="http://bdconf.com/speakers/brandon-arnold/" class="rsvp button">RSVP &amp; Details</a>
						</div>

					</div>


			</div>
			<div class="large-4 columns">
				<div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
			</div>
		</div>

    <div class="row">
      <div class="small-12 columns">
        <a class="button text-transform" href="#">Se hvad der ellers sker i Voervadsbro...</a>
      </div>
    </div>


	</section>

	<svg id="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
		<path d="M0 100 C40 0 60 0 100 100 Z"/>
	</svg>
	<section class="divider color">
		<h2>Seneste Nyheder</h2>
		<div class="row">
		  <div class="large-4 medium-4 columns">
		     <ul class="pricing-table active-tb shadow mrgn-20-top">
		       <li class="title">Fantastisk Natur</li>
		       <li class="bullet-item"><img src="http://i.livescience.com/images/i/000/019/660/i02/coral-lake1.jpg?1315001121"></li>
		       <li class="bullet-item">Take root and flourish. Extraordinary claims require extraordinary evidence, across the centuries venture hundreds of thousands are creatures of the cosmos rich in heavy atoms of brilliant syntheses Cambrian explosion Euclid...</li>
		       <li class="cta-button"><a class="button text-transform" href="#">Læs mere</a></li>
		     </ul>
		   </div>
		  <div class="large-4 medium-4 columns">
				<ul class="pricing-table active-tb shadow mrgn-20-top">
					<li class="title">test</li>
					<li class="bullet-item"><img src="http://www.mountainprofessor.com/images/Mountain-Ranges-Colorado-2.jpg"></li>
					<li class="bullet-item">Take root and flourish. Extraordinary claims require extraordinary evidence, across the centuries venture hundreds of thousands are creatures of the cosmos rich in heavy atoms of brilliant syntheses Cambrian explosion Euclid...</li>
					<li class="cta-button"><a class="button text-transform" href="#">Læs mere</a></li>
				</ul>
		   </div>
		  <div class="large-4 medium-4 columns">
				<ul class="pricing-table active-tb shadow mrgn-20-top">
					<li class="title">ehi!</li>
					<li class="bullet-item"><img src="http://www.livetradingnews.com/wp-content/uploads/2014/07/481704-antarctic-sea-ice.jpg"></li>
					<li class="bullet-item">Take root and flourish. Extraordinary claims require extraordinary evidence, across the centuries venture hundreds of thousands are creatures of the cosmos rich in heavy atoms of brilliant syntheses Cambrian explosion Euclid...</li>
					<li class="cta-button"><a class="button text-transform" href="#">Læs mere</a></li>
				</ul>
		   </div>
		</div>

    <div class="row">
      <div class="small-12 columns">
        <a class="button text-transform" href="#">Se flere nyheder ...</a>
      </div>
    </div>


	</section>
	<svg id="slit" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
		<path id="slitPath2" d="M50 100 C49 80 47 0 40 0 L47 0 Z" />
		<path id="slitPath3" d="M50 100 C51 80 53 0 60 0 L53 0 Z" />
		<path id="slitPath1" d="M47 0 L50 100 L53 0 Z" />
	</svg>
	<section id="socialCollage" class="divider ss-style-foldedcorner">
		<h2>Om #Voervadsbro</h2>
    <div class="row">
      <div class="large-12 columns">
    		<?php
    			echo do_shortcode('[tagregator hashtag="#Voervadsbro"]');
    		?>
      </div>
    </div>

	</section>
<?php get_footer(); ?>
