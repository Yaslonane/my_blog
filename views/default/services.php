<?php require_once 'header.php';?>

            <div class="head-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Наши услуги</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li>Вы находитесь : </li>
                                <li>Главная</li>
                                <li>Услуги</li>
                            </ul>
                        </div><!-- end breadcrumbs -->
                    </div><!-- end column -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end head-title -->

        <!-- START CONTENT HERE -->
        <div id="main">
            <div class="container">
                <div class="row">
                    <div id="primary" class="content-area fullwidth">
                        <div id="content" class="site-content">

                            <div class="row service-wrapper row-flex">
                                <?php foreach($serv as $sr): ?>
                                    <div class="service-col-sq clearfix">
                                        <h2><a href="../services/<?php echo $sr['id'] ?>"><?php echo $sr['name'] ?></a></h2>
                                        <figure>
                                            <?php if(!$sr['img']): ?>
                                            <img src="../images/content/service-01.jpg" alt="">
                                            <?php else: ?>
                                                <img class="img-fluid" src="<?php echo $sr['img'] ?>" alt="">
                                            <?php endif; ?> 
                                        </figure>
                                        <p><?php echo $sr['text_mini'] ?></p>
                                        <a href="../services/<?php echo $sr['id'] ?>" class="more">Подробнее</a>
                                    </div><!-- end column -->
                                <?php endforeach; ?>
                                    
                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">Routine Maintenance</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div>end column -->

                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">Balancing</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div><!-- end column -->

                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">consuetudium lectorum</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div><!-- end column -->

                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">Quinta Decima</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div><!-- end column -->

                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">Oedem Modo</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div><!-- end column -->

                            </div><!-- end row -->

                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- #main -->
        <!-- END CONTENT HERE -->

        <div class="brand-section">
            <div class="container">
                <div class="row">

                    <div class="centered-title">
                        <h3>Brand Partner</h3>
                    </div><!-- blogs-title -->

                    <div class="col-md-12">
                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-01.png" alt="">
                            </div>
                        </div><!-- end column -->

                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-02.png" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-03.png" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-04.png" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-05.png" alt="">
                            </div>
                        </div><!-- end column -->
                    </div><!-- end inner -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end brand-section -->

<?php require_once 'footer.php';?>
