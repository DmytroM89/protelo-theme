<?php
/*
 * Template name: Main
 */

get_header(); ?>

    <section class="s-main" style="background-image: url('<?php the_field('s-main-bg'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1><?php the_field('s-main-title'); ?></h1>
                    <p><?php the_field('s-main-description'); ?></p>
                    <a class="btn btn-warning btn-lg mt-5" href="#moreDetails" role="button"><?php pll_e('more_details');?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="s-slider" id="moreDetails">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider">
                        <?php
                        $textLeft = get_field('s-slider-tleft');

                        if (!empty($textLeft['title'])):
                        ?>
                        <div class="slider-item">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <h2><?php echo $textLeft['title']; ?></h2>
                                    <p class="mb-0 mb-lg-4"><?php echo $textLeft['description']; ?></p>
                                    <?php if (!empty($textLeft['appointment'])): ?>
                                    <button type="button" class="btn btn-warning btn-lg mt-3 mb-4 mb-lg-0" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                                        <?php echo $textLeft['appointment']; ?>
                                    </button>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <img src="<?php echo $textLeft['img']; ?>" class="img-fluid" alt="slider img">
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php
                        $textTop = get_field('s-slider-ttop');

                        if (!empty($textTop['title'])):
                        ?>
                        <div class="slider-item">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2><?php echo $textTop['title']; ?></h2>
                                    <p class="subtitle text-center"><?php echo $textTop['description']; ?></p>
                                    <img src="<?php echo $textTop['img']; ?>" class="img-fluid" alt="slider img">
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php
                        $textRight = get_field('s-slider-tright');

                        if (!empty($textRight['title'])):
                            ?>
                            <div class="slider-item">
                                <div class="row">
                                    <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                                        <img src="<?php echo $textRight['img']; ?>" class="img-fluid" alt="slider img">
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <h2><?php echo $textRight['title']; ?></h2>
                                        <p><?php echo $textRight['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        $beforeAfter = get_field('s-slider-ba');

                        if (!empty($beforeAfter['items']) && is_array($beforeAfter['items'])):
                        ?>
                            <div class="slider-item ba">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <h2 class="text-center"><?php echo $beforeAfter['title']; ?></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php foreach ($beforeAfter['items'] as $baItem): ?>
                                        <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                                            <div class="ba-title">
                                                <?php echo $baItem['icon']; ?>
                                                <h4><?php echo $baItem['title']; ?></h4>
                                            </div>
                                            <?php echo do_shortcode( '[compare]'.
                                                '<img src="' . $baItem['photo-before'] . '" alt="BEFORE">'.
                                                '<img src="' . $baItem['photo-after'] . '" alt="AFTER">'
                                                .'[/compare]'); ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        $advantages = get_field('s-slider-advantages');

                        if (!empty($advantages['items']) && is_array($advantages['items'])):
                        ?>
                        <div class="slider-item advantages">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-center"><?php echo $advantages['title']; ?></h2>
                                    <?php if (!empty($advantages['subtitle'])): ?>
                                    <p class="subtitle text-center"><?php echo $advantages['subtitle']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <?php foreach ($advantages['items'] as $item): ?>
                                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                                        <div class="advantages-item">
                                            <?php echo $item['icon']; ?>
                                            <p><b><?php echo $item['name']; ?></b> <br><?php echo $item['description']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php if (!empty($advantages['appointment'])): ?>
                            <div class="row d-flex justify-content-center mt-3 mt-md-5">
                                <div class="col-12 col-md-6 text-center">
                                    <button type="button" class="btn btn-warning  btn-lg mb-2" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                                        <?php echo $advantages['appointment']; ?>
                                    </button>
                                    <?php if (!empty($advantages['text_under_btn']) && !empty($advantages['appointment'])): ?>
                                    <p class="mb-0 fst-italic"><?php echo $advantages['text_under_btn']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>

                        </div>
                        <?php endif; ?>

                        <?php
                        $how = get_field('s-slider-how');

                        if (!empty($how['title'])):
                        ?>
                        <div class="slider-item">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-center"><?php echo $how['title']; ?></h2>
                                    <?php if (!empty($how['description'])): ?>
                                    <p class="subtitle text-center"><?php echo $how['description']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <video class="w-100" src="<?php echo $how['video']; ?>" controls></video>
                                </div>
                            </div>

                            <?php if (!empty($how['items']) && is_array($how['items'])): ?>
                            <div class="row">
                                <?php foreach ($how['items'] as $item): ?>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <img src="<?php echo $item['image']; ?>" class="img-fluid w-100" alt="how img">
                                    <p class="mt-3"><?php echo $item['description']; ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section SEO text -->
    <section class="s-seo">
        <div class="container">
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
    </section>

    <section class="s-appointment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><?php the_field('appointment-title', 'options'); ?></h2>
                    <p><?php the_field('appointment-description', 'options'); ?></p>
                </div>
            </div>

            <?php echo do_shortcode(get_field('appointment-form', 'options')); ?>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="appointment-reminder">
                        <p class="fw-bold"><?php the_field('appointment-reminder', 'options'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-map">
        <div class="map" id="gmap"></div>
    </section>

    <!-- Go To Top -->
    <a href="#" class="scroll-up">
        <i class="fas fa-chevron-up"></i>
    </a>

<?php get_footer(); ?>