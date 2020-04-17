
<?php
/*
Template Name: Шаблон - Профессия
*/
?>

<?php get_header(); ?>
<main class="main">
    <div class="container">
        <?php echo breadcrumb( ' | ' ); ?>
    </div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else : ?>
        
<?php endif; ?>
<section class="info">
            <div class="container">
                <div class="row ">
                    <div class="col-12 d-flex flex-wrap">
                        <div class="info__block">
                            <div class="info-title">Когда</div>
                            <div class="info-descr">февраль - март 2020 г</div> 
                        </div>
                        <div class="info__block">
                            <div class="info-title">формат обучения</div>
                            <div class="info-descr">Онлайн / офлайн</div> 
                        </div>
                        <div class="info__block">
                            <div class="info-title">Уровень</div>
                            <div class="info-descr">С нуля</div> 
                        </div>
                    </div>
                </div>
            </div>
</section>
<section class="program program_prof">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        Программа курса
                    </div>
                </div>
                <div class="col-12">
                    <ol class="program__item" id="myTab" role="tablist">
                        <div class="col-12 col-lg-10 m-auto m-xl-0 col-xl-6">
                            <div class="item">
                                <li >Определение стратегии интернет-маркетинга</li>
                                <div class="text ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora odio aliquid aspernatur, labore nisi ex officiis. Totam inventore eum cumque dignissimos, dolorem possimus, nobis exercitationem, ipsam fugiat praesentium sit.Deserunt voluptas tempora omnis pariatur commodi aliquid dolores nihil? Quis praesentium voluptas sapiente. Quasi facilis non, aliquam dolore fugiat quisquam sit? Earum ab dolorem recusandae? Iure mollitia dolorum quia vero!
                                </div>
                            </div>
                            <div class="item">
                                <li>Поисковая оптимизация (SEO) и SERM</li>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora odio aliquid aspernatur, labore nisi ex officiis. Totam inventore eum cumque dignissimos, dolorem possimus, nobis exercitationem, ipsam fugiat praesentium sit.Deserunt voluptas tempora omnis pariatur commodi aliquid dolores nihil? Quis praesentium voluptas sapiente. Quasi facilis non, aliquam dolore fugiat quisquam sit? Earum ab dolorem recusandae? Iure mollitia dolorum quia vero!
                                </div>
                            </div>
                            <div class="item"> 
                                <li>Контекстная реклама (Яндекс Директ и Google Ads)</li>
                                <div class="text ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora odio aliquid aspernatur, labore nisi ex officiis. Totam inventore eum cumque dignissimos, dolorem possimus, nobis exercitationem, ipsam fugiat praesentium sit.Deserunt voluptas tempora omnis pariatur commodi aliquid dolores nihil? Quis praesentium voluptas sapiente. Quasi facilis non, aliquam dolore fugiat quisquam sit? Earum ab dolorem recusandae? Iure mollitia dolorum quia vero!
                                </div>
                            </div>
                            <div class="item">
                                <li>E-mail маркетинг, агрегаторы, отзовики</li>
                                <div class="text ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora odio aliquid aspernatur, labore nisi ex officiis. Totam inventore eum cumque dignissimos, dolorem possimus, nobis exercitationem, ipsam fugiat praesentium sit.Deserunt voluptas tempora omnis pariatur commodi aliquid dolores nihil? Quis praesentium voluptas sapiente. Quasi facilis non, aliquam dolore fugiat quisquam sit? Earum ab dolorem recusandae? Iure mollitia dolorum quia vero!
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-10 m-auto m-xl-0 col-xl-6">
                            <div class="item">
                                <li>Продвижение в социальных сетях (SMM)</li>
                                <div class="text ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora odio aliquid aspernatur, labore nisi ex officiis. Totam inventore eum cumque dignissimos, dolorem possimus, nobis exercitationem, ipsam fugiat praesentium sit.Deserunt voluptas tempora omnis pariatur commodi aliquid dolores nihil? Quis praesentium voluptas sapiente. Quasi facilis non, aliquam dolore fugiat quisquam sit? Earum ab dolorem recusandae? Iure mollitia dolorum quia vero!
                                </div>
                            </div>
                            <div class="item">
                                <li>Сайты, лендинги, посадочные страницы</li>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora odio aliquid aspernatur, labore nisi ex officiis. Totam inventore eum cumque dignissimos, dolorem possimus, nobis exercitationem, ipsam fugiat praesentium sit.Deserunt voluptas tempora omnis pariatur commodi aliquid dolores nihil? Quis praesentium voluptas sapiente. Quasi facilis non, aliquam dolore fugiat quisquam sit? Earum ab dolorem recusandae? Iure mollitia dolorum quia vero!
                                </div>
                            </div>
                            <div class="item">
                                <li>Контент-маркетинг</li>
                                <div class="text ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora odio aliquid aspernatur, labore nisi ex officiis. Totam inventore eum cumque dignissimos, dolorem possimus, nobis exercitationem, ipsam fugiat praesentium sit.Deserunt voluptas tempora omnis pariatur commodi aliquid dolores nihil? Quis praesentium voluptas sapiente. Quasi facilis non, aliquam dolore fugiat quisquam sit? Earum ab dolorem recusandae? Iure mollitia dolorum quia vero!
                                </div>
                            </div>
                            <div class="item">
                                <li>WEB аналитика</li>
                                <div class="text ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora odio aliquid aspernatur, labore nisi ex officiis. Totam inventore eum cumque dignissimos, dolorem possimus, nobis exercitationem, ipsam fugiat praesentium sit.Deserunt voluptas tempora omnis pariatur commodi aliquid dolores nihil? Quis praesentium voluptas sapiente. Quasi facilis non, aliquam dolore fugiat quisquam sit? Earum ab dolorem recusandae? Iure mollitia dolorum quia vero!
                                </div>
                            </div>
                        </div>
                    </ol>
                </div>
            </div>
        </div>
