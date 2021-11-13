<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="Cache-Control" content="public">
        <meta http-equiv="Cache-Control" content="no-store">
        <meta http-equiv="Cache-Control" content="max-age=34700">
        <meta name="facebook-domain-verification" content="iv576zw63v9nowmif6tkbwv000oogq" />

		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		
        <?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>

		<style type="text/css">
            #page-preloader {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                position: fixed;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                width: 100vw;
                height: 100vh;
                background: #000000;
                z-index: 100500;
            }
            #page-preloader.hide {
                opacity: 0;
                transition: opacity .6s ease-in-out;
            }
            #page-preloader img {
                width: 150px;
            }
            #page-preloader .fa-circle-notch {
                position: absolute;
                top: 55%;
                color: #FFF;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>

        <script type="text/javascript">
            let postId = <?php if (get_the_ID() > 0) {echo get_the_ID();} else {echo 0;}  ?>;

            /**
             * Loader
             */
            window.onload = function() {
                var loader = document.querySelector('#page-preloader');
                loader.classList.add('hide');
                setInterval(function () {
                    loader.classList.add('d-none');
                }, 500);
            };
        </script>
	</head>
	<body ontouchstart="">

        <div id="page-preloader">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/protelo_logo.jpg" alt="protelo_logo">
            <i class="fas fa-circle-notch fa-2x"></i>
        </div>

		<div class="wrapper">

			<header class="header" id="top">
                <div class="container">
                    <div class="header-inner">
                        <a href="<?php echo get_home_url(); ?>" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/protelo_logo.jpg" alt="logo">
                        </a>

                        <?php
                            if (pll_current_language() == 'ru') {
                                wp_nav_menu("menu=ru");
                            }
                            if (pll_current_language() == 'ua') {
                                wp_nav_menu("menu=ua");
                            }
                        ?>

                        <?php
                            $lang = get_field('lang', 'options');
                            if ($lang == 1):
                        ?>
                        <ul class="language">
                            <?php pll_the_languages(array('dropdown'=>0, 'display_names_as'=>'slug')); ?>
                        </ul>
                        <?php endif; ?>

                        <a href="#" class="menu-btn">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </header>
