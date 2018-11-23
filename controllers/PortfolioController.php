<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PortfolioController
 *
 * @author andrey
 */
class PortfolioController {
    //title
    public static $title = "AVTOZONA | Портфолио";
    
    public function actionIndex($page = 1){
        
        echo "General page portfolio";
        echo $page." page";
        return true;
    }
    
    public function actionView($id){
        
        echo "Element portfolio id".$id;
        return true;
    }
}