</section> 
<section class="whatGet">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    Что вы получите в результате обучения
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="whatGet__div whatGet__div_box1">
                    <div class="title">
                        ДОСТИГНИТЕ РЕЗУЛЬТАТА
                    </div>
                    <ul class="list">
                        <li>Разработаете стратегию продвижения своего проекта в интернете</li>
                        <li>Сможете разработать и разместить сайт своего проекта</li>
                        <li>Оптимизировать свой сайт, согласно законам SEO-продвижения</li>
                        <li>Спрогнозируйте стоимость перехода на вашу плошадку с контекстной рекламы</li>
                        <li>Настроите рекламные кампаний в Google AdWords и Яндекс Директ</li>
                        <li>Сооздадите сообщества вашего проекта в соц сетях и настроите таргетированную рекламу</li>
                        <li>Разработайте стратегию E-mail маркетинга</li>
                        <li>Создадите контент-стратегии под разные маркетинговые каналы</li>
                        <li>Научитесь анализировать эффективность каналов маркетинга и правильно планировать бюджет</li>
                        <li>Научитесь собирать команду из нужных специалистов и правильно управлять ей</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
            <div class="whatGet__div whatGet__div_box2">
                    <div class="title">
                        ЗАБЕРЕТЕ С СОБОЙ
                    </div>
                    <ul class="list">
                        <li>Брифы и анкеты для выявления Вашей целевой аудитории</li>
                        <li>Шаблоны анализа конкурентов</li>
                        <li>Пошаговый мануал по разработке сайта на профессиональных конструкторах</li>
                        <li>Чек-лист по внутренней и технической оптимизации сайта</li>
                        <li>Чек-лист по настройке контекстной рекламы в Яндекс Директ и Google AdWords</li>
                        <li>Чек-лист по разработке сообществ в социальных сетях </li>
                        <li>Мануал по настройке таргетированной рекламы</li>
                        <li>Блок-схемы E-mail маркетинга</li>
                        <li>Контент план для публикаций</li>
                        <li>Список онлайн инструментов и расширений для оптимизации работы</li>
                        <li>Список литературы для самостоятельного изучения</li>
                        <li>Видеоматериалы для самостоятельного изучения</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="format">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
    <div class="title">Измените свою жизнь!</div>
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-12 col-sm-10 m-auto m-md-0 col-md-6 col-lg-3 ">
    <div class="format__item">
    <div class="format-img"><img src="http://test.imgconia.beget.tech/wp-content/uploads/2020/03/marketolog.png" alt="" width="100%" height="auto" class="alignnone size-full wp-image-75" /></div>
    <div class="descr">
    <div class="descr__title">Интернет-Маркетолог</div>
    <div >Высокооплачиваемая Профессия будущего 10-летия, работа дома или в офисе.</div>
    </div>
    </div>
    </div>
    <div class="col-12 col-sm-10 m-auto m-md-0 col-md-6 col-lg-3 ">
    <div class="format__item">
    <div class="format-img"><img src="http://test.imgconia.beget.tech/wp-content/uploads/2020/03/seo.png" alt="" width="100%" height="auto" class="alignnone size-full wp-image-77" /></div>
    <div class="descr">
    <div class="descr__title">SEO-специалист</div>
    <div >Всегда востребован со свободным графиком и высокой оплатой</div></div>
    </div>
    </div>
    <div class="col-12 col-sm-10 m-auto m-md-0 col-md-6 col-lg-3 ">
    <div class="format__item">
    <div class="format-img"><img src="http://test.imgconia.beget.tech/wp-content/uploads/2020/03/smm.png" alt="" width="100%" height="auto" class="alignnone size-full wp-image-76" /></div>
    <div class="descr">
    <div class="descr__title">SMM-специалист</div>
    <!-- <div >Самая востребованная профессия 
    в настоящее время в сфере интернет-маркетинга</div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
