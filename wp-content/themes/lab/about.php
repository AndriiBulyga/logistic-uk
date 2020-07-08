<?php
/*
Template Name: About
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<body>
        <div class="about-wrapper">
            <div class="container">
                <div class="about d-flex jcsb">
                    <div class="about__info">
                        <h2 class="about__title">
                            About Us
                        </h2>
                        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                        <!-- <div class="about__line d-flex aic">
                            <a class="about__main" href="#" >
                                Главная
                            </a>
                            <p class="about__arrow">
                                → 
                            </p>
                            <p class="about__about">
                                О компании
                            </p>
                        </div> -->
                    </div>


                    <ul class="about__list d-flex jcsa aic">
                    <?php wp_list_pages(array (
                    'child_of' => get_the_ID(),
                    'title_li' => 0
                    )); ?>
                    </ul>
                        <!-- <ul class="about__list d-flex jcsa aic">
                        <li class="about__item">
                            <a class="about__link" href="#">
                                Видение
                            </a>
                        </li>
                        <li class="about__item">
                            <a class="about__link about__link_s" href="#advantage">
                                Преимущества
                            </a>
                        </li>
                        <li class="about__item">
                            <a class="about__link" href="#">
                                Клиенты
                            </a>
                        </li>
                        <li class="about__item">
                            <a class="about__link" href="#">
                                Партнеры
                            </a>
                        </li>
                        <li class="about__item">
                            <a class="about__link" href="contacts.html">
                                Контакты
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div> 
    </header>
    <section class="advantage-block" id="advantage">
        <div class="container">
            <div class="advantage">
                <h3 class="advantage__title">
                Benefits of working with Us
                </h3>
                <div class="advantage__info d-flex jcsb">
                    <p class="advantage__text">
                        We use our network to help customers manage their goods most efficiently throughout their supply chains. At the top of our value proposition is an intense customer service culture that connects our team worldwide. Our people focus on finding new ways to help our customers succeed, while becoming continuously more efficient ourselves. 
                    </p>
                    <p class="advantage__text">
                        Customer relationships are the lifeblood of our business. However, we never forget that our company has responsibilities to many other stakeholders as well: investors, employees, carriers, business partners, local communities and global society. When we say Let’s Move the World Forward, we’re speaking to the interests of all stakeholders, as well as the world at large. 
                    </p>
                </div>
                <ul class="advantage__list d-flex">
                    <li class="advantage__item d-flex">
                        <div class="advantage__logo"></div>
                        <div class="advantage__info">
                            <h4 class="advantage__title">
                                Safe
                            </h4>
                            <p class="advantage__text advantage__text_s">
                                We put safety first – for each other, our communities and our environment. We do things the right way, the first time. Our workplaces are collaborative and supportive. We take care of each other and we constantly seek to improve the safety of our operations, from trucks and docks to warehouses and datacenters. 
                                We ask, 'What if?' – We’re boldly optimistic about reinventing industries and shaping the future of how business can meet customer needs. We embrace change. That’s how we discover original ways to solve challenges and create wins for our customers and their customers.
                            </p>
                        </div>
                    </li>
                    <li class="advantage__item d-flex">
                        <div class="advantage__logo">
                        </div>
                        <div class="advantage__info">
                            <h4 class="advantage__title">
                                Respectful
                            </h4>
                            <p class="advantage__text advantage__text_s">
                                We listen. We’re leaders in creating new markets, spotting unnoticed opportunities and discovering smart ways to tackle challenges because we listen to our employees, our partners and our customers. We pull together to reimagine how business gets done. Respect for each other’s individual strengths drives this collaboration. 
                                We're curious. We push boundaries through game-changing ideas – the kind of advances no one else thinks are possible. We have the passion to invest in pioneering technologies that will help our customers come out on top.
                            </p>
                        </div>
                    </li>
                    <li class="advantage__item d-flex">
                        <div class="advantage__logo">
                        </div>
                        <div class="advantage__info">
                            <h4 class="advantage__title">
                                Inclusive
                            </h4>
                            <p class="advantage__text advantage__text_s">
                                We celebrate individuality. We take pride in making our workplaces inclusive. By welcoming everyone—regardless of gender or gender identity, race or ethnicity, national origin, religion, sexual orientation, veteran status, or disability—we create a diversity of talents and perspectives. We stand for integrity, celebrate individuality and know we can always learn more from each other, our customers and the communities we serve.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="photo-block" id="photo">
        <div class="container">
            <div class="photo">
                <h3 class="photo__title">    
                    Our facilities
                </h3>
                <div class="photo__list d-flex jcsb aic">
                    <a class="photo__item" href="<?php bloginfo('template_directory') ?>/assets/img/photo1.jpg" data-lightbox="gallery" data-title="Forklift service">
                        <img class="photo__img" src="<?php bloginfo('template_directory') ?>/assets/img/photo1.jpg" alt="loader">
                        <i class="fa fa-expand photo__icon"></i>
                    </a>
                    <a class="photo__item" href="<?php bloginfo('template_directory') ?>/assets/img/photo2.jpg" data-lightbox="gallery" data-title="Corporate transportation">
                        <img class="photo__img" src="<?php bloginfo('template_directory') ?>/assets/img/photo2.jpg" alt="trucks">
                        <i class="fa fa-expand photo__icon"></i>
                    </a>
                    <a class="photo__item" href="<?php bloginfo('template_directory') ?>/assets/img/photo3.jpg" data-lightbox="gallery" data-title="Personal Transportation">
                        <img class="photo__img" src="<?php bloginfo('template_directory') ?>/assets/img/photo3.jpg" alt="truck">
                        <i class="fa fa-expand photo__icon"></i>
                    </a>
                    <a class="photo__item" href="<?php bloginfo('template_directory') ?>/assets/img/photo4.jpg" data-lightbox="gallery" data-title="Sea Logistics">
                        <img class="photo__img" src="<?php bloginfo('template_directory') ?>/assets/img/photo4.jpg" alt="сargo">
                        <i class="fa fa-expand photo__icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>

