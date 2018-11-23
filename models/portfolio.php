<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of portfolio
 *
 * @author andrey
 */
class portfolio {
    //put your code here
    public static function getAllPortfolios(){
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        $portfolios = array(); //инициализируем переменную  
        $result = $db->query('SELECT id, name, main_img, client, is_public  FROM portfolio'); // получаем из базы список
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        while($row = $result->fetch()){
            foreach ($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                $portfolios[$i][$key] = $value;
            }
            $i++;
        }
       return $portfolios; //возвращаем массив
    }
    
    public static function getPartfolioById($id){
        $id = intval($id);
        
        if($id){
            $db = Db::getConnection();//инициализируем подключение к бд
            
            $result = $db->query('SELECT * FROM portfolio WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            
            foreach($row as $key => $value) { 
                    $portfolio[$key] = $value;
                }
            $portfolio['date'] = date("Y-m-d", $portfolio['date']);
            return $portfolio;
        }
    }
    
    public static function getImgPortfolioById($id_portfolio){
        $id_portfolio = intval($id_portfolio);
        if($id_portfolio){
            $db = Db::getConnection();//инициализируем подключение к бд
            $portfolio_img = [];
            $result = $db->query('SELECT link, description FROM gallery WHERE id_portfolio ='.$id_portfolio.';'); // получаем из базы список
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $result->fetch()){
                    $portfolio_img[$i]['link'] = $row['link'];
                    $portfolio_img[$i]['description'] = $row['description'];
                $i++;
            }
            return $portfolio_img;
        }
    }

        public static function updatePortfolioInfo($id){
        
        $id_post = filter_input(INPUT_POST, 'id');
        $id = intval($id);
        if($id == $id_post){
            $db = Db::getConnection();

            $name = filter_input(INPUT_POST, 'name');
            $description = filter_input(INPUT_POST, 'description');
            $is_public = filter_input(INPUT_POST, 'is_public');
            $main_img = filter_input(INPUT_POST, 'main_img');
            $client = filter_input(INPUT_POST, 'client');
            $skills = filter_input(INPUT_POST, 'skills');
            $date = Date::changeDateToUnix(filter_input(INPUT_POST, 'date'));//filter_input(INPUT_POST, 'date');//
            $link = filter_input(INPUT_POST, 'link');
            $meta_kw = filter_input(INPUT_POST, 'meta_kw');
            $meta_d = filter_input(INPUT_POST, 'meta_d');

            $stmt = $db->prepare("UPDATE portfolio set name = :name, description = :description, is_public = :is_public, main_img = :main_img, client = :client, skills = :skills, date = :date, link = :link, meta_kw = :meta_kw, meta_d = :meta_d WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':is_public', $is_public);
            $stmt->bindParam(':main_img', $main_img);
            $stmt->bindParam(':client', $client);
            $stmt->bindParam(':skills', $skills);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':link', $link);
            $stmt->bindParam(':meta_kw', $meta_kw);
            $stmt->bindParam(':meta_d', $meta_d);
            $stmt->execute();
            return true;
        }
    }
    
    public static function updateImgPortfolioById($id){
        
        $id_post = intval(filter_input(INPUT_POST, 'id'));
        $id = intval($id);
        if($id_post == $id){
            $db = Db::getConnection(); //соединение с базой
            
            $imgs = $db->prepare("DELETE FROM gallery WHERE id_portfolio = :id_portfolio"); // удаление, имеющихся до момента нажатия кнопки сохранить, записей 
            $imgs->bindParam(':id_portfolio', $id);
            $imgs->execute();

            $desc_img = filter_input(INPUT_POST, 'description_url', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
            $link_img = filter_input(INPUT_POST, 'url', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

            for($i = 0; count($link_img) > $i; $i++){
                if (empty($link_img[$i])) {
                    continue;
                }
                $stmt = $db->prepare("INSERT INTO gallery (id_portfolio, description, link) VALUES (:id_portfolio, :description, :link)");
                $stmt->bindParam(':id_portfolio', $id);
                $stmt->bindParam(':description', $desc_img[$i]);
                $stmt->bindParam(':link', $link_img[$i]);
                $stmt->execute();
            }
        }  
        return true;
    }
    
    public static function changeIsPublicPortfolio($id){
        
        $db = Db::getConnection();
        $result = $db->query('SELECT * FROM portfolio WHERE id='.$id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        
        $is_publication = $row['is_public'];
        
        if($is_publication == 0) {$is_publication_new = 1;}
        else {$is_publication_new = 0;}
        
        $stmt = $db->prepare("UPDATE portfolio SET is_public = :is_public WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':is_public', $is_publication_new);
        $stmt->execute();

        return true;
    }
    
    public static function delPortfolio($id){
        
        $db = Db::getConnection();
        
        $stmt = $db->prepare("DELETE FROM portfolio WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        $imgs = $db->prepare("DELETE FROM gallery WHERE id_portfolio = :id_portfolio"); // удаление, имеющихся до момента нажатия кнопки сохранить, записей 
        $imgs->bindParam(':id_portfolio', $id);
        $imgs->execute();
        
        return true;
    }
    
    public static function createPortfolio($name){
        
        $db = Db::getConnection();
        
        $stmt = $db->prepare("INSERT INTO portfolio (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        
        return $db->lastInsertId();
    }
}
