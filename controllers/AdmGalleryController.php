<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdmGalleryController
 *
 * @author andrey
 */
class AdmGalleryController extends AdminBase{
    //put your code here
    public static $title = "Админпанель";
    public static $activ_page = "gallery";
    
    public function actionGalleryedit($id){
        
        self::checkAdmin();
        
        if(isset($_POST['save'])){
            $message = Gallery::saveAlbum();
            
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
        }
        
        $album = Gallery::getAlbumById($id);
        
        require_once (ROOT . ADM_TMPL . 'gallery_edit.php');
        
        return true;
        
    }
    
    public function actionGallery(){
        
        self::checkAdmin();
        
        $galleryList = Gallery::getAllAlbums('admin');
        
        require_once (ROOT . ADM_TMPL . 'gallery.php');
        
        return true;
        
    }
    
    public function actionCreategallery(){
        
        self::checkAdmin();
        
        if(isset($_POST['create'])){
            
            $id = Gallery::createAlbum($_POST['name']);
            //var_dump($_SESSION);
            var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
            header ('Location: '.DOMAIN .'/adminpanel/gallery/'.$id);
        }
        
    }
    public function actionGallerydel($id){
        
        self::checkAdmin();
        
        $del = Gallery::delAlbum($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($del){
            header ('Location: '.DOMAIN .'/adminpanel/gallery/'); 
        }
        
    }
    
    public function actionPublicgallery($id){
        
        self::checkAdmin();
        
        $pub = Gallery::changeIsPublicAlbum($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($pub);
        if($pub){
            header ('Location: '.DOMAIN .'/adminpanel/gallery'); 
        }
        
    }
    
}
