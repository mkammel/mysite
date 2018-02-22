<div class="col-md-3">
    <div class="mobile-hide">
        <a href="<?php echo ROOT; ?>">
            <svg id="logo" viewbox="0 0 177.46 286.52" width="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                    .logo-back {fill:#989898;}
                    .logo-front {fill:#c6c5c5;}
                    .letters {fill:#fff;}
                    </style>
                </defs>
                <title>Matt Kammel</title>
                <a href="#" onclick="alert('Welcome!')" id="banner-back">
                    <polygon class="logo-back" points="0 0 0 205.46 88.65 245.35 177.46 286.52 177.46 0 0 0"></polygon>
                </a>
                <polygon class="logo-front" points="177.46 -0.9 177.46 204.56 0 285.62 0 -0.9 177.46 -0.9"></polygon>
                <path id="mk" class="letters" d="M148.62,186.33v-.09a.06.06,0,0,1-.06.06h-5.5a1,1,0,0,1-1-.79,20.41,20.41,0,0,1-.25-3.07V92.54a.06.06,0,0,0-.11,0L93,141.05a.07.07,0,0,0,0,.09l17.66,17.66a2.75,2.75,0,0,1,.46,3.29l-2.37,4.24a.07.07,0,0,1-.1,0L91.76,149.48a.06.06,0,0,0-.11,0v36.12a.65.65,0,0,1-.65.65H85.53a.65.65,0,0,1-.65-.65v-36.4a.06.06,0,0,0-.11,0L68.27,165.63a1.11,1.11,0,0,1-1.57,0l-3.2-3.22a1.11,1.11,0,0,1,0-1.56l19.8-19.71a.07.07,0,0,0,0-.09L34.79,92.52a.06.06,0,0,0-.11,0v93.68a.06.06,0,0,1-.06.06H28a.06.06,0,0,1-.06-.06v-110a.06.06,0,0,1,.11,0l55.42,55.43,0,0,1.42,3V84.32a.07.07,0,0,1,.06-.07h6.65a.07.07,0,0,1,.06.07v48.35a.06.06,0,0,0,.11,0l56.75-56.49a.06.06,0,0,1,.11,0V180.47c0,.59,0,1.12,0,1.61.1,3.59.93,4.25.93,4.25Z"></path>
            </svg>
        </a>

        <nav id="desktop-nav" class="main-nav">
            <ul>
                <li class="<?php echo PAGE == 'index' && empty($SUBPAGE)?'active':''; ?>"><a href="<?php echo ROOT; ?>" rel="prefetch">mission</a><img src="<?php echo ROOT; ?>img/knot1.svg" /></li>
                <li class="<?php echo PAGE == 'portfolio' || !empty($SUBPAGE)?'active':''; ?>"><a href="<?php echo ROOT; ?>portfolio" rel="prefetch">portfolio</a><img src="<?php echo ROOT; ?>img/knot1.svg" /></li>
                <li class="<?php echo PAGE == 'expertise'?'active':''; ?>"><a href="<?php echo ROOT; ?>expertise" rel="prefetch">expertise</a><img src="<?php echo ROOT; ?>img/knot1.svg" /></li>
                <li class="<?php echo PAGE == 'experience'?'active':''; ?>"><a href="<?php echo ROOT; ?>experience" rel="prefetch">experience</a><img src="<?php echo ROOT; ?>img/knot1.svg" /></li>
            </ul>
        </nav>
    </div>

    <div class="desktop-hide">
        <div id="mobile-title">
            <h3><?php echo TITLE; ?></h3>
        </div>
        <div id="menu-toggle">
            <svg id="mobile-logo" viewbox="0 0 177.46 286.52" width="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                    .cls-1{fill:#989898;}
                    .cls-2{fill:#c6c5c5;}
                    .cls-3{fill:#fff;}
                    </style>
                </defs>
                <title>Matt Kammel</title>
                <polygon class="cls-1" points="0 0 0 205.46 88.65 245.35 177.46 286.52 177.46 0 0 0"></polygon>
                <polygon class="cls-2" points="177.46 -0.9 177.46 204.56 0 285.62 0 -0.9 177.46 -0.9"></polygon>
                <path id="mk" class="cls-3" d="M148.62,186.33v-.09a.06.06,0,0,1-.06.06h-5.5a1,1,0,0,1-1-.79,20.41,20.41,0,0,1-.25-3.07V92.54a.06.06,0,0,0-.11,0L93,141.05a.07.07,0,0,0,0,.09l17.66,17.66a2.75,2.75,0,0,1,.46,3.29l-2.37,4.24a.07.07,0,0,1-.1,0L91.76,149.48a.06.06,0,0,0-.11,0v36.12a.65.65,0,0,1-.65.65H85.53a.65.65,0,0,1-.65-.65v-36.4a.06.06,0,0,0-.11,0L68.27,165.63a1.11,1.11,0,0,1-1.57,0l-3.2-3.22a1.11,1.11,0,0,1,0-1.56l19.8-19.71a.07.07,0,0,0,0-.09L34.79,92.52a.06.06,0,0,0-.11,0v93.68a.06.06,0,0,1-.06.06H28a.06.06,0,0,1-.06-.06v-110a.06.06,0,0,1,.11,0l55.42,55.43,0,0,1.42,3V84.32a.07.07,0,0,1,.06-.07h6.65a.07.07,0,0,1,.06.07v48.35a.06.06,0,0,0,.11,0l56.75-56.49a.06.06,0,0,1,.11,0V180.47c0,.59,0,1.12,0,1.61.1,3.59.93,4.25.93,4.25Z"></path>
            </svg>
        </div>

        <nav id="mobile-nav" class="main-nav" style="z-index: -1;">
            <ul>
                <li class="<?php echo PAGE == 'index'?'active':''; ?>"><a href="<?php echo ROOT; ?>" rel="prefetch">mission</a><img src="<?php echo ROOT; ?>img/knot1.svg" /></li>
                <li class="<?php echo PAGE == 'portfolio'?'active':''; ?>"><a href="<?php echo ROOT; ?>portfolio" rel="prefetch">portfolio</a><img src="<?php echo ROOT; ?>img/knot1.svg" /></li>
                <li class="<?php echo PAGE == 'expertise'?'active':''; ?>"><a href="<?php echo ROOT; ?>expertise" rel="prefetch">expertise</a><img src="<?php echo ROOT; ?>img/knot1.svg" /></li>
                <li class="<?php echo PAGE == 'experience'?'active':''; ?>"><a href="<?php echo ROOT; ?>experience" rel="prefetch">experience</a><img src="<?php echo ROOT; ?>img/knot1.svg" /></li>
            </ul>
        </nav>
    </div>
</div>
