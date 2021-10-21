<?php get_header(); ?>
<section class="s-404 m-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1 class="text-center">Страница не найдена 404</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?php echo get_home_url(); ?>" role="button" class="btn btn-warning btn-lg">
                <?php pll_e('home_page');?>
            </a>
        </div>
    </div>
</section>