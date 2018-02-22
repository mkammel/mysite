<?php
    //include 'functions.php';
    if($_SERVER['HTTP_HOST'] == 'localhost'){
        define('ROOT', '/newmatt/');

    }else{
        define('ROOT', '/');
    }

    define('PAGE', str_replace('.php', '', basename($_SERVER['PHP_SELF'])));

    switch(PAGE){
        case 'index':
            define('TITLE', 'mission');
            break;
        case 'portfolio':
            define('TITLE', 'portfolio');
            break;
        case 'expertise':
            define('TITLE', 'expertise');
            break;
        case 'experience':
            define('TITLE', 'experience');
            break;
        default:
            define('TITLE', 'mission');
    }

    function data_print($data){
        echo '<pre>'.print_r($data, true).'</pre>';
    }
