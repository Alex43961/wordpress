<?php
/*Template Name: Главная*/
?>

<?php get_header(); ?>
<!-- Header -->
<div class="container">
    <header style="background-image: url(<?php the_field('background_header'); ?>) ;">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-6 col-md-10 align-self-center">
                <h4 class="text-uppercase">
                    <?php the_field('title_site'); ?>
                </h4>
                <P><?php the_field('description_site'); ?></P>
            </div>
            <div class="col-10 col-lg-4 col-md-10 text-center align-self-center">
                <form action="#">
                    <div>
                        <span class="text-uppercase">Оставьте заявку прямо сейчас
                        </span>
                        <input id="name" type="text" placeholder="Имя">
                        <input id="phone" type="text" placeholder="Телефон">
                        <button class="btn text-uppercase">отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
</div>

<!-- Популярные категории -->
<div class="container popcat" style="background-image: url('<?php the_field('background_categories'); ?>') ;">
    <div class="row">
        <div class="col text-center text-uppercase">
            <div class="title">
                <h4>Популярные категории</h4>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 col-md-3">
            <a href="">
                <p class="text-uppercase popcat_title">
                    <?php
                    $terms = get_terms('category_door', array());
                    echo $terms[0]->name;
                    ?>
                </p>
                <img src="<?php the_field('category_doors_1'); ?>" class="img-thumbmail img-fluid" alt="">
            </a>
        </div>
        <div class="col-10 col-md-3">
            <a href="">
                <p class="text-uppercase popcat_title">
                    <?php
                    $terms = get_terms('category_door', array());
                    echo $terms[2]->name;
                    ?>
                </p>
                <img src="<?php the_field('category_doors_2'); ?>" class="img-thumbmail img-fluid" alt="">
            </a>
        </div>
        <div class="col-10 col-md-3">
            <a href="">
                <p class="text-uppercase popcat_title">
                    <?php
                    $terms = get_terms('category_door', array());
                    echo $terms[1]->name;
                    ?>
                </p>
                <img src="<?php the_field('category_doors_3'); ?>" class="img-thumbmail img-fluid" alt="">
            </a>
        </div>
    </div>
</div>

<!-- Преимущества -->
<div class="container advantages text-center" style="background-image: url('<?php the_field('background_adv'); ?>') ;">
    <div class="row justify-content-center">
        <div class="col-10 col-lg-2">
            <img src="<?php the_field('icon_adv_1'); ?>" alt="door" class="img-fluid">
            <h6 class="text-uppercase"><?php the_field('title_adv_1'); ?></h6>
            <p><?php the_field('description_adv_1'); ?></p>
        </div>
        <div class="col-10 col-lg-2">
            <img src="<?php the_field('icon_adv_2'); ?>" alt="door" class="img-fluid">
            <h6 class="text-uppercase"><?php the_field('title_adv_2'); ?></h6>
            <p><?php the_field('description_adv_2'); ?></p>
        </div>
        <div class="col-10 col-md-5 col-lg-2">
            <img src="<?php the_field('icon_adv_3'); ?>" alt="door" class="img-fluid">
            <h6 class="text-uppercase"><?php the_field('title_adv_3'); ?></h6>
            <p><?php the_field('description_adv_3'); ?></p>
        </div>
        <div class="col-10 col-lg-2">
            <img src="<?php the_field('icon_adv_4'); ?>" alt="door" class="img-fluid">
            <h6 class="text-uppercase"><?php the_field('title_adv_4'); ?></h6>
            <p><?php the_field('description_adv_4'); ?></p>
        </div>
    </div>
</div>

<!-- Популярные товары -->
<div class="container popular_goods" style="background-image: url(<?php the_field('background_catalog'); ?>)">
    <div class="row">
        <div class="col text-center text-uppercase">
            <div class="title">
                <h4>Популярные товары</h4>
            </div>
        </div>
    </div>
    <!-- 1-й ряд -->
    <div class="row text-center justify-content-center">
        <?php
        $args = array(
            'post_type' => 'doors',
            'posts_per_page' => 8,
        );
        $p = get_posts($args);
        foreach ($p as $post) {
            setup_postdata($post);
        ?>
            <div class="col-10 col-sm-10 col-md-5 col-lg-3 column-of-good">
                <img src=<?php the_field('img_door'); ?> alt="" class="img-thumbmail img-fluid"></img>
                <h6 class="text-uppercase text-bold"><?php the_title(); ?></h6>
                <p><?php the_field('price_door'); ?></p>
                <button class="btn text-uppercase item_btn">Подробнее</button>
            </div>
        <?php }
        wp_reset_postdata(); ?>
    </div>
    <div class="row text-center justify-content-center">
        <div class="col">
            <button class="btn-lg btn-inverse text-uppercase">Перейти в каталог</button>
        </div>

    </div>
