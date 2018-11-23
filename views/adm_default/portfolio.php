<?php require_once 'header.php'; //подключаем header?> 

     <!--body wrapper start-->
    <div class="wrapper">

        <div class="row">
            <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Картинка</th>
                                    <th>Клиент</th>
                                    <th>Опубликовано</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($portfolios as $portfolio): ?>
                                <tr class="gradeA">
                                    <td><?php echo $portfolio['name']; ?></td>
                                    <td ><img src="<?php echo $portfolio['main_img']; ?>" class="img-thumbnail" alt="<?php echo $portfolio['name']; ?>" width="250"></td>
                                    <td><?php echo $portfolio['client']; ?></td>
                                    <td>
                                        <a href="<?php DOMAIN; ?>/adminpanel/publicportfolio/<?php echo $portfolio['id']; ?>" > <i <?php echo ($portfolio['is_public'] == 0) ? 'class="fa fa-times"  style="font-size:20px; color:#cc0000 "' : "class='fa fa-check'"; ?>></i></a>
                                    </td>
                                    <td><a href="<?php DOMAIN; ?>/adminpanel/portfolio/<?php echo $portfolio['id']; ?> " ><i class="fa fa-edit"></i></a></td>
                                    <td><a href="<?php DOMAIN; ?>/adminpanel/delportfolio/<?php echo $portfolio['id']; ?>"> <i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <div>

            </div>
            <div class="col-sm-12">
                <form action="./createportfolio" class="form-horizontal adminex-form" method="post">
                        <label class="col-sm-2 col-sm-2 control-label">Название альбома</label>
                        <div class="col-sm-6"><input type="text" class="form-control" name="name"></div>
                    <button class="btn btn-primary" type="submit" name="create">Создать</button>
                </form>
            </div>
        </div>
        </div>


        <?php require_once 'footer.php'; //подключаем header?> 
        