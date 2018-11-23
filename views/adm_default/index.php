<?php require_once 'header.php'; //подключаем header?> 
<?php var_dump($_SESSION)?> 
           <style type="text/css">
#kcfinder_div {
    display: none;
    position: absolute;
    width: 670px;
    height: 400px;
    background: #e0dfde;
    border: 2px solid #3687e2;
    border-radius: 6px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    padding: 1px;
    z-index: 9999;
}
</style>
 
<script type="text/javascript">
function openKCFinder(field, id) {
    var div = document.getElementById('kcfinder_div'+id);
    if (div.style.display == "block") {
        div.style.display = 'none';
        div.innerHTML = '';
        return;
    }
    window.KCFinder = {
        callBack: function(url) {
            window.KCFinder = null;
            field.value = url;
            div.style.display = 'none';
            div.innerHTML = '';
        }
    };
    div.innerHTML = '<iframe name="kcfinder_iframe" src="<?php echo LIB ?>kcfinder/browse.php?type=images&dir=" ' +
        'frameborder="0" width="100%" height="100%" marginwidth="0" marginheight="0" scrolling="no" />';
    div.style.display = 'block';
}
</script>
     <!--body wrapper start-->
    <section class="panel">
        <header class="panel-heading">
            Редактирование главной информации
            <?php echo $message; ?>
        </header>
        <div class="panel-body">
        <div class="wrapper">
        <div class="row">
            <form action="" class="form-horizontal adminex-form" enctype="multipart/form-data" method="post">
                <div  class="col-sm-5">

                    <div class="form-group" >
                        <label class="control-label">Логотип</label>
                        <input class="form-control" name="logo" type="text" readonly="readonly" placeholder="Нажмите для выбора логотипа" value="<?php echo $gen_inf['logo']?>" onclick="openKCFinder(this, 1)" style="cursor:pointer" />
                    </div>
                    <div id="kcfinder_div1"></div> 
                    <div class="form-group" >
                        <label class=" control-label">favicon</label>
                        <input class="form-control" name="favicon" type="text" readonly="readonly" placeholder="Нажмите для выбора favicon" value="<?php echo $gen_inf['favicon']?>" onclick="openKCFinder(this, 2)" style="cursor:pointer" />
                    </div>
                    <div id="kcfinder_div2"></div> 
                    <div class="form-group">
                        <label class="control-label">Название сайта</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $gen_inf['name']?>">
                    </div>
                    <div class="form-group" >
                        <label class="control-label">e-mail</label>
                        <input class="form-control" name="email" type="text" value="<?php echo $gen_inf['email']?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">phone</label>
                        <input class="form-control" name="phone" type="text" value="<?php echo $gen_inf['phone']?>"/>
                    </div>
                </div>

                <div  class="col-sm-1">    
                </div>

                <div class="col-sm-6">                
                    <div class="form-group">
                        <label class="control-label">telegram</label>
                        <input class="form-control" name="telegram" type="text" value="<?php echo $gen_inf['telegram']?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">vk</label>
                        <input class="form-control" name="vk" type="text" value="<?php echo $gen_inf['vk']?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">github</label>
                        <input class="form-control" name="github" type="text" value="<?php echo $gen_inf['github']?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">twitter</label>
                        <input class="form-control" name="twitter" type="text" value="<?php echo $gen_inf['twitter']?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">instagram</label>
                        <input class="form-control" name="instagram" type="text" value="<?php echo $gen_inf['instagram']?>"/>
                    </div>
                </div>

                <div class="col-sm-12">  
                    <div class="form-group">
                        <hr>
                        <label class=" control-label">Информация</label>
                        <div>
                            <textarea id="editor1" name="info" class="form-control" rows="100"><?php echo $gen_inf['info']?></textarea>
                        </div>
                        <script type="text/javascript">
                            CKEDITOR.replace( 'editor1',{'filebrowserBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=files',
                            'filebrowserImageBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=images',
                            'filebrowserFlashBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=flash',
                            'filebrowserUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=files',
                            'filebrowserImageUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=images',
                            'filebrowserFlashUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=flash'} );
                        </script>
                    </div>
                </div>
                <div class="form-group col-sm-5">
                        <label class="control-label">Meta-kw</label>
                        <div>
                            <textarea name="meta_kw" class="form-control " rows="6"><?php echo $gen_inf['meta_kw']?></textarea>
                        </div>
                    </div>
                    <div class="form-group col-sm-2"></div>
                    <div class="form-group col-sm-5">
                        <label class="control-label">Meta-d</label>
                        <div>
                            <textarea name="meta_d" class="form-control" rows="6"><?php echo $gen_inf['meta_d']?></textarea>
                        </div>
                    </div>    
                <button class="btn btn-primary" type="submit" name="save">Сохранить</button>
            </form>
        

        </div>
        </div>
        </div>
    </section>

<?php require_once 'footer.php'; //подключаем header?> 
        