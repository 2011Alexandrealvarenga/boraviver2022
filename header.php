<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TWMK2QJ');</script>
    <!-- End Google Tag Manager -->
    <title>Bora Viver</title>
    <meta charset="<?php bloginfo('charset');?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png" />
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<!-- libras inicio -->
    <div vw class="enabled">
			<div vw-access-button class="active"></div>
			<div vw-plugin-wrapper>
				<div class="vw-plugin-top-wrapper"></div>
			</div>
		</div>
	<!-- libras fim -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWMK2QJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
            <?php get_template_part('template-parts/acessibility') ?>
            <?php get_template_part('template-parts/menu') ?>   
            
    </header>

