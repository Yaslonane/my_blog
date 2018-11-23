<?php require_once 'header.php'; //подключаем header?> 

     <!--body wrapper start-->
    <section class="panel">
        <header class="panel-heading">
            Редактирование портфолио # <?php echo $portfolio['id'] ?>
        </header>
        <div class="panel-body">
        <div class="wrapper">
        <div class="row">
        <!--   <style type="text/css">
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
    div.innerHTML = '<iframe name="kcfinder_iframe" src="<?php echo LIB ?>kcfinder/browse.php?type=image&dir=" ' +
        'frameborder="0" width="670px" height="400px" marginwidth="0" marginheight="0" scrolling="no" />';
    div.style.display = 'block';
}
</script>-->
<script type="text/javascript">
function openKCFinder_singleFile(field) {
        window.KCFinder = {};
        window.KCFinder.callBack = function(url) {
            field.value = url;
            //window.KCFinder = null;
            return;
        };
        window.open('<?php echo LIB ?>kcfinder/browse.php?type=images',
        'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600');
        //window.open('<?php echo LIB ?>kcfinder/browse.php?type=images', 'kcfinder_single');
    }
</script>
        <form action="" class="form-horizontal adminex-form" enctype="multipart/form-data" method="post">
            <input type="hidden" name="id" value="<?php echo $portfolio['id'] ?>">
<!-- Левая колонка -->
            <div class="col-sm-6"> 
                <div class="form-group">
                <label class="col-sm-2 control-label">Опубликован</label>
                    <div class="col-sm-6">
                        <select class="form-control m-bot15" name="is_public">
                            <option value="1" <?php if($portfolio['is_public'] == 1):?> selected <?php endif; ?>>Опубликован</option>
                            <option value="0" <?php if($portfolio['is_public'] == 0):?> selected <?php endif; ?>>Снят с публикации</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Название альбома</label>
                    <div class="col-sm-6"><input type="text" class="form-control" name="name" value="<?php echo $portfolio['name'] ?>"></div>
                </div>

                <div class="form-group">
                    <label class="control-label">Описание альбома</label>
                    <div>
                        <textarea id='editor' name="description" class="form-control" rows="100"><?php echo $portfolio['description'] ?></textarea>
                    </div>
                    <script type="text/javascript">
                            CKEDITOR.replace( 'editor',{'filebrowserBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=files',
                            'filebrowserImageBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=images',
                            'filebrowserFlashBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=flash',
                            'filebrowserUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=files',
                            'filebrowserImageUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=images',
                            'filebrowserFlashUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=flash'} );
                        </script>
                </div>
            </div>
            
<!-- Левая колонка -->
<!-- Правая колонка -->           
            <div class="col-sm-offset-1 col-sm-4">
                <div class="form-group">
                <label class="control-label">Client</label>
                <input type="text" class="form-control" name="client" value="<?php echo $portfolio['client'] ?>"> 
                </div>
                <div class="form-group">
                <label class="control-label">Skils</label>
                <input type="text" class="form-control" name="skills" value="<?php echo $portfolio['skills'] ?>"> 
                </div>
                <div class="form-group">
                <label class="control-label">date</label>
                <input type="date" class="form-control" name="date" value="<?php echo $portfolio['date'] ?>"> 
                </div>
                <div class="form-group">
                <label class="control-label">Link</label>
                <input type="text" class="form-control" name="link" value="<?php echo $portfolio['link'] ?>"> 
                </div>
                <div class="form-group">
                    <label class="control-label"><span class="label label-danger">meta keywords</span></label>
                <input type="text" class="form-control" name="meta_kw" value="<?php echo $portfolio['meta_kw'] ?>"> 
                </div>
                <div class="form-group">
                <label class="control-label"><span class="label label-danger">meta descriptions</span></label>
                <input type="text" class="form-control" name="meta_d" value="<?php echo $portfolio['meta_d'] ?>"> 
                </div>
                <div class="form-group">
                    <label class="control-label">Главная картинка</label>
                    <input class="form-control" name="main_img" type="text" readonly="readonly" placeholder="Нажмите для выбора главной картинки" value="<?php echo $portfolio['main_img']?>" onclick="openKCFinder_singleFile(this)" style="cursor:pointer" />
                </div>
                <div id="kcfinder_div1"></div> 
                <button class="btn btn-primary" type="submit" name="save_info">Сохранить информацию</button>
            </div>
<!-- Правая колонка -->          
        </form>
