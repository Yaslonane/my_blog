<?php require_once 'header.php'; //подключаем header?> 



<div class="head-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Галлерея</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li>Вы здесь : </li>
                                <li>Главная</li>
                                <li>Галлерея</li>
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
                                
                            <?php foreach($albums as $album): ?>  
                               <div class="service-col-sq">
                                    <h2><?php echo $album['name']; ?></h2>
                                    <figure>
                                       <?php for($i=0; count($album['imgs']) > $i; $i++): ?>   
                                        <a href="<?php echo $album['imgs'][$i]['link']; ?>" data-lightbox="album-<?php echo $album['id']; ?>" data-title="<?php echo $album['imgs'][$i]['description']; ?>"><?php echo ($i == 0) ? "<img src='". $album['imgs'][$i]['link']."' alt=''>" : ""?></a>
                                       <?php endfor;?>
                                    </figure>
                                    <p><?php echo $album['description']; ?></p>
                                    <p><b>Автор: </b><?php echo $album['autor']; ?></p>

                                </div><!-- end column -->
                            <?php endforeach; ?>
                               

                            </div><!-- end row -->

                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- #main -->
  
        <!-- END CONTENT HERE -->
<?php require_once 'footer.php'; //подключаем footer?>