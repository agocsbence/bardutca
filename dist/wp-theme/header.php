<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8" />
	<title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); echo ' | '; echo get_bloginfo('name'); }?></title>
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/custom.css" type="text/css" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/magnific-popup.css" type="text/css" />

	<link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
	<link href="webclip.png" rel="apple-touch-icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="container-fluid">
            <nav class="navbar navbar-dark fixed-top navbar-expand-lg">
                <div class="container">
					<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('template_url') ?>/assets/img/logo.jpg" alt="Bárd utca 3." class="img-fluid logo">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
							<ul class="navbar-nav mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" href="<?php echo get_permalink(1517); ?>">Lakások</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo get_home_url(); ?>#location">Elhelyezkedés</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo get_permalink(1736); ?>">Galéria</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo get_permalink(1565); ?>">Projektjeink</a>
								</li>
								<li class="nav-item dropdown">
									<!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projektjeink</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?php // echo get_permalink(1565); ?>">Pacific Park</a></li>
										<li><a class="dropdown-item" href="<?php // echo get_permalink(1565); ?>">Green Median Residence</a></li>
										<li><a class="dropdown-item" href="<?php // echo get_permalink(1565); ?>">Tolnai 38</a></li>
										<li><a class="dropdown-item" href="<?php // echo get_permalink(1565); ?>">Natura Residence</a></li>
									</ul> -->
								</li>
                                <li class="nav-item">
                                    <a href="tel:" class="nav-link">
                                        <img src="<?php bloginfo('template_url') ?>/assets/img/header-mobil.png" alt="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <img src="<?php bloginfo('template_url') ?>/assets/img/header-facebook.png" alt="">
                                    </a>
                                </li>
							</ul>
					</div>
                </div>
            </nav>
        </div>
	</header>
	<main>