</div>
<!-- Заказать замер -->
<div class="container form_ordering_an_order text-white" style="background-image: url(<?php the_field('background_order'); ?>)">
    <div class="row text-center justify-content-center">
        <div class="col-10 col-md-10 col-sm-10 col-lg-3 align-self-center text-left">
            <div>
                <h5 class="text-uppercase">Заказать замер</h5>
                <p>Наши специалисты подберут необходимые параметры</p>
            </div>
            <form action="" class="text-center">
                <div>
                    <input type="text" placeholder="ИМЯ">
                    <input type="text" placeholder="АДРЕС">
                    <input type="text" placeholder="ТЕЛЕФОН">
                    <button class="btn text-uppercase">Заказать замер</button>
                </div>
            </form>
        </div>
        <div class="col-5 col-cm-5 col-md-5 col-lg-3 align-self-center">
            <img src="<?php the_field('order_icon_1'); ?>" alt="" class="img-fluid">
            <h6 class="text-uppercase"><?php the_field('title_order_1'); ?></h6>
            <p><?php the_field('order_description_1'); ?></p>
        </div>
        <div class="col-5 col-cm-5 col-md-5 col-lg-3 align-self-center">
            <img src="<?php the_field('order_icon_2'); ?>" alt="" class="img-fluid">
            <h6 class="text-uppercase"><?php the_field('title_order_2'); ?></h6>
            <p><?php the_field('order_description_2'); ?></p>
        </div>
    </div>
</div>
<!-- Отзывы -->
<div class="container reviews">
    <div class="row">
        <div class="col text-center text-uppercase">
            <div class="title">
                <h4>Отзывы</h4>
            </div>
        </div>
    </div>
    <div id="my-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">С фрамугами и доп. окнами</h5>
                                <p class="card-text">Фрамугами могут быть со стеклом и глухие. Глухие фрамуги
                                    используют в том случае, когда в дверной проем устанавливается дверь гораздо
                                    меньше высоты или это дизайнерское решение. Остекленные варианты фрамуг обычно
                                    используют, чтобы в коридор попадало много света.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Навесы под заказ</h5>
                                <p class="card-text">Для создания комфортного обитания на придомовой территории в
                                    ненастную погоду или в знойную жару наше предприятие "ВСЕ ИЗ МЕТАЛЛА" обладает
                                    возможностью изготовить и установить качественный и надежный навес в современном
                                    стиле. Сделаем по вашим индивидуальным размерам.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Нестандартные глухие и со стеклом</h5>
                                <p class="card-text">Большое количество домов, где из-за индивидуальных особенностей
                                    дверных проемов необходимы нестандартные входные двери. Наше производство
                                    позволяет изготовить нестандартные стальные двери на заказ практически любого
                                    размера по высоте и ширине.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">С фрамугами и доп. окнами</h5>
                                <p class="card-text">Фрамугами могут быть со стеклом и глухие. Глухие фрамуги
                                    используют в том случае, когда в дверной проем устанавливается дверь гораздо
                                    меньше высоты или это дизайнерское решение. Остекленные варианты фрамуг обычно
                                    используют, чтобы в коридор попадало много света.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Навесы под заказ</h5>
                                <p class="card-text">Для создания комфортного обитания на придомовой территории в
                                    ненастную погоду или в знойную жару наше предприятие "ВСЕ ИЗ МЕТАЛЛА" обладает
                                    возможностью изготовить и установить качественный и надежный навес в современном
                                    стиле. Сделаем по вашим индивидуальным размерам.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Нестандартные глухие и со стеклом</h5>
                                <p class="card-text">Большое количество домов, где из-за индивидуальных особенностей
                                    дверных проемов необходимы нестандартные входные двери. Наше производство
                                    позволяет изготовить нестандартные стальные двери на заказ практически любого
                                    размера по высоте и ширине.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        </a>
        <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>
<?php get_footer(); ?>