<?php
/**
 * Description of Services
 *
 * @author andrey
 */
class Services {
    //put your code here
    
    /*public static function getAllServices(){ //получаем все услуги
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $servicesList = array(); //инициализируем переменную 
        
        $result = $db->query('SELECT * FROM services WHERE is_publication = 1'); // получаем из базы список
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while($row = $result->fetch()){
            foreach($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                $servicesList[$i][$key] = $value;
            }
            $i++;
        }
        return $servicesList; //возвращаем массив
    }*/
    
    public static function getAllServicesAdmin(){ //получаем все услуги
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $servicesList = array(); //инициализируем переменную 
        
        $result = $db->query('SELECT * FROM servicecard'); // получаем из базы список
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;

        while($row = $result->fetch()){
            if($row== false){
                $servicesList = null;
            }else{foreach($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                    $servicesList[$i][$key] = $value;
                }
                $i++;
            }
        }
        return $servicesList; //возвращаем массив
    }
    
    /*public static function getLimitServices($limit = 3){ //получаем случайные услуги
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $servicesList = array(); //инициализируем переменную 
        
        $sql = "SELECT * FROM services WHERE is_publication = 1 ORDER BY RAND() LIMIT ". intval($limit) . "";
        
        $result = $db->query($sql); // получаем из базы список
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while($row = $result->fetch()){
            foreach($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                $servicesList[$i][$key] = $value;
            }
            $i++;
        }
        return $servicesList; //возвращаем массив
    }*/
    
    /*public static function getServiceById($id){
        
        $id = intval($id);
        
        if($id){
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM services WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            
            foreach($row as $key => $value) { 
                    $service[$key] = $value;
                }
            
            return $service;
        }
    }*/
    
    public static function updateService(){
        
        $db = Db::getConnection();
        
        $id = $_POST['id'];
        $title = $_POST['title'];
        $icon = $_POST['icon'];
        $is_active = $_POST['is_active'];
        $is_active == NULL ? $is_active = 0 : $is_active =1; 
        $description = $_POST['description'];

        
        $stmt = $db->prepare("UPDATE servicecard set title = :title, icon = :icon,  is_active = :is_active, description=:description WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':icon', $icon);
        $stmt->bindParam(':is_active', $is_active);
        $stmt->bindParam(':description', $description);

        
        $stmt->execute();
        
        if($stmt->rowCount() > 0) return "Запись обновлена";
        else return "error!!!";

    }
    
    public static function createServ($name){
        
        $db = Db::getConnection();
        
        $stmt = $db->prepare("INSERT INTO services (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        
        return $db->lastInsertId();
    }
    
    public static function delServ($id){
        
        $db = Db::getConnection();
        
        $stmt = $db->prepare("DELETE FROM services WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        return true;
    }
    
    public static function changeIsPublic($id){
        
        $db = Db::getConnection();
        $result = $db->query('SELECT * FROM servicecard WHERE id='.$id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        
        $is_active = $row['is_active'];
        
        if($is_active == 0) $is_active_new = 1;
        else $is_active_new = 0;
        
        $stmt = $db->prepare("UPDATE servicecard SET is_active = :is_active WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':is_active', $is_active_new);
        $stmt->execute();
        
        return true;
    }
    
}
