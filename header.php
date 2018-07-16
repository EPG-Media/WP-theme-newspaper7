<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    wp_head(); /** we hook up in wp_booster @see td_wp_booster_functions::hook_wp_head */
    ?>
</head>

<body <?php body_class() ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">
	
<!-- Olytics -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
 
<link rel="stylesheet" href="https://olytics.omeda.com/olytics/css/v1/p/olytics.css" />
 
<script type="text/javascript">                  
 
// olytics Connection Javascript
!function(){var t=window.olytics=window.olytics||{};if(t.isLoaded)console.warn("olytics segment connection: olytics segment import may have been included twice!");else{if("undefined"==typeof analytics||!analytics||!analytics.invoked)console.warn("olytics segments: Could not find the olytics analytics.js import that ends with an analytics.load call.This will be different then the olytics segment import.");t.included=!0,t.connect=function(t){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.id="olyticsImport",e.setAttribute("data-oid",t),e.src=("https:"===document.location.protocol?"https://":"http://")+"olytics.omeda.com/olytics/js/v1/p/olytics.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(e,i)},
t.connect("a751b7cac2d04157b07b7c7da3c08d43")}}();
</script>
	
<!-- AAM Site Certifier starts plowing -->
	<script type="text/javascript">
	    ;(function(p,l,o,w,i,n,g){if(!p[i]){p.GlobalAamNamespace=p.GlobalAamNamespace||[];
	    p.GlobalAamNamespace.push(i);p[i]=function(){(p[i].q=p[i].q||[]).push(arguments)
	    };p[i].q=p[i].q||[];n=l.createElement(o);g=l.getElementsByTagName(o)[0];n.async=1;
	    n.src=w;g.parentNode.insertBefore(n,g)}}(window,document,"script","//aamcftag.aamsitecertifier.com/aam.js","aamsitecertifier"));

	    window.aamsitecertifier('newTracker', 'cf', 'aamcf.aamsitecertifier.com', {
	        idWeb: '275'
	    });

	    window.aamsitecertifier('trackPageView');
	</script>
 <!-- AAM Site Certifier stops plowing -->
    <?php /* scroll to top */?>
    <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>
    
    <?php locate_template('parts/menu-mobile.php', true);?>
    <?php locate_template('parts/search.php', true);?>
    
    
    <div id="td-outer-wrap">
    <?php //this is closing in the footer.php file ?>

        <?php
        /*
         * loads the header template set in Theme Panel -> Header area
         * the template files are located in ../parts/header
         */
        td_api_header_style::_helper_show_header();

        do_action('td_wp_booster_after_header'); //used by unique articles