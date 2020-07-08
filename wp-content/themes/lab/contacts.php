<?php
/*
Template Name: Contacts
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>
<body>
    <div class="contacts-block">
        <div class="container">    
            <div class="contacts d-flex jcsb">
                <div class="contacts__info">
                    <h2 class="contacts__title">
                        Contacts
                    </h2>
                    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                </div>
                <ul class="contacts__list d-flex jcsb aic">
                <?php wp_list_pages(array (
                'child_of' => get_the_ID(),
                'title_li' => 0
                )); ?>
                </ul>
            </div>
        </div>
    </div> 
</header>
<section class="map-block" id="map">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.2812352391034!2d-0.9060877846549694!3d52.49214857980897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487770dc3468ef17%3A0x95d4ecb0b8b5c398!2zMyBUaGUgR3JlZW4sIEdyZWF0IEJvd2RlbiwgTWFya2V0IEhhcmJvcm91Z2ggTEUxNiA3RVUsINCS0LXQu9C40LrQvtCx0YDQuNGC0LDQvdC40Y8!5e0!3m2!1sru!2sua!4v1590173384327!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map__info">
            <div class="map__main-line d-flex">
                <p class="map__subtitle">
                    Logistic
                </p>
                <ul class="map__nets d-flex aic">
                    <li class="map__item">
                        <a class="map__link map__facebook" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="map__item">
                        <a class="map__link map__twitt" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="map__item">
                        <a class="map__link map__tel" href="#">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="map__block d-flex jcsb">
                <div class="map__contacts">
                    <a href="tel:+07765178568" class="map__tel"> <i class="fa fa-phone map__phone"></i>+ 077 6517 8568 </a>
                    <a href="tel:+07074872659" class="map__tel"> <i class="fa fa-phone map__phone"></i>+ 070 7487 2659 </a>
                    <div class="map__address d-flex">
                        <i class="fa fa-location-arrow map__arrow"></i>
                        <p class="map__add"> LE16 6FY, <br>
                        UK, GREAT BOWDEN
                        3 The Green
                        </p>
                    </div>
                    <a class="map__mail" href="mailto: info@logist-uk.com">                                <i class="fa fa-envelope map__arrow"></i>info@logist-uk.com</a>
                </div>
                <div class="map__contacts-info">
                    Now entirely focused on the logistics side of the industry, we have seen tremendous expansion to partner some of the largest brand names across a multitude of markets and continues to focus on providing the best customer service.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form-block">
    <div class="container">
        <div class="form">
        </div>
    </div>
</section>
<?php get_footer(); ?>