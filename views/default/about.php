<?php require_once 'header.php'; //подключаем header?> 

<div class="head-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">О нас</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li>Вы здесь : </li>
                                <li>Главная</li>
                                <li>О нас</li>
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
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content">
                            <div class="post format-contact hentry">

                                <div class="inner">

                                    <div class="entry-media">
                                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AaFQlYvbbwqJuWoGyv6sHzebqK_aZlkWd&amp;width=600&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                                    </div><!-- end entry-media -->

                                    <h1 class="entry-title">
                                        Подробно о нас
                                    </h1>
                                    

                                    <div class="entry-content">
                                        <?php echo $inf['info_text']?>
                                    </div><!-- end entry-content -->
                                </div><!-- end inner -->

                            </div><!-- end post hentry -->

                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                    <div id="secondary" class="col-md-4">

                            <div class="widget">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">Адрес</h3>
                                </div>
                                <div class="widget-content">
                                    <table>
                                        <tbody>
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
                                        </tbody>
                                    </table>

                                    <br/>
                                    <br/>

                                    <!--<p><strong>BRANCH OFFICE ADDRESS</strong></p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><strong>Location</strong></td>
                                                <td> : Kaliurang St. No 104, Sinduharjo, <br>&nbsp;&nbsp;Ngaglik, Sleman.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Telp</strong></td>
                                                <td> : (0274) 9982732</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email</strong></td>
                                                <td> : <a href="mailto:staff@localhost.net">staff@localhost.net</a></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Open Hour</strong></td>
                                                <td> : Monday ‐ Friday <br> &nbsp;&nbsp;08:00 AM ‐ 16:00 PM</td>
                                            </tr>
                                        </tbody>
                                    </table>-->
                                </div><!-- end widget-content -->
                            </div><!-- end widget -->

                            <?php require_once 'VK_widget.php';?>

                    </div><!-- end #secondary -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- #main -->
        <!-- END CONTENT HERE -->

<?php require_once 'footer.php'; //подключаем header?> 