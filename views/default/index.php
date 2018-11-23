<?php require_once 'header.php';?>

    	<div class="featured-slider">
    		<div class="flexslider">
    			<ul class="slides">

    				<li style="background-image: url('<?php echo DOMAIN; ?>/images/content/files/slider/1.jpg')">
    					<div class="flex-caption">
    						<h2 class="animated fadeInRight">Тонировка автомобилей</h2>
    						<p class="animated fadeInLeft"><em>Тонировка без снятия обшивки двери и стекол</em></p>
    						
                                                <a href="<?php echo DOMAIN; ?>/services/13" class="btn btn-primary btn-lg animated fadeInUp">Подробнее</a>
    					</div>
    				</li>

    				<li style="background-image: url('<?php echo DOMAIN; ?>/images/content/files/slider/2.jpg')">
    					<div class="flex-caption">
    						<h2 class="animated fadeInRight">Шумоизоляция автомобиля</h2>
    						<p class="animated fadeInLeft"><em>Шумоизоляция дверей, пола, потолка, багажника, и прочих элементов авто</em></p>
                                                <a href="<?php echo DOMAIN; ?>/services/5" class="btn btn-primary btn-lg animated fadeInUp">Подробнее</a>
    					</div>
    				</li>

    				<li style="background-image: url('<?php echo DOMAIN; ?>/images/content/files/slider/3.jpg')">
    					<div class="flex-caption">
    						<h2 class="animated fadeInRight">Установка автосигнализации</h2>
    						<p class="animated fadeInLeft"><em>Установка автосигнализация разных производителей и модификаций</em></p>
    						<a href="<?php echo DOMAIN; ?>/services/2" class="btn btn-primary btn-lg animated fadeInUp">Подробнее</a>
    					</div>
    				</li>

                    <li style="background-image: url('<?php echo DOMAIN; ?>/images/content/files/slider/4.jpg')">
    					<div class="flex-caption">
    						<h2 class="animated fadeInRight">Ангравийная защита</h2>
    						<p class="animated fadeInLeft"><em>Защитите кузов своего автомобиля от сколов</em></p>
    						<a href="<?php echo DOMAIN; ?>/services/4" class="btn btn-primary btn-lg animated fadeInUp">Подробнее</a>
    					</div>
    				</li>

    			</ul>
    		</div><!-- end flexslider -->

    		<div class="blue-box">

    			<div class="row-box">
    				<div class="title-box">
    					<h3><i class="fa fa-fw fa-clock-o"></i> График работы</h3>
    				</div>
    				<div class="content-box">
    					<?php echo $inf['work_time'];?>
    				</div><!-- end content-box -->
    			</div><!-- end row-box -->

    			<div class="row-box">
    				<div class="title-box">
    					<h3><i class="fa fa-fw fa-map-marker"></i> Адрес</h3>
    				</div>

    				<div class="content-box">
    					<?php echo $inf['adress'];?>
    					<a href="https://yandex.ru/maps/?um=constructor%3AaFQlYvbbwqJuWoGyv6sHzebqK_aZlkWd&source=constructorLink" class="btn btn-sm btn-white">Посмотреть на карте</a>
    				</div><!-- end content-box -->
    			</div><!-- end row-box -->

    			<div class="row-box">
    				<div class="title-box">
    					<h3><i class="fa fa-fw fa-phone"></i> Телефон для связи </h3>
    				</div>
    				<div class="content-box">
    					<?php echo $inf['phones'];?>
    				</div><!-- end content-box -->
    			</div><!-- end row-box -->

    		</div><!-- end blue-box -->

    	</div><!-- end featured-slider -->

    	<div class="service-section">
            <div class="container">
                <div class="row">

                    <div class="centered-title">
                        <h3>Наши услуги</h3>
                    </div>
                    <?php foreach($serv as $srv): ?>
                        <div class="service-col">
                            <h3><?php echo $srv['name'];?></h3>
                            <p><?php echo $srv['text_mini'];?> <a href="services/<?php echo $srv['id'];?>" class="more">Подробнее</a></p>
                            <figure>
                                <?php if(!$srv['img']):?>
                                    <img  src="images/content/sm-service-01.jpg" alt="">
                                <?php else:?>
                                    <img class='img-responsive img-circle' src="<?php echo $srv['img'];?>" alt="">
                                <?php endif;?>
                            </figure>
                        </div>
                    <?php endforeach; ?>
                    <!--
                    <div class="service-col">
                        <h3>Body Repair &amp; Paint</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Routine Maintenance</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Balancing</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Consuetudium Lectorum</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Quinta Decima</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Eodem Modo</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>
-->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end service-section -->

    	<div class="blog-section">
    		<div class="container">
    			<div class="row">

    				<div class="centered-title">
    					<h3>Последние записи</h3>
    				</div><!-- blogs-title -->
                                
                                <?php foreach($blg as $bl): ?>
                                
                                    <div class="col-md-4">
                                            <figure class="blog-thumb">
                                                <?php if(!$bl['img']): ?>
                                                    <img src="images/content/blog-thumb-01.jpg" alt="">
                                                <?php else: ?>
                                                    <img src="<?php echo $bl['img']; ?>" alt="">
                                                <?php endif; ?>
                                            </figure>
                                            <div class="inner">
                                                    <div class="entry-header">
                                                                    <time class="published" datetime="<?php echo date("m-d-Y", $bl['date']); ?>" title="<?php echo Blogs::changeDate(date("j F Y - H:i",$bl['date'])); ?>"><?php echo date("m-d-Y", $bl['date']); ?></time>
                                                                    <h2 class="post-title entry-title">
                                                                            <a href="blog/<?php echo $bl['id']; ?>"><?php echo $bl['name']; ?></a>
                                                                    </h2>
                                                            </div><!-- end entry-header -->
                                                            <div class="entry-content">
                                                                    <p><?php echo $bl['text_mini']; ?></p>
                                                                    <p>
                                                                            <a href="blog/<?php echo $bl['id']; ?>" class="more">Подробнее</a>
                                                                    </p>
                                                            </div><!-- entry-content -->
                                            </div><!-- end inner -->
                                    </div><!-- end col -->

                                <?php endforeach; ?>
    				<!--<div class="col-md-4">
    					<figure class="blog-thumb">
    						<img src="images/content/blog-thumb-01.jpg" alt="">
    					</figure>
    					<div class="inner">
    						<div class="entry-header">
								<time class="published" datetime="2014-12-13" title="December 13, 2014 - 21:12 pm">December 13, 2014</time>
								<h2 class="post-title entry-title">
									<a href="#">Mazim Placerat Facer Possim Assum</a>
								</h2>
							</div><!-- end entry-header -->
							<!--<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibhona euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								<p>
									<a href="#" class="more">Read More</a>
								</p>
							</div><!-- entry-content -->
    					<!--</div><!-- end inner -->
    				<!--</div><!-- end col -->  			
    				 
    			</div><!-- end row -->
    		</div><!-- end container -->
    	</div><!-- end blog section -->


        <div class="brand-section">
            <div class="container">
                <div class="row">

                    <div class="centered-title">
                        <h3>Брэнды которыми мы пользуемся</h3>
                    </div><!-- blogs-title -->
<?php //var_dump($brands); ?>
                    <div class="col-md-12">
                        <?php foreach($brands as $br): ?>
                            <div class="col-partner">
                                <div>
                                    <img src="<?php echo $br['link']?>" alt="<?php echo $br['name']?>">
                                </div>
                            </div><!-- end column -->
                        <?php endforeach; ?>
                    </div><!-- end inner -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end brand-section -->
        
<?php require_once 'footer.php';?>
       