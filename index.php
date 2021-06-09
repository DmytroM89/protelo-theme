<?php
/*
 * Template name: Main
 */

get_header(); ?>

    <section class="s-main"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/protelo_baner.png')">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Neque porro quisquam est qui dolorem ipsum quia</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in libero a nisl eleifend mattis.
                        Curabitur id pretium elit, non mattis libero. Sed vulputate sed nulla quis commodo. Proin
                        fermentum euismod purus, in rhoncus purus dignissim in.</p>
                    <button type="button" class="btn btn-warning mt-5">Подробнее</button>
                </div>
            </div>
        </div>
    </section>

    <section class="s-slider py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider">
                        <div class="slider-item">
                            <div class="row">
                                <div class="col-4">
                                    <h2>Коррекция Целлюлита Задняя поверхность Бедра</h2>
                                    <p>Аппаратная коррекция фигуры Vela Shape. В данном случае - устранение эффекта
                                        "Апельсиновой корки" на задней поверхности бедра. Результат виден уже после 1й
                                        процедуры.<br>Полный курс составит от 5ти до 10ти процедур.<br>Процедуры можно
                                        выполнять 2-3 раза в неделю.</p>
                                    <button type="button" class="btn btn-warning mt-3">Записаться</button>
                                </div>
                                <div class="col-8">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/protelo_slider_1.jpg" class="img-fluid" alt="slider img">
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="row flex-column text-center">
                                <h2>Коррекция Целлюлита Задняя поверхность Бедра</h2>
                                <p>Aenean in diam eleifend, pellentesque ipsum quis, sollicitudin nulla.</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/protelo_slider_1.jpg" class="img-fluid" alt="slider img">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="row flex-column text-center">
                                <h2>Коррекция Целлюлита Задняя поверхность Бедра</h2>
                                <p>Aenean in diam eleifend, pellentesque ipsum quis, sollicitudin nulla.</p>
                                <video src="<?php echo get_template_directory_uri(); ?>/assets/images/categories-title.mp4" controls></video>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="row flex-column align-items-center">
                                <div class="col-12 col-md-6">
                                    <h2 class="text-center">Morbi at ipsum nunc.</h2>
                                    <ul>
                                        <li>Aenean in diam eleifend</li>
                                        <li>Aenean in diam eleifend, pellentesque ipsum quis</li>
                                        <li>Pellentesque sit amet justo massa.</li>
                                        <li>Pellentesque sit amet justo massa.</li>
                                        <li>Pellentesque sit amet justo massa.</li>
                                        <li>Pellentesque sit amet justo massa.</li>
                                    </ul>
                                    <div class="mt-3 d-flex align-items-center justify-content-center">
                                        <button type="button" class="btn btn-warning ">Записаться</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>