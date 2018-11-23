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
        
       // $servicesList = Services::getAllServicesAdmin();
        
        
        //$servicesDesc = info::getInfo();
        
        //$title_service = $servicesDesc['title_service'];
        //$info_service = $servicesDesc['info_service'];
        
        //var_dump($servicesList);
        
        require_once (ROOT . ADM_TMPL . 'prices.php');
        
        return true;
        
    }
    
    public function actionUpdateprice(){
        
        self::checkAdmin();
        
        if(isset($_POST['save'])){
            //$message = Services::updateService();
            
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            header ('Location: '.DOMAIN .'/adminpanel/services');
        }else return false;
        
    }
    
    public function actionUpdateInfoPrices(){
        
        self::checkAdmin();
        
        if(isset($_POST['save'])){
            //$message = info::updateServiceInfo();
            
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            header ('Location: '.DOMAIN .'/adminpanel/services');
        }else return false;
        
    }
    
    public function actionCreateprice(){
        
        self::checkAdmin();
        
        if(isset($_POST['create'])){
            
            //$id = Services::createServ($_POST['name']);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
            header ('Location: '.DOMAIN .'/adminpanel/updateservices/'.$id);
        }
        
    }
    
    public function actionDelprice($id){
        
        self::checkAdmin();

        //$del = Services::delServ($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($del){
            header ('Location: '.DOMAIN .'/adminpanel/services'); 
        }
    }
    
    public function actionPublicprice($id){
        
        self::checkAdmin();

        //$pub = Services::changeIsPublic($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($pub){
            header ('Location: '.DOMAIN .'/adminpanel/services'); 
        }
    }
}