<div class="col-sm-12"><hr></div>
<!-- изображения портфолио  -->
        <form action="" class="form-horizontal adminex-form" enctype="multipart/form-data" method="post">
            <input type="hidden" name="id" value="<?php echo $portfolio['id'] ?>">
            <div class="col-sm-offset-3 col-sm-6">
                <h2> Добавьте изображения в портфолио:</h2>
            <div class="form-group">
                <div id="parentId" class="col-sm-10">
                    <?php if(count($portfolio_img) == 0): ?>
                        <div>
                            <nobr><input name="description_url[]" type="text" placeholder="Don't text"> <input name="url[]" type="text" readonly="readonly" placeholder="Click here to browse the server" onclick="openKCFinder_singleFile(this)" style="width:600px;cursor:pointer" />
                          <a style="color:red;" onclick="return deleteField(this)" href="#">[—]</a>
                          <a style="color:green;" onclick="return addField()" href="#">[+]</a></nobr>
                        </div>
                    <?php else: ?>
                    <?php for($i = 0; count($portfolio_img) > $i; $i++): ?>
                        <div>
                            <nobr>
                                <input name="description_url[]" type="text" <?php echo "value='".$portfolio_img[$i]['description']."'"; ?>"> <input name="url[]" type="text" readonly="readonly" <?php echo " value='".$portfolio_img[$i]['link']."'"; ?>" onclick="openKCFinder_singleFile(this)" style="width:600px;cursor:pointer" />
                                <a style="color:red;" onclick="return deleteField(this)" href="#">[—]</a>
                                <a style="color:green;" onclick="return addField()" href="#">[+]</a>
                            </nobr>
                        </div>
                    <?php endfor; ?>
                    <?php endif; ?>
                </div>
            </div>
            
            
            <button class="btn btn-primary" type="submit" name="save_img">Сохранить</button>
            
<!--  array(4) {
  ["id"]=&gt;
  string(3) "666"
  ["description_url"]=&gt;
  array(3) {
    [0]=&gt;
    string(3) "123"
    [1]=&gt;
    string(3) "456"
    [2]=&gt;
    string(3) "789"
  }
  ["url"]=&gt;
  array(3) {
    [0]=&gt;
    string(45) "http://blog.local/files_content/images/75.jpg"
    [1]=&gt;
    string(54) "http://blog.local/files_content/images/8qR7KPB7Uh4.jpg"
    [2]=&gt;
    string(86) "http://blog.local/files_content/images/%D0%A0%D0%B8%D1%81%D1%83%D0%BD%D0%BE%D0%BA1.png"
  }
  ["save_img"]=&gt;
  string(0) ""
}
 -->


  
            </div>
        </form>
        
        </div>
        </div>
        </div>
    </section>

<script>
var countOfFields = 1; // Текущее число полей
var curFieldNameId = 1; // Уникальное значение для атрибута name
var maxFieldLimit = 25; // Максимальное число возможных полей
function deleteField(a) {
  if (countOfFields > 1)
  {
 // Получаем доступ к ДИВу, содержащему поле
 var contDiv = a.parentNode;
 // Удаляем этот ДИВ из DOM-дерева
 contDiv.parentNode.removeChild(contDiv);
 // Уменьшаем значение текущего числа полей
 countOfFields--;
 }
 // Возвращаем false, чтобы не было перехода по сслыке
 return false;
}
function addField() {
 // Проверяем, не достигло ли число полей максимума
 if (countOfFields >= maxFieldLimit) {
 alert("Число полей достигло своего максимума = " + maxFieldLimit);
 return false;
 }
 // Увеличиваем текущее значение числа полей
 countOfFields++;
 // Увеличиваем ID
 curFieldNameId++;
 // Создаем элемент ДИВ
 var div = document.createElement("div");
 // Добавляем HTML-контент с пом. свойства innerHTML
 div.innerHTML = "<nobr><input name=\"description_url[]\" type=\"text\" placeholder=\"Don't text\"> <input name=\"url[]\" type=\"text\" readonly=\"readonly\" placeholder=\"Click here to browse the server\" onclick=\"openKCFinder_singleFile(this)\" style=\"width:600px;cursor:pointer\" /> <a style=\"color:red;\" onclick=\"return deleteField(this)\" href=\"#\">[—]</a> <a style=\"color:green;\" onclick=\"return addField()\" href=\"#\">[+]</a></nobr>";
 // Добавляем новый узел в конец списка полей
 document.getElementById("parentId").appendChild(div);
 // Возвращаем false, чтобы не было перехода по сслыке
 return false;
}
</script>




<?php require_once 'footer.php'; //подключаем header?> 
        

