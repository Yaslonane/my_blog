<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdmPortfolioController
 *
 * @author andrey
 */
class AdmPortfolioController extends AdminBase{
    //put your code here
    public static $title = "Админпанель";
    public static $activ_page = "portfolio";
    
    public function actionIndex(){
        
        self::checkAdmin();
        
        $portfolios = portfolio::getAllPortfolios();
        //var_dump($portfolios);
        
        require_once (ROOT . ADM_TMPL . 'portfolio.php');
        
        return true;
        
    }
    
    public function actionPortfolioEdit($id){
        
        self::checkAdmin();
        
        if(filter_input(INPUT_POST, 'save_info') !== null){
            $message = portfolio::updatePortfolioInfo($id);
            
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            if ($message == true) {
                header('Location: ' . DOMAIN . '/adminpanel/portfolio/' . $id);
            } else {
                $message = "Errors update info";
            }
        }
        if(filter_input(INPUT_POST, 'save_img') !== null){
            $message = portfolio::updateImgPortfolioById($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            if ($message == true) {
                header('Location: ' . DOMAIN . '/adminpanel/portfolio/' . $id);
            } else {
                $message = "Errors update imgs";
            }
        }
        //echo $id;
        $portfolio = portfolio::getPartfolioById($id);
        $portfolio_img = portfolio::getImgPortfolioById($id);

        require_once (ROOT . ADM_TMPL . 'portfolio_edit.php');
        
        return true;  

    }
    
    public function actionPortfolioDel($id){
        
        self::checkAdmin();

        $del = portfolio::delPortfolio($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($del){
            header('Location: '.DOMAIN. '/adminpanel/portfolio');
        }
    }
    
    public function actionportfolioPublic($id){
        
        self::checkAdmin();
        
        $pub = portfolio::changeIsPublicPortfolio($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($pub);
        if($pub){
            header('Location: '.DOMAIN. '/adminpanel/portfolio');
        } 
    }
    
    public function actionPortfolioCreate(){
        
        self::checkAdmin();
        if(filter_input(INPUT_POST, 'create') !== null){
            
            $id = portfolio::createPortfolio(filter_input(INPUT_POST, 'name')); //возвращает id из бд новой созданной записи 
                //var_dump($_SESSION);
                //var_dump($_POST);
                //var_dump($_FILES);
                //var_dump($id);
        }
        if($id){
            header('Location: ' . DOMAIN . '/adminpanel/portfolio/' . $id);
        }
    }
}
