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

		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title></title>
		
        <?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>

        <script type="text/javascript">
            let postId = <?php echo get_the_ID(); ?>;
        </script>
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

			<header class="header" id="top">
                <div class="container">
                    <div class="header-inner">
                        <a href="/" class="logo me-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/protelo_logo.jpg" alt="logo">
                        </a>
                        <div class="contacts">
                            <?php
                                $phones = get_field('phones', 'options');
                                $email = get_field('email', 'options');
                                $lang = get_field('language', 'options');

                                $i = 1;
                                if (is_array($phones) && !empty($phones)):
                            ?>
                                <div class="phone">
                                    <i class="fas fa-phone fa-flip-horizontal me-2"></i>
                                    <?php foreach ($phones as $phone) :?>
                                        <?php if ($i < count($phones)) : ?>
                                            <a href="tel:<?php echo $phone['phone'] ?>">
                                                <?php echo $phone['phone'] ?>,
                                            </a>
                                        <?php else: ?>
                                            <a href="tel:<?php echo $phone['phone'] ?>">
                                                <?php echo $phone['phone'] ?>
                                            </a>
                                        <?php endif; $i++;?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($email): ?>
                            <div class="email">
                                <i class="fas fa-envelope me-2"></i>
                                <a href="mail:<?php echo $email ?>"><?php echo $email ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="spacer"></div>
                        <button type="button" class="btn btn-warning btn-lg btn-callback-md" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</button>
                        <button type="button" class="btn btn-warning btn-callback-xs" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <i class="fas fa-phone-volume"></i>
                        </button>
                        <?php if ($lang == 1): ?>
                        <div class="lang-select">
                            <div id="currentLang"><?php echo pll_current_language();?></div>
                            <ul class="language-chooser">
                                <?php pll_the_languages(array('dropdown'=>0, 'display_names_as'=>'slug', 'hide_current'=>1)); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </header>
