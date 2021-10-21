    <section class="s-contacts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php pll_e('contacts_title');?></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="call-us">
                        <h6><?php pll_e('call_us');?></h6>
                        <?php
                        $phones = get_field('phones', 'options');

                        foreach ($phones as $phone): ?>
                            <a href="tel:<?php echo $phone['number']; ?>"><?php echo $phone['number']; ?></a>
                        <?php endforeach; ?>
                    </div>
                    <div class="socials">
                        <h6><?php pll_e('we_socials');?></h6>
                        <div class="social-links">
                            <a href="https://www.instagram.com/protelo.dp/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/ProTelodp" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                    <div class="we-working">
                        <h6><?php pll_e('we_working');?></h6>
                        <p><?php the_field('work_days', 'options'); ?></p>
                        <p><?php the_field('address', 'options'); ?></p>
                    </div>
                </div>
                <div class="col-8">
                    <?php

                    $location = get_field('map', 'options');

                    if ( !empty($location) ): ?>
                        <script type="text/javascript">
                            var lat = '<?php echo $location['lat'];?>',
                                lng = '<?php echo $location['lng'];?>';
                        </script>

                        <div class="map" id="gmap"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    $post_id = get_the_ID();
    $postArr = array(37,801);

    if (in_array($post_id, $postArr)):
    ?>
    <!-- Section SEO text -->
    <section class="s-seo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="seo-container">
                        <div class="seo-text">
                            <p>ProTelo является одним из первых салонов в городе Днепр, который начал проводить диодную
                                лазерную эпиляцию. Мы изначально делали ставку на привлечение только высококвалифицированных
                                специалистов и использование надежного оборудования. Благодаря такому подходу нам удалось помочь
                                тысячам наших клиентов обрести красоту и привлекательность.</p>
                            <p>Придя в наш салон, вы ощутите уютную, практически домашнюю атмосферу, а дружелюбный и чуткий
                                персонал поможет выбрать необходимую услугу. Если вы никогда ранее не делали лазерную эпиляцию,
                                то
                                специалист подробно расскажет, как нужно подготовиться, чтобы получить качественный и при этом
                                безопасный результат.</p>
                            <h2>Современное оборудование для лазерной эпиляции</h2>
                            <p>Лазерная эпиляция должна проводиться только на надежном и качественном оборудовании. Это важное
                                правило, так как речь идет уже не просто о получаемом эффекте, а о безопасности для клиента. Мы
                                хорошо это понимаем, а потому используем только инновационные лазерные аппараты и технологии.
                                Тщательно следя за современными разработками в этой области, мы приобретаем самое новое и
                                качественное оборудование для эпиляции.</p>
                            <p>Более того, на сегодняшний момент в нашем салоне лазерной эпиляции доступен новый лазер DEKA,
                                выполняющий лазерную эпиляцию по технологии Moveo. Это отличный вариант для тех, кто не любит
                                ограничения. Не нужно думать о том, когда можно загорать, а когда нельзя. Не нужно бояться
                                возможных болезненных или неприятных ощущений во время лазерной эпиляции, так как их не будет
                                вовсе. К тому же, процедура становится доступной для людей с любым фототипом кожи и цветом
                                волос. </p>
                            <h2>Как подготовиться к диодной лазерной эпиляции</h2>
                            <p>Несмотря на то, что диодная лазерная эпиляция, по сути, относится к сфере косметологии, все же
                                данная процедура требует определенной подготовки. Ничего сложного в этом нет, просто необходимо
                                соблюсти несколько правил:</p>
                            <ul>
                                <li>За 2 недели до диодной лазерной эпиляции не загорать под прямым солнцем, а также не посещать
                                    солярий;
                                </li>
                                <li>В течение 3 недель до процедуры не проводить какие-либо иные виды депиляции, кроме бритья;
                                </li>
                                <li>Диодная лазерная эпиляция не совместима с приемом антибиотиков (тетрациклиновая группа) и
                                    фторхинолонов. За 2 недели до проведения процедуры следует исключить прием данных
                                    препаратов;
                                </li>
                                <li>Нельзя использовать тоники, дезодоранты и лосьоны, в состав которых входит спирт, за 3 дня
                                    до и в течение 3 дней после диодной лазерной эпиляции;
                                </li>
                                <li>Перед приходом на процедуру, следует тщательно побрить участок тела, на котором планируется
                                    проводить диодную лазерную эпиляцию. При этом нельзя использовать кремы, гели, дезодоранты и
                                    другие косметические средства после бритья.
                                </li>
                            </ul>
                            <p>Конечно, наш специалист проконсультирует вас более подробно во время записи на диодную лазерную
                                эпиляцию. Он также назначит вам график посещений, который необходимо соблюдать.</p>
                            <h2>Как ухаживать за кожей после диодной лазерной эпиляции</h2>
                            <p>Диодная лазерная эпиляция – это более щадящий процесс, чем использование того же электрического
                                эпилятора, после которого появляется раздражение и покраснение. Однако кожа все равно испытывает
                                некоторый стресс. Чтобы не навредить ей, следует исключить использование на данном участке кожи
                                спиртосодержащих косметических средств.</p>
                            <p>В течение 2 недель после диодной лазерной эпиляции стоит отказаться от загорания, будь это
                                солнечные ванны или солярий. Если процедура проходит в теплое время года, и участок тела открыт
                                для солнечных лучей, то лучше наносить солнцезащитное средство перед выходом на улицу.</p>
                            <p>В течение 2 суток после того, как была выполнена диодная лазерная эпиляция, нельзя принимать
                                горячую ванну или душ, и тем более нельзя посещать сауну. Также опасность представляют бассейны
                                и открытые водоемы.</p>
                            <p>Увлажняющие и питательные средства помогут коже быстрее восстановиться после диодной лазерной
                                эпиляции. Можно использовать «Бепантен» или «Пантенол. Оба препарата свободно продаются в
                                аптеках.</p>
                            <p>Более подробно про уход вам расскажет специалист после проведения диодной лазерной эпиляции.</p>
                            <h2>Доступность процедуры</h2>
                            <p>С финансовой точки зрения процедура диодной лазерной эпиляции в Днепре доступна всем, если
                                обратиться в салон Laser Dnepr. Что же касается медицинской точки зрения, то есть небольшой ряд
                                ограничений. Впрочем, некоторые из них носят временный характер. Вот основные противопоказания к
                                диодной лазерной эпиляции:</p>
                            <ul>
                                <li>Онкологические заболевания;</li>
                                <li>Инфекционные заболевания;</li>
                                <li>Дерматологические заболевания;</li>
                                <li>Заболевания иммунной системы;</li>
                                <li>Сахарный диабет, требующий прием инсулина;</li>
                                <li>Седые и светлые пушковые волосы;</li>
                                <li>Беременность и период лактации.</li>
                            </ul>
                            <p>Также диодная лазерная эпиляция не может быть проведена пациентам, если менее чем 3 месяца назад
                                в данной области тела выполнялась хирургическая операция. Помните, что красота не должна быть в
                                ущерб здоровью, это вам скажут в любом косметическом салоне Днепра, где персонал заботится о
                                своих клиентах. Лучше немного подождать, но быть уверенным в положительном результате, тем более
                                что в салоне лазерной эпиляции Laser Dnepr вас могут записать заранее на желаемую дату. Мы
                                находимся в центральном районе города Днепр, добраться к нам можно любым удобным для вас
                                способом.</p>
                        </div>
                        <button class="btn seo-btn"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Go To Top -->
    <a href="javascript:void(0);" class="scroll-up">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>

    <footer class="footer">
        <div class="footer-nav">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <?php
                        if (pll_current_language() == 'ru') {
                            wp_nav_menu("menu=ru");
                        }
                        if (pll_current_language() == 'ua') {
                            wp_nav_menu("menu=ua");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content">
            <p class="fs-18 mb-0">&copy; 2021 <?php echo get_bloginfo();?>. <?php pll_e('all_rights');?></p>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!-- Modal Callback -->
    <div class="modal fade c-modal" id="callbackModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </a>
                    <div class="form-content">
                        <h5 class="form-title text-center"><?php pll_e('request_callback');?></h5>
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
                <div class="modal-body">
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times fs-3"></i>
                    </a>
                    <div class="form-content">
                        <h5 class="form-title text-center"><?php pll_e('make_appointment');?></h5>
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

    <div class="cd-panel cd-panel--menu">
        <div class="cd-panel-container cd-panel-container--white">
            <header class="cd-panel-header">
                <a href="#0" class="cd-panel-close">Закрыть</a>
            </header>
            <div class="cd-panel-content">
                <div class="cd-panel-nav">
                    <?php
                    if (pll_current_language() == 'ru') {
                        wp_nav_menu("menu=ru");
                    }
                    if (pll_current_language() == 'ua') {
                        wp_nav_menu("menu=ua");
                    }
                    ?>
                </div>

                <ul class="language">
                    <?php pll_the_languages(array('dropdown'=>0, 'display_names_as'=>'slug')); ?>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>