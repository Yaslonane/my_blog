<?php require_once 'header.php'; //подключаем header?> 

<!-- HTML-код модального окна
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Редактирование записи</h4>
        </div>
        <div class="modal-body">
            <form action="update" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id">
                    
                    <label for="title" class="form-control-label">title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                    
                    <label for="icon" class="form-control-label">icon:</label>
                    <input type="text" class="form-control" id="icon" name="icon">
                    
                    <label for="description" class="form-control-label">description:</label>
                    <input type="text" class="form-control" id="description" name="description">

                    <div class="checkbox"><label><input type="checkbox" name="is_active" id="is_active"> is_active </label></div><br>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="save">Сохранить</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
 HTML-код модального окна -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Редактирование записи</h4>
        </div>
          <form action="./updateservice" method="post">
        <div class="modal-body">
          <input type="hidden" class="form-control" name="id" id="id">
            <div class="form-group">
              <label for="title" class="form-control-label">title:</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
              <label for="icon" class="form-control-label">icon:</label>
              <input type="text" class="form-control" id="icon" name="icon">
            </div>
            <div class="form-group">
              <label for="description" class="form-control-label">description:</label>
              <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="checkbox">
            <label> is_active </label><input type="checkbox" name="is_active" id="is_active">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Сохранить</button>
        </div>
          </form>
      </div>
    </div>
  </div>


<!--body wrapper start-->
    <div class="wrapper">

        <div class="row">
        <div class="col-sm-12">



        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>Заголовок</th>
            <th>Иконка</th>
            <th>Описание</th>
            <th>Опубликовано</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($servicesList as $service): ?>
        <tr class="gradeA">
            <td><?php echo $service['title']; ?></td>
            <td><?php echo htmlspecialchars($service['icon']); ?></td>
            <td><?php echo $service['description']; ?></td>
            <td>
                <a href="<?php DOMAIN; ?>/adminpanel/publicserv/<?php echo $service['id']; ?>" > <i <?php echo ($service['is_active'] == 0) ? 'class="fa fa-times"  style="font-size:20px; color:#cc0000 "' : "class='fa fa-check'"; ?>></i></a>
            </td>
           <!-- <td><a href="<?php DOMAIN; ?>/adminpanel/updateservices/<?php echo $service['id']; ?> " ><i class="fa fa-edit"></i></a></td> -->
            <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal" data-whatever='<?php echo json_encode($service); ?>'><i class="fa fa-edit"></i></button></a></td>
            <td><a href="<?php DOMAIN; ?>/adminpanel/delserv/<?php echo $service['id']; ?>"> <i class="fa fa-trash-o"></i></a></td>
        </tr>
            <?php endforeach; ?>
  
        </tbody>
        </table>
        </div>
        </div>
            <div>
                
            </div>
            <form action="./createservices" class="form-horizontal adminex-form" method="post">
                    <label class="col-sm-2 col-sm-2 control-label">Название услуги</label>
                    <div class="col-sm-6"><input type="text" class="form-control" name="name"></div>
                <button class="btn btn-primary" type="submit" name="create">Создать</button>
            </form>
                                <hr>
            <div class="col-sm-3">
            </div>
            <form action="./UpdateInfoService" class="form-horizontal adminex-form" method="post">
                <div class="form-group col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Заголовок</label>
                        <input class="form-control" name="title_service" type="text" value="<?php echo $title_service ?>"/>
                    </div>
                    <label class=" control-label">Информация</label>
                    <div>
                        <textarea id="editor1" name="info_service" class="form-control" rows="100"><?php echo $info_service ?></textarea>
                    </div>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'editor1',{'filebrowserBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=files',
                        'filebrowserImageBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=images',
                        'filebrowserFlashBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=flash',
                        'filebrowserUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=files',
                        'filebrowserImageUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=images',
                        'filebrowserFlashUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=flash'} );
                    </script>
                    <button class="btn btn-primary" type="submit" name="save">сохранить</button>
                </div>
            </form>
        </div>
        </div>
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Кнопка, что спровоцировало модальное окно  
            var recipient = button.data('whatever')// Извлечение информации из данных-* атрибутов  
            // Если необходимо, вы могли бы начать здесь AJAX-запрос (и выполните обновление в обратного вызова).  
            // Обновление модальное окно Контента. Мы будем использовать jQuery здесь, но вместо него можно использовать привязки данных библиотеки или других методов.  
            var modal = $(this)
            modal.find('.modal-title').text('Редактирование записи № ' + recipient.id)
            modal.find('.modal-body #id').val(recipient.id)
            modal.find('.modal-body #title').val(recipient.title)
            modal.find('.modal-body #icon').val(recipient.icon)
            modal.find('.modal-body #description').val(recipient.description)
            //modal.find('.modal-body #is_public').val(recipient.is_public)
            if(recipient.is_active == 1){$('#is_active').prop('checked', true);}
          })
    </script>


        <?php require_once 'footer.php'; //подключаем header?> 
        