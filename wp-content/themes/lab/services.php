<?php
/*
Template Name: Services
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<body>
<div class="services-wrapper">
            <div class="container">    
                <div class="services d-flex jcsb">
                    <div class="services__info">
                        <h2 class="services__title">
                            Services
                        </h2>
                        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

                        <!-- <div class="services__line d-flex aic">
                            <a class="services__main" href="index.html" >
                                Главная
                            </a>
                            <p class="services__arrow">
                                → 
                            </p>
                            <p class="services__about">
                                Услуги
                            </p>
                        </div> -->
                    </div>

                    <ul class="services__list d-flex jcsb aic">    
                    <?php wp_list_pages(array (
                    'child_of' => get_the_ID(),
                    'title_li' => 0
                    )); ?>
                    </ul>
                
                    <!-- <ul class="services__list d-flex jcsb aic">
                        <li class="services__item">
                            <a class="services__link" href="#">
                                <p class="services__subtitle">Legal</p>
                                <p class="services__text">
                                    Юридическое сопровождение
                                </p>
                            </a>
                        </li>
                        <li class="services__item">
                            <a class="services__link" href="#">
                                <p class="services__subtitle">Accounting</p>                           
                                <p class="services__text">
                                    Финансовый аутсорсинг
                                </p>
                            </a>
                        </li>
                        <li class="services__item">
                            <a class="services__link" href="#">
                                <p class="services__subtitle">Business Consulting</p>
                                <p class="services__text">
                                    Бизнес консалтинг
                                </p>
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div> 
    </header>    
    <section class="jur-block" id="jur">
        <div class="container">
            <div class="jur d-flex jcsa aic">
                <div class="jur__img"></div>
                <div class="jur__info">
                    <p class="jur__subtitle">
                        Legal support
                    </p>
                    <p class="jur__text">
                        Based at Colnbrook, Berkshire, it grew from a small freight forwarding company to an organization with offices around world. Having seen a requirement to provide additional services to customers, company was created in 1999 and ran alongside the freight division until being sold in 2009.
                    </p>
                </div>
                <ul class="jur__list">
                    <li class="jur__item"> 
                        <a class="jur__link" href="#">
                        Detailed analysis of customers need.
                        </a>
                    </li>
                    <li class="jur__item"> 
                        <a class="jur__link" href="#">
                        Full engagement of all employees
                        </a>
                    </li>
                    <li class="jur__item"> 
                        <a class="jur__link" href="#">
                            Having well educated staffs
                        </a>
                    </li>
                    <li class="jur__item"> 
                        <a class="jur__link" href="#">
                            Pursuing to fulfil requirements
                        </a>
                    </li>
                    <li class="jur__item"> 
                        <a class="jur__link" href="#">
                            Having modern technical equipment 
                        </a>
                    </li>
                    <li class="jur__item"> 
                        <a class="jur__link" href="#">
                            Continuous processes improvement 
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="subcategory-block" id="subcategory">
        <div class="container">
            <div class="subcategory d-flex jcsb">
                <div class="subcategory__block">
                    <h3 class="subcategory__title">
                        Corporate Responsibility
                    </h3>
                    <p class="subcategory__text">
                        We are experts in partnering US companies enter or develop their European market supply chain requirements.
                    </p>
                    <p class="subcategory__text">
                        A privately owned European outsourced solutions provider based in Berkshire, United Kingdom, we offer complete logistics management across a multitude of markets to include warehousing, fulfilment and distribution that is specific to individual customer requirements in both retail logistic and consumer direct.
                    </p>
                    <p class="subcategory__text">
                        We hold physical stock in the UK and can handle all the necessary stages to help you make the transition and have a proven track record of doing so. Customers we work with include a worldwide sports equipment manufacturer listed on the New York Stock Exchange, a rapidly expanding manufacturer of electronics accessories and a high profile American natural personal care company amongst many others.
                    </p>
                    <p class="subcategory__text">
                        Our modern facilities are centrally positioned in the South of England being only one hours travelling time from London Heathrow and the Port of Southampton. The freehold site includes five main operating units offering over 200,000 square feet of ambient temperature high quality warehousing space with state of the art digital security systems and revolutionary IT infrastructure.
                    </p>
                    <p class="subcategory__text">
                        To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
                    </p>
                    <p class="subcategory__text">
                        Our warehouse management system called Empirica allows automated orders and reporting via direct system integration and the ability for you to access it anywhere in the world, 24 hours a day, to see a live state of your operation.
                    </p>
                    <div class="consultation">
                        <p class="consultation__title">
                            Get a FREE consultation
                        </p>
                        <div class="consultation__block d-flex aic">
                            <button class="consultation__button">
                                Submit your application
                            </button>
                            <a class="consultation__tel" href="tel:+07765178568">
                                + 077 6517 8568
                            </a>
                        </div>
                        <div class="consultation__block d-flex aic">
                            <p class="consultation__text">
                                Our consultants will contact you as soon as possible and answer all your questions.
                            </p>
                            <img class="consultation__img" src="<?php bloginfo('template_directory') ?>/assets/img/services_img_tel.png" alt="tel_icon">
                        </div>
                    </div>
                </div>
                <aside>
                    <div class="aside-block">
                        <p class="aside-block__title">
                            Navigation
                        </p>
                        <ul class="aside-block__list">
                            <li class="aside-block__item aside-block__item_a d-flex">
                                <a class="aside-block__link d-flex aic" href="#">
                                    Gain competitive advantage
                                </a>
                            </li>
                            <li class="aside-block__item d-flex">
                                <a class="aside-block__link d-flex aic" href="#">
                                    Bring inspired logistics
                                </a>
                            </li>
                            <li class="aside-block__item d-flex">
                                <a class="aside-block__link d-flex aic" href="#">
                                    To measure performance
                                </a>
                            </li>
                            <li class="aside-block__item d-flex">
                                <a class="aside-block__link d-flex aic" href="#">
                                    Our management systems
                                </a>
                            </li>
                        </ul>
                        <p class="aside-block__title">
                            Feedback
                        </p>
                        <!-- Slider -->
                        <div class="big-slider">
                            <div class="big-slider__item aic jcsb">
                                <div class="big-slider__img"></div>
                                <p class="big-slider__name">
                                    Valery Zuckerberg
                                </p>
                                <p class="big-slider__text">
                                    For successful online sales, your logistics services play a vital part. Logistics are an extension of the e-commerce experience  people use for purchases.
                                </p>
                                <a class="big-slider__link_a d-flex aic jcc" target="_blank" href="https://facebook.com/zuck">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="big-slider__item aic jcsb">
                                <div class="big-slider__img big-slider__img_m"></div>
                                <p class="big-slider__name">
                                    Eugene Stateham
                                </p>
                                <p class="big-slider__text">
                                    Our contract logistics expertise spans a wide range of goods for B2B and B2C channels, with a large presence in e-commerce. We're happy to work together.
                                </p>
                                <a class="big-slider__link_a d-flex aic jcc" target="_blank" href="https://facebook.com/JasonStatham/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="big-slider__item aic jcsb">
                                <div class="big-slider__img big-slider__img_s"></div>
                                <p class="big-slider__name">
                                    Ivan Malkovich
                                </p>
                                <p class="big-slider__text">
                                    In company focus is on robotics, autonomous vehicles, automated rotation systems, drones and other cutting-edge technologies that speed goods through the supply chain. Nice!
                                </p>
                                <a class="big-slider__link_a d-flex aic jcc" target="_blank" href="https://www.facebook.com/John-Malkovich-62442497393/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        </div>
                        <!-- The end -->
                    </div>
                </aside>
            </div>
        </div>
    </section>
<?php get_footer(); ?>