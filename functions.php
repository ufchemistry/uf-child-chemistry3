<?php
/* ----------------------------------------------------------------------------------- */
/* UF Theme (child) for Dept. of Chemistry. Created by smk: 10/2013
/* ----------------------------------------------------------------------------------- */


function childTest() {
	print("<h2>functions.php chldTest success!</h2>");
}

/*
TIP FOR THEME DEVELOPERS. The fact that a child theme’s functions.php is loaded first means that you can make the user functions of your theme pluggable —that is, replaceable by a child theme— by declaring them conditionally. E.g.:

if ( ! function_exists( 'theme_special_nav' ) ) {
    function theme_special_nav() {
        //  Do something.
    }
}

In that way, a child theme can replace a PHP function of the parent by simply declaring it beforehand. 
*/
?>
