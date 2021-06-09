<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<meta http-equiv="Cache-Control" content="public">
		<meta http-equiv="Cache-Control" content="no-store">
		<meta http-equiv="Cache-Control" content="max-age=34700">

		<meta name="format-detection" content="telephone=no">

		<title>
		<?php echo wp_title(''); ?>
		</title>
		
        <?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>

		<style type="text/css">
            #page-preloader {
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
            #page-preloader .fa-spinner {
                position: absolute;
                left: 50%;
                top: 50%;
                margin: -25px 0 0 -25px;
                color: #FFF;
                text-align: center;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>
		
	</head>
	<body ontouchstart="">

        <div id="page-preloader">
            <i class="fas fa-spinner fa-3x"></i>
        </div>

		<div class="wrapper">

			<header class="header">
                <div class="container">
                    <div class="header-inner">
                        <a href="/" class="logo me-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/protelo_logo.jpg" alt="logo">
                        </a>
                        <div class="contacts d-flex align-items-center">
                            <div class="phone"><a href="tel:096 938 96 48">096 938 96 48</a></div>
                            <div class="email"><a href="mail:protelo@gmail.com">protelo@gmail.com</a></div>
                        </div>
                        <div class="spacer"></div>
                        <button type="button" class="btn btn-warning btn-callback" data-toggle="modal" data-target="#callbackModal">Обратный звонок</button>
                    </div>
                </div>
            </header>
