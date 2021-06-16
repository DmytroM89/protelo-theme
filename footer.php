    </div>

    <footer class="footer">
        <div class="container">
        <div class="footer-content">
            <h2>&copy; <?php echo get_bloginfo();?> | 2021</h2>
            <div class="socials d-flex justify-content-center justify-content-lg-between">
                <a href="https://www.instagram.com/protelo.dp/" class="d-flex" target="_blank">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="https://www.facebook.com/ProTelodp" class="d-flex" target="_blank">
                    <i class="fab fa-facebook-f fa-lg"></i>
                </a>
            </div>
        </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!-- Modal Callback -->
    <div class="modal fade c-modal" id="callbackModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close float-end" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-content">
                        <h3 class="form-title text-center"><?php pll_e('request_callback');?></h3>
                        <p class="form-subtitle text-center">
				            <?php pll_e('request_callback_text');?>
					    </p>
                        <?php
                        if (pll_current_language() == 'ru') {
                            echo do_shortcode('[contact-form-7 id="43" title="Обратный звонок"]');
                        }
                        if (pll_current_language() == 'ua') {
                            echo do_shortcode('[contact-form-7 id="44" title="Обратный звонок - UA"]');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Appointment -->
    <div class="modal fade a-modal" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close float-end" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-content">
                        <h4 class="form-title text-center"><?php pll_e('make_appointment');?></h4>
                        <p class="form-subtitle text-center">
				            <?php pll_e('make_appointment_text');?>
					    </p>
                        <?php
                        if (pll_current_language() == 'ru') {
                            echo do_shortcode('[contact-form-7 id="136" title="Запись на приём - Modal"]');
                        }
                        if (pll_current_language() == 'ua') {
                            echo do_shortcode('[contact-form-7 id="137" title="Запись на приём - Modal UA"]');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>