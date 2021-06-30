<?php
/*

Template Name: Main Page

*/

get_header();

?>



<section class="section section--hero bg--image" style="background-image: url('<?php the_field('hero_image'); ?>');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center p-4">
				<div id="hero-text" class="p-4">
					<h3><?php the_field('hero_text_1'); ?></h3>
					<h3><?php the_field('hero_text_2'); ?></h3>
					<a href="<?php the_field('hero_link'); ?>" class="btn btn-primary mt-4">Megnézem</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section section--properties text-white">
	<div class="container bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/bg.jpg');">
		<div class="row justify-content-center text-center p-4">
			<div class="col-6 col-lg-3">
				<img src="<?php bloginfo('template_url') ?>/assets/img/icon-earth.png" alt="">
				<h3><?php the_field('icon_text_1'); ?></h3>
			</div>
			<div class="col-6 col-lg-3">
				<img src="<?php bloginfo('template_url') ?>/assets/img/icon-home.png" alt="">
				<h3><?php the_field('icon_text_2'); ?></h3>
			</div>
			<div class="col-6 col-lg-3">
				<img src="<?php bloginfo('template_url') ?>/assets/img/icon-ruler.png" alt="">
				<h3><?php the_field('icon_text_3'); ?></h3>
			</div>
			<div class="col-6 col-lg-3">
				<img src="<?php bloginfo('template_url') ?>/assets/img/icon-bulb.png" alt="">
				<h3><?php the_field('icon_text_4'); ?></h3>
			</div>
		</div>
	</div>
</section>
<section class="section mt-5" id="location">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 order-lg-2">
				<img src="<?php the_field('block_1_image'); ?>" alt="" class="img-fluid">
			</div>
			<div class="col-12 col-lg-6 order-lg-1">
			<?php the_field('block_1_text'); ?>
			</div>
		</div>
	</div>
</section>
<section class="section my-5">
	<div class="container bg--image text-white p-4" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/bg.jpg');">
		<div class="row p-2">
			<div class="col-12 col-lg-6">
				<img src="<?php the_field('block_2_image'); ?>" alt="" class="img-fluid">
			</div>
			<div class="col-12 col-lg-6 pl-2">
			<?php the_field('block_2_text'); ?>
			</div>
		</div>
	</div>
</section>
<section class="section my-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 order-lg-2">
				<img src="<?php the_field('block_3_image'); ?>" alt="" class="img-fluid">
			</div>
			<div class="col-12 col-lg-6 order-lg-1">
				<?php the_field('block_3_text'); ?>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container bg-white">
		<div class="row">
			<div class="col-12 col-lg-7">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?php the_field('slider_1'); ?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?php the_field('slider_2'); ?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?php the_field('slider_3'); ?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?php the_field('slider_4'); ?>" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
			<div class="col-12 col-lg-5">
				<div class="p-5">
					<?php the_field('slider_text'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section mt-5">
	<div class="container text-center">
		<?php the_field('services_text'); ?>
		<div class="row">
			<div class="col-12 col-lg-3">
				<div class="btn btn-secondary"><?php the_field('service_1'); ?></div>
			</div>
			<div class="col-12 col-lg-3">
				<div class="btn btn-secondary"><?php the_field('service_2'); ?></div>
			</div>
			<div class="col-12 col-lg-3">
				<div class="btn btn-secondary"><?php the_field('service_3'); ?></div>
			</div>
			<div class="col-12 col-lg-3">
				<div class="btn btn-secondary"><?php the_field('service_4'); ?></div>
			</div>
		</div>
	</div>
</section>
<section class="section my-5">
	<div class="container bg--image text-white text-center p-5" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/home-green.jpg');">
		<?php the_field('cta_block_text'); ?>
		<a href="<?php the_field('cta_block_link'); ?>" class="btn btn-primary mt-4">Nézd meg a teljes lakáslistát</a>
	</div>
</section>
<section class="section my-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<img src="<?php the_field('block_4_image'); ?>" alt="" class="img-fluid">
			</div>
			<div class="col-12 col-lg-6">
				<?php the_field('block_4_text'); ?>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container mb-5">
		<h2 class="text-center mx-5 mb-5"><?php the_field('video_text'); ?></h2>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-4">
				<iframe src="https://www.youtube.com/embed/<?php the_field('video_id_1'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img-fluid"></iframe>
			</div>
			<div class="col-12 col-lg-4">
				<iframe src="https://www.youtube.com/embed/<?php the_field('video_id_2'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img-fluid"></iframe>
			</div>
			<div class="col-12 col-lg-4">
				<iframe src="https://www.youtube.com/embed/<?php the_field('video_id_3'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img-fluid"></iframe>
			</div>
		</div>
	</div>
</section>
<section class="section section--testimonials">
	<div class="container my-5">
		<div class="row">
			<div class="col-12 col-lg-4">
				<div class="testimonial">
					<img src="<?php the_field('testimonial_image_1'); ?>" alt="">
					<p><?php the_field('testimonial_text_1'); ?></p>
					<p class="lead"><?php the_field('testimonial_name_1'); ?></p>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="testimonial">
					<img src="<?php the_field('testimonial_image_2'); ?>" alt="">
					<p><?php the_field('testimonial_text_2'); ?></p>
					<p class="lead"><?php the_field('testimonial_name_2'); ?></p>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="testimonial">
					<img src="<?php the_field('testimonial_image_3'); ?>" alt="">
					<p><?php the_field('testimonial_text_3'); ?></p>
					<p class="lead"><?php the_field('testimonial_name_3'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section section--contact mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<h2>Kapcsolat</h2>
				<p class="lead"><?php the_filed('cegnev'); ?></p>
				<p><span>Cím: </span><?php the_filed('cim'); ?></p>
				<p><span>Mobil: </span><a class="nolinkdecor" href="tel:<?php the_filed('mobil'); ?>"><?php the_filed('mobil'); ?></a></p>
				<p><span>Email: </span><a class="nolinkdecor" href="mailto:<?php the_filed('email'); ?>"><?php the_filed('email'); ?></a></p>
			</div>
			<div class="col-12 col-lg-6">
				<form action="">
					<div class="row mb-3">
						<div class="col-6">
							<label for="nameInput1" class="form-label">Név *</label>
							<input type="text" class="form-control" id="nameInput1">
						</div>
						<div class="col-6">
							<label for="nameInput1" class="form-label">&nbsp;</label>
							<input type="text" class="form-control" id="nameInput2">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-12">
							<label for="emailInput" class="form-label">Email *</label>
							<input type="email" class="form-control" id="emailInput">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-12">
							<label for="phoneInput" class="form-label">Telefonszám</label>
							<input type="text" class="form-control" id="phoneInput">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-12">
							<label for="messageInput" class="form-label">Megjegyzés</label>
							<textarea class="form-control" name="messageInput" id="messageInput" rows="10"></textarea>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-12 col-lg-9">
							<input type="checkbox" class="form-check-input" id="acceptPolicy">
							<label class="form-check-label" for="acceptPolicy">Elfogadom az Adatkezelési nyilatkozatot *</label>
						</div>
						<div class="col-12 col-lg-3">
							<button type="submit" class="btn btn-submit">Elküld</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
