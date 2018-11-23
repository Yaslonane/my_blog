<?php
/**
 * Description of ServicesController
 *
 * @author andrey
 */
class ServicesController{
    //put your code here
    public static $title = "AVTOZONA | Услуги";
        /*
         * 
         * вывод страницы
         *
         * 
         */
    public function actionIndex(){
        
        //$inf = info::getInfo();
        
        $serv = Services::getAllServices();
        
        require_once(ROOT . TMPL .'services.php');
        
        return true;
    }
    
    public function actionView($id) { //функция вывода одного товара с подробным описание по Id
        
        $srv = Services::getAllServices();
        $service = Services::getServiceById($id);
        
        require_once(ROOT . TMPL . 'service_single.php'); //вызываем файл вида страницы с товаром и передаем Id
        
        return true;
    }
        /* 
         * конец вывода
         */
}

