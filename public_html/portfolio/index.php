<?php
	$ROOT = '../';
	include $ROOT.'includes/config.php';

	function portfolioItem($item) {
		echo '<div class="col-sm-6 col-md-12 col-lg-6">
				<a href="'.ROOT.'portfolio/'.$item['link'].'/">
					<div class="portfolio-item" style="background-image: url('.ROOT.'img/portfolio/'.$item['img'].');">
						<div class="overlay">
							<div class="title">
								<h1>'.$item['type'].'</h1>
								<h2>'.$item['title'].'</h2>

							</div>
						</div>
					</div>
				</a>
			</div>';
	}

	$portfolio_items = array(
		//first portfolio item
		array(
			'link' => 'oakhearth',
			'img' => 'oak1.jpg',
			'title' => 'oakhearth',
			'type' => 'branding'
		),
		array(
			'link' => 'cache',
			'img' => 'cache1.jpg',
			'title' => 'cache',
			'type' => 'app design'
		),
		array(
			'link' => 'whether',
			'img' => 'whether1.jpg',
			'title' => 'whether',
			'type' => 'app design'
		),
		array(
			'link' => 'oakhearth',
			'img' => 'santi1.jpg',
			'title' => 'santisima flor de lupolo',
			'type' => 'logo design'
		),
		array(
			'link' => 'byterfyter',
			'img' => 'bf1.jpg',
			'title' => 'byter fyter',
			'type' => 'game design'
		),
		array(
			'link' => 'cookingtower',
			'img' => 'cook1.jpg',
			'title' => 'CookingTower',
			'type' => 'game design'
		)
	);
?>
        <?php include $ROOT.'includes/header.php'; ?>
    </head>
    <body id="portfolio-page">
        <div class="container">
            <img src="<?php echo $ROOT; ?>img/middle.svg" class="middle-knot" />
            <!--[if lt IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <div class="row">
                <?php include $ROOT.'includes/nav.php'; ?>

                <div class="col-md-6 content" >
                    <div id="portfolio-wrapper" class="row">
						<?php
							foreach($portfolio_items as $item){
								portfolioItem($item);
							}
						?>
                    </div>

                    <div class="clearfix"></div>

                    <h1 class="thank-you"><span>Thanks</span> for viewing<span>!</span></h1>

					<img src="<?php echo $ROOT; ?>img/knot2.svg" class="content-knot mobile-hide" />

                    <?php include $ROOT.'includes/copyright.php'; ?>
                </div>

                <?php include $ROOT.'includes/contact-info.php'; ?>
            </div>
        </div>
        <?php include $ROOT.'includes/footer.php'; ?>
