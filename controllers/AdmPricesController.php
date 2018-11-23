<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdmPricesController
 *
 * @author andrey
 */
class AdmPricesController extends AdminBase{
    //put your code here
    public static $title = "Админпанель";
    public static $activ_page = "Prices";
    
public function actionIndex(){
        
        self::checkAdmin();
        
        //$servicesList = Services::getAllServicesAdmin();
        
        
        //$servicesDesc = info::getInfo();
        
        //$title_service = $servicesDesc['title_service'];
        //$info_service = $servicesDesc['info_service'];
        
        //var_dump($servicesList);
        
        require_once (ROOT . ADM_TMPL . 'prices.php');
        
        return true;
        
    }
    
    public function actionUpdateprice(){ //обновление из модального окна 
        
        self::checkAdmin();
        
        if(isset($_POST['save'])){
            //$message = Services::updateService();
            
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            header ('Location: '.DOMAIN .'/adminpanel/prices');
        }else return false;
        
    }
    
    public function actionUpdateInfoPrices(){ //обновление основной информации о ценах
        
        self::checkAdmin();
        
        if(isset($_POST['save'])){
            //$message = info::updateServiceInfo();
            
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            header ('Location: '.DOMAIN .'/adminpanel/prices');
        }else return false;
        
    }
    
    public function actionCreateprice(){ // создангие новой карточки цены
        
        self::checkAdmin();
        
        if(isset($_POST['create'])){
            
            //$id = Services::createServ($_POST['name']);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
            header ('Location: '.DOMAIN .'/adminpanel/updateprices/'.$id);
        }
        
    }
    
    public function actionDelprice($id){ //удаление карточки цены
        
        self::checkAdmin();

        //$del = Services::delServ($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($del){
            header ('Location: '.DOMAIN .'/adminpanel/prices'); 
        }
    }
    
    public function actionPublicprice($id){  // снятие\постановка публикации карточки
        
        self::checkAdmin();

        //$pub = Services::changeIsPublic($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($pub){
            header ('Location: '.DOMAIN .'/adminpanel/prices'); 
        }
    }
}
