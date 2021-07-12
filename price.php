<?php
/*
 * Template name: Price
 */

get_header(); ?>

    <?php
    $procedures = get_field('procedures');

    if (!empty($procedures) && is_array($procedures)):
    ?>
        <section class="s-price p-section pt-4">
            <div class="container">
                <?php if (!is_page('price')): ?>
                <div class="row justify-content-center mb-3">
                    <div class="col-4">
                        <a class="btn back-btn" onClick="history.back()" role="button">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="row">
                            <?php foreach ($procedures as $procedure): ?>
                                <div class="col-12 mb-3">
                                    <div class="procedure" style="background-image: url('<?php echo $procedure['image']; ?>')">
                                        <a class="procedure-link" href="<?php echo $procedure['link']; ?>">
                                            <h3 class="procedure-name"><?php echo $procedure['name']; ?></h3>
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