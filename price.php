<?php
/*
 * Template name: Price
 */

get_header(); ?>

    <?php
    $procedures = get_field('procedures');

    if (!empty($procedures) && is_array($procedures)):
    ?>
        <section class="s-price p-section">
            <div class="container">
                <div class="row">
                    <?php foreach ($procedures as $procedure): ?>
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="procedure" style="background-image: url('<?php echo $procedure['image']; ?>')">
                                <a class="procedure-link" href="<?php echo $procedure['link']; ?>">
                                    <h3 class="procedure-name"><?php echo $procedure['name']; ?></h3>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php get_footer(); ?>