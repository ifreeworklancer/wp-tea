<!-- Best -->
<section id="best">
    <?php $best = get_post(13); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-description">
                    <h2 class="section-description__title">
                        <?= $best->post_title ?>
                    </h2>
                    <div class="section-description__text">
                        <?= $best->post_content ?>
                    </div>
                </div>
                <div class="decor-img" style="background-image: url(<?php echo get_theme_file_uri('images/content/best/decor/decor-item-1.png')?>)"></div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="best-slider">

                    <?php 
                        $best_fields = get_field('best-product-card', $best->ID);
                    ?>

                     <?php foreach($best_fields as $best_field) : ?>

                        <div class="best-slider-item">
                            <div class="product-card" style="background-image: url(<?php echo $best_field['best-product-card__image']['url'] ?>);">
                                <div class="product-card__title">
                                    <?php echo ($best_field['best-product-card__title']) ?>  
                                </div>
                                <div class="product-card-hover">
                                    <div class="product-card-hover-content">
                                        <div class="product-card-hover__title">
                                            <?php echo ($best_field['best-product-card__title']) ?>  
                                        </div>
                                        <p>
                                        <?php echo ($best_field['best-product-card__text']) ?>  
                                        </p>
                                        <a href="#contacts" class="order-link">
                                            Заказать
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-arrow">
                    <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-best">
                        <div class="icon"></div>
                        <div class="text">
                            Назад
                        </div>
                    </div>
                    <div class="separator">
                        /
                    </div>
                    <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-best">
                        <div class="text">
                            Вперед
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>