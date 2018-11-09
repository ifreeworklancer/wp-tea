<!-- exclusive -->
<section id="exclusive">
    <?php $exclusive = get_post(26); ?>
    <div class="exclusive-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-6 p-3 p-sm-0">
                    <div class="section-description">
                    <h2 class="section-description__title text-white">
                        <?= $exclusive->post_title ?>
                    </h2>
                    <div class="section-description__text">
                        <?= $exclusive->post_content ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="exclusive-slider">

                        <?php 
                            $exclusive_fields = get_field('exclusive-product-card', $exclusive->ID);
                        ?>

                        <?php foreach($exclusive_fields as $exclusive_field) : ?>

                            <div class="exclusive-slider-item">
                                <div class="product-card" style="background-image: url(<?php echo $exclusive_field['exclusive-product-card__image']['url'] ?>);">
                                    <div class="product-card__title">
                                        <?php echo ($exclusive_field['exclusive-product-card__title']) ?>  
                                    </div>
                                    <div class="product-card-hover">
                                        <div class="product-card-hover-content">
                                            <div class="product-card-hover__title">
                                                <?php echo ($exclusive_field['exclusive-product-card__title']) ?>  
                                            </div>
                                            <p>
                                            <?php echo ($exclusive_field['exclusive-product-card__text']) ?>  
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
                        <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-exclusive">
                            <div class="icon"></div>
                            <div class="text">
                                Назад
                            </div>
                        </div>
                        <div class="separator">
                            /
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-exclusive">
                            <div class="text">
                                Вперед
                            </div>
                            <div class="icon"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>