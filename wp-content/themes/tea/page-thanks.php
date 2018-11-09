<?php
/*
* Template name: thanks page
* Template type: page
*/
 get_header('secondary'); ?>

<!-- Thanks -->
<section id="thanks-page">
    <div class="container h-100 d-flex align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="thanks-page-item">
                    <div class="section-description">
                        <h2 class="section-description__title text-white">Спасибо!</h2>
                        <div class="section-description__text">Наш менеджер свяжется с Вами</div>
                    </div>
                    <div class="text-left">
                        <a href="<?php echo site_url(); ?>" class="btn btn-primary">На главную</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer('secondary'); ?>
