<?php $inf = info::getInfo()?> 
<footer id="footer-section" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
                                <div class="widget-title-outer">
    								<h3 class="widget-title">Коротко о нас</h3>
                                </div>
								<p><?php echo $inf['info_text_mini']?> </p>
								<p><a href="/about" class="more">Подробнее</a></p>
							</div><!-- end inner -->
						</div><!-- end widget -->
					</div>

					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
                                <div class="widget-title-outer">
								    <h3 class="widget-title">Адрес</h3>
                                </div>
								<table>
                                                                    <tr>
                                                                        <td><strong>Находимся:</strong></td>
                                                                        <td> <?php echo $inf['adress']?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Телефон: </strong></td>
                                                                        <td> <?php echo $inf['phones']?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Email:</strong></td>
                                                                        <td> <a href="mailto:<?php echo $inf['email']?>"><?php echo $inf['email']?></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Режим работы:</strong></td>
                                                                        <td><?php echo $inf['work_time']?></td>
                                                                    </tr>
                                                                </table>
							</div><!-- end inner -->
						</div><!-- end widget -->
					</div>

					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
                                <div class="widget-title-outer">
    								<h3 class="widget-title">Photos On Flickr</h3>
                                </div>
								<ul class="list-galleries">
									<li>
										<a href="#"><img src="images/content/gal-01.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-01.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-01.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-01.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-01.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-01.png" alt=""></a>
									</li>
								</ul>
							</div><!-- end inner -->
						</div><!-- end widget -->
					</div>
				</div>
			</div>
		</footer>

        <div class="footer-credit">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copy">COPYRIGHT &copy; 2015 BENGKEL. WEB DESIGN BY <a href="http://mattsapii.co">MATTSAPII</a></p>
                    </div><!-- end column -->
                    <div class="col-md-6">
                        <ul class="list-socmed">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div><!-- end column -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-credit -->
    	
    </div><!-- end #page hfeed site -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo TMPL; ?>js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo TMPL; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo TMPL; ?>js/plugin.js"></script>
    <script src="<?php echo TMPL; ?>js/main.js"></script>

  </body>
</html>

