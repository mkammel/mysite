<?php include 'includes/config.php'; ?>
    <?php include 'includes/header.php'; ?>

    <style>
        #logo #mk {
            stroke: #ffffff;
            stroke-width: 3px;
            stroke-miterlimit: 10;
        }
    </style>
</head>
<body id="mission-page">

    <div class="container">
        <img src="img/middle.svg" class="middle-knot" />
        <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="row">

            <?php include 'includes/nav.php'; ?>

            <div class="col-md-6 content">
                <h1>my name is <span>matt kammel</span>.<br />I am an <span>interface designer</span><br />living in <span>madison</span>, <span>wisconsin</span></h1>

                <h2>I'm fascinated with <span class="interaction">interaction</span>, <span class="input">input</span>, and <span class="response">response</span>.</h2>

                <img src="img/knot2.svg" class="content-knot mobile-hide" />

                
                <?php include 'includes/copyright.php'; ?>
            </div>

            <?php include 'includes/contact-info.php'; ?>

        </div>
    </div>

    <script>

        jQuery(document).ready(function($){
            $('#mission-page span.input').click(function(e){
                $('#mission-page span.response').toggleClass('active');
            })
        });

        (function() {
            var myAnimation = new DrawFillSVG({
              elementId: "logo"
            });
          })();
    </script>
    <?php include 'includes/footer.php'; ?>
