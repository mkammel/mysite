<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>
</head>
<body id="expertise-page">
    <div class="container">
        <img src="img/middle.svg" class="middle-knot" />
        <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="row">
            <?php include 'includes/nav.php'; ?>

            <div class="col-md-6 content">
                <div class="col-sm-6 expertise-item">
                    <h3>Illustrator</h3>
                    <?php
                        $full = 225;
                        $angle = 11;

                        $illustrator = 0.90 * $full;
                        $uidesign = 0.75 * $full;
                        $photoshop = 0.70 * $full;
                        $iconography = 0.80 * $full;
                        $indesign = 0.80 * $full;
                        $illustration = 0.60 * $full;
                        $htmlcss = 0.40 * $full;
                        $infodesign = 0.80 * $full;
                    ?>
                    <div class="svg-wrapper">
                        <svg id="illustrator" viewbox="0 0 237.55 38.86" xmlns="http://www.w3.org/2000/svg">
                            <title>Illustrator</title>
                            <rect class="cls-1" height="38.86" width="237.55"></rect>
                            <rect class="cls-2" height="20.51" width="210" x="15" y="8.63"></rect>
                            <polygon class="cls-3" points="">
                                <animate attributeName="points" begin="250ms" dur="1s" from="190.71 29.14 12.83 29.14 12.83 8.63 26 8.63 15 29.14" to="190.71 29.14 12.83 29.14 12.83 8.63 <?php echo $illustrator; ?> 8.63 <?php echo ($illustrator - $angle); ?> 29.14" fill="freeze" repeatCount="1" />
                            </polygon>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-6 expertise-item">
                    <h3>UI/UX Design</h3>
                    <div class="svg-wrapper">
                        <svg id="uidesign" viewbox="0 0 237.55 38.86" xmlns="http://www.w3.org/2000/svg">
                            <title>UI / UX Design</title>
                            <rect class="cls-1" height="38.86" width="237.55"></rect>
                            <rect class="cls-2" height="20.51" width="210" x="15" y="8.63"></rect>
                            <polygon class="cls-3" points="">
                                <animate attributeName="points" begin="250ms" dur="1s" from="190.71 29.14 12.83 29.14 12.83 8.63 26 8.63 15 29.14" to="190.71 29.14 12.83 29.14 12.83 8.63 <?php echo $uidesign; ?> 8.63 <?php echo ($uidesign - $angle); ?> 29.14" fill="freeze" repeatCount="1" />
                            </polygon>
                        </svg>
                    </div>
                </div>

                <div class="col-sm-6 expertise-item">
                    <h3>Photoshop</h3>
                    <div class="svg-wrapper">
                        <svg id="photoshop" viewbox="0 0 237.55 38.86" xmlns="http://www.w3.org/2000/svg">
                            <title>Photoshop</title>
                            <rect class="cls-1" height="38.86" width="237.55"></rect>
                            <rect class="cls-2" height="20.51" width="210" x="15" y="8.63"></rect>
                            <polygon class="cls-3" points="">
                                <animate attributeName="points" begin="250ms" dur="1s" from="190.71 29.14 12.83 29.14 12.83 8.63 26 8.63 15 29.14" to="190.71 29.14 12.83 29.14 12.83 8.63 <?php echo $photoshop; ?> 8.63 <?php echo ($photoshop - $angle); ?> 29.14" fill="freeze" repeatCount="1" />
                            </polygon>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-6 expertise-item">
                    <h3>Iconography</h3>
                    <div class="svg-wrapper">
                        <svg id="iconography" viewbox="0 0 237.55 38.86" xmlns="http://www.w3.org/2000/svg">
                            <title>Iconography</title>
                            <rect class="cls-1" height="38.86" width="237.55"></rect>
                            <rect class="cls-2" height="20.51" width="210" x="15" y="8.63"></rect>
                            <polygon class="cls-3" points="">
                                <animate attributeName="points" begin="250ms" dur="1s" from="190.71 29.14 12.83 29.14 12.83 8.63 26 8.63 15 29.14" to="190.71 29.14 12.83 29.14 12.83 8.63 <?php echo $iconography; ?> 8.63 <?php echo ($iconography - $angle); ?> 29.14" fill="freeze" repeatCount="1" />
                            </polygon>
                        </svg>
                    </div>
                </div>

                <div class="col-sm-6 expertise-item">
                    <h3>Indesign</h3>
                    <div class="svg-wrapper">
                        <svg id="indesign" viewbox="0 0 237.55 38.86" xmlns="http://www.w3.org/2000/svg">
                            <title>Indesign</title>
                            <rect class="cls-1" height="38.86" width="237.55"></rect>
                            <rect class="cls-2" height="20.51" width="210" x="15" y="8.63"></rect>
                            <polygon class="cls-3" points="">
                                <animate attributeName="points" begin="250ms" dur="1s" from="190.71 29.14 12.83 29.14 12.83 8.63 26 8.63 15 29.14" to="190.71 29.14 12.83 29.14 12.83 8.63 <?php echo $indesign; ?> 8.63 <?php echo ($indesign - $angle); ?> 29.14" fill="freeze" repeatCount="1" />
                            </polygon>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-6 expertise-item">
                    <h3>Illustration</h3>
                    <div class="svg-wrapper">
                        <svg id="illustration" viewbox="0 0 237.55 38.86" xmlns="http://www.w3.org/2000/svg">
                            <title>Illustration</title>
                            <rect class="cls-1" height="38.86" width="237.55"></rect>
                            <rect class="cls-2" height="20.51" width="210" x="15" y="8.63"></rect>
                            <polygon class="cls-3" points="">
                                <animate attributeName="points" begin="250ms" dur="1s" from="190.71 29.14 12.83 29.14 12.83 8.63 26 8.63 15 29.14" to="190.71 29.14 12.83 29.14 12.83 8.63 <?php echo $illustration; ?> 8.63 <?php echo ($illustration - $angle); ?> 29.14" fill="freeze" repeatCount="1" />
                            </polygon>
                        </svg>
                    </div>
                </div>

                <div class="col-sm-6 expertise-item">
                    <h3>HTML/CSS</h3>
                    <div class="svg-wrapper">
                        <svg id="html-css" viewbox="0 0 237.55 38.86" xmlns="http://www.w3.org/2000/svg">
                            <title>HTML/CSS</title>
                            <rect class="cls-1" height="38.86" width="237.55"></rect>
                            <rect class="cls-2" height="20.51" width="210" x="15" y="8.63"></rect>
                            <polygon class="cls-3" points="">
                                <animate attributeName="points" begin="250ms" dur="1s" from="190.71 29.14 12.83 29.14 12.83 8.63 26 8.63 15 29.14" to="190.71 29.14 12.83 29.14 12.83 8.63 <?php echo $htmlcss; ?> 8.63 <?php echo ($htmlcss - $angle); ?> 29.14" fill="freeze" repeatCount="1" />
                            </polygon>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-6 expertise-item">
                    <h3>Info Design</h3>
                    <div class="svg-wrapper">
                        <svg id="info-design" viewbox="0 0 237.55 38.86" xmlns="http://www.w3.org/2000/svg">
                            <title>Info Design</title>
                            <rect class="cls-1" height="38.86" width="237.55"></rect>
                            <rect class="cls-2" height="20.51" width="210" x="15" y="8.63"></rect>
                            <polygon class="cls-3" points="">
                                <animate attributeName="points" begin="250ms" dur="1s" from="190.71 29.14 12.83 29.14 12.83 8.63 26 8.63 15 29.14" to="190.71 29.14 12.83 29.14 12.83 8.63 <?php echo $infodesign; ?> 8.63 <?php echo ($infodesign - $angle); ?> 29.14" fill="freeze" repeatCount="1" />
                            </polygon>
                        </svg>
                    </div>
                </div>

				<img src="img/knot3.svg" class="content-knot mobile-hide" style="padding-top: 5%" />


                <?php include 'includes/copyright.php'; ?>
            </div>

            <?php include 'includes/contact-info.php'; ?>
        </div>
    </div>

    <script>

    </script>
    <?php include 'includes/footer.php'; ?>
