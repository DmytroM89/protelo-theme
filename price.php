<?php
/*
 * Template name: Price
 */

get_header(); ?>

<?php
$procedures = get_field('procedures');

if (!empty($procedures) && is_array($procedures)):
?>
    <div class="breadcrumbs d-flex mb-5 text-secondary justify-content-center">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>

    <section class="s-price">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php pll_e('price');?></h2>
                </div>
            </div>
            <?php if (!is_page('price')): ?>
            <div class="row justify-content-center mb-3">
                <div class="col-12 col-md-8">
                    <a class="btn back-btn" onClick="history.back()" role="button">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </div>
            </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <?php foreach ($procedures as $procedure): ?>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="procedure">
                                    <a class="procedure-link" href="<?php echo $procedure['link']; ?>">
                                        <h4 class="procedure-name"><?php echo $procedure['name']; ?></h4>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>