<section class="reviews">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            Мы помогли более 100 студентам получить денежную профессию
                        </div>
                        <div class="subtitle">
                            Истории успеха
                        </div>
                        <div class="reviews__slider swiper-container">
                            <?php if(have_rows('slider')): ?>
                                <div class="swiper-wrapper">
                                    <?php while (have_rows('slider')) : the_row(); ?>
                                    <div class="swiper-slide ">
                                        <div class="student">
                                                <img src="<?php the_sub_field("foto"); ?> " alt="фото" class="foto">     
                                            <div class="info">
                                                <div class="info__name"><?php the_sub_field('name'); ?></div>
                                                <div class="info__prof"><?php the_sub_field('profession'); ?></div>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <?php the_sub_field('text'); ?>
                                        </div>
                                        <div class="to-read">
                                            <a href="#">
                                                Читать полностью
                                            </a>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php else: ?>
                                <div class="swiper-wrapper">
                                <div class="swiper-slide ">
                                    <div class="student">
                                        <img src="<?php echo get_template_directory_uri();?>/img/foto.png" alt="фото" class="foto">
                                        <div class="info">
                                            <div class="info__name">Имя</div>
                                            <div class="info__prof">Профессия</div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nisl lectus leo cras urna consectetur id. Senectus ut eget tristique nunc facilisis morbi ultrices nec tortor. Tellus et sed in rhoncus id elit lorem. Dis auctor purus arcu malesuada at. Diam porttitor tellus nunc, sit. Pellentesque velit, eu fringilla laoreet duis et. Quam nisl lectus leo cras urna consectetur id. Senectus ut eget tristique nunc facilisis morbi ultrices nec tortor. Tellus et sed in rhoncus id elit lorem. Dis auctor purus arcu malesuada at... ”
                                    </div>
                                    <div class="to-read">
                                        <a href="#">
                                            Читать полностью
                                        </a>
                                    </div>
                                </div>
                                </div>
                            <?php endif; ?> 
                        </div>
                        <!-- <div class="reviews__slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide ">
                                    <div class="student">
                                        <img src="<?php echo get_template_directory_uri();?>/img/foto.png" alt="фото" class="foto">
                                        <div class="info">
                                            <div class="info__name">Имя</div>
                                            <div class="info__prof">Профессия</div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nisl lectus leo cras urna consectetur id. Senectus ut eget tristique nunc facilisis morbi ultrices nec tortor. Tellus et sed in rhoncus id elit lorem. Dis auctor purus arcu malesuada at. Diam porttitor tellus nunc, sit. Pellentesque velit, eu fringilla laoreet duis et. Quam nisl lectus leo cras urna consectetur id. Senectus ut eget tristique nunc facilisis morbi ultrices nec tortor. Tellus et sed in rhoncus id elit lorem. Dis auctor purus arcu malesuada at... ”
                                    </div>
                                    <div class="to-read">
                                        <a href="#">
                                            Читать полностью
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="student">
                                        <img src="<?php echo get_template_directory_uri();?>/img/foto.png" alt="фото" class="foto">
                                        <div class="info">
                                            <div class="info__name">Имя</div>
                                            <div class="info__prof">Профессия</div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nisl lectus leo cras urna consectetur id. Senectus ut eget tristique nunc facilisis morbi ultrices nec tortor. Tellus et sed in rhoncus id elit lorem. Dis auctor purus arcu malesuada at. Diam porttitor tellus nunc, sit. Pellentesque velit, eu fringilla laoreet duis et. Quam nisl lectus leo cras urna consectetur id. Senectus ut eget tristique nunc facilisis morbi ultrices nec tortor. Tellus et sed in rhoncus id elit lorem. Dis auctor purus arcu malesuada at... ”
                                    </div>
                                    <div class="to-read">
                                        <a href="#">
                                            Читать полностью
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="student">
                                        <img src="<?php echo get_template_directory_uri();?>/img/foto.png" alt="фото" class="foto">
                                        <div class="info">
                                            <div class="info__name">Имя</div>
                                            <div class="info__prof">Профессия</div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nisl lectus leo cras urna consectetur id. Senectus ut eget tristique nunc facilisis morbi ultrices nec tortor. Tellus et sed in rhoncus id elit lorem. Dis auctor purus arcu malesuada at. Diam porttitor tellus nunc, sit. Pellentesque velit, eu fringilla laoreet duis et. Quam nisl lectus leo cras urna consectetur id. Senectus ut eget tristique nunc facilisis morbi ultrices nec tortor. Tellus et sed in rhoncus id elit lorem. Dis auctor purus arcu malesuada at... ”
                                    </div>
                                    <div class="to-read">
                                        <a href="#">
                                            Читать полностью
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="swiper-pagination"></div>
                        
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
               
            </div>
            
        </section>
<section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="contact__block">
                            <div class="title">
                            Иди за мечтой!
                            </div>
                            <div class="subtitle">
                            Наш специалист детально проконсультирует Вас и поможет выбрать курс, <br>
который принесет вам пользу и результат.
                            </div>
                            <div class="button">
                                <a href="#" data-toggle="modal" data-target="#modal-1">Связаться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
</main>
<?php get_footer(); ?>