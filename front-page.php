<?php get_header(); ?>


<div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>Syoncode Canada</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">A technology company.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h2>Dios tiene un proposito para tu vida!</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h2>New Page Syoncode</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>This is our big Tagline!</h2>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
</div>

<section class="testimonials">
	
	<article class="testimonial">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/one.png">
		</figure>
		<h1>Name Lastname</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
	</article>
	<article class="testimonial">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/two.png">
		</figure>
		<h1>Name Lastname</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
	</article>
	<article class="testimonial">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/three.png">
		</figure>
		<h1>Name Lastname</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
	</article>
</section>


<section class="skills">
	
	<article class="skill">
		<i class="material-icons">developer_mode</i>
		<h1>Development</h1>
	</article>
	<article class="skill">
		<figure>
			<i class="material-icons">format_shapes</i>
		</figure>
		<h1>Design</h1>
	</article>
	<article class="skill">
		<i class="material-icons">touch_app</i>
		<h1>Social Media</h1>
	</article>
</section>

<section class="companies">

	<figure class="company">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/one.png">
	</figure>
	<figure class="company">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/two.png">
	</figure>
	<figure class="company">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/three.png">
	</figure>
</section>










<?php get_footer(); ?>