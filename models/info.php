<?php
/**
 * Description of info
 *
 * @author andrey
 */
class info {
    //put your code here
    public static function getInfo(){ //функция для получения массива общей информации из бд
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $info = array(); //инициализируем переменную 
        
        $result = $db->query('SELECT * FROM general WHERE id=1'); // получаем из базы список
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $row = $result->fetch();
        
        if($row== false){
            $info = null;
        }else{
            foreach ($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
            $info[$key] = $value;
            }
        }
       return $info; //возвращаем массив
    }
    
    /*public static function getBrands($role = 'user'){
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $brandList = array(); //инициализируем переменную 
        
        $sql = "SELECT * FROM brands";
        
        if($role == 'user'){
            $sql .= " WHERE is_publication = 1";
        }
        
        $result = $db->query($sql); // получаем из базы список
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while($row = $result->fetch()){
            foreach($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                $brandList[$i][$key] = $value;
            }
            $i++;
        }
        
        return $brandList; //возвращаем массив
        
    }*/
    
    public static function updateInfo(){

        $db = Db::getConnection();
        
        $id = 1;//filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $logo = filter_input(INPUT_POST, 'logo');
        $favicon = filter_input(INPUT_POST, 'favicon');
        $vk = filter_input(INPUT_POST, 'vk');
        $telegram = filter_input(INPUT_POST, 'telegram');
        $twitter = filter_input(INPUT_POST, 'twitter');
        $instagram = filter_input(INPUT_POST, 'instagram');
        $github = filter_input(INPUT_POST, 'github');
        $info = filter_input(INPUT_POST, 'info');
        $meta_d = filter_input(INPUT_POST, 'meta_d');
        $meta_kw = filter_input(INPUT_POST, 'meta_kw');

        
        $stmt = $db->prepare("UPDATE general set name = :name, email = :email, phone = :phone,"
                . " logo = :logo, favicon = :favicon, vk = :vk, telegram=:telegram, twitter = :twitter, instagram = :instagram, github = :github, info = :info, meta_kw = :meta_kw, meta_d = :meta_d WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':logo', $logo);
        $stmt->bindParam(':favicon', $favicon);
        $stmt->bindParam(':vk', $vk);
        $stmt->bindParam(':telegram', $telegram);
        $stmt->bindParam(':twitter', $twitter);
        $stmt->bindParam(':instagram', $instagram);
        $stmt->bindParam(':github', $github);
        $stmt->bindParam(':info', $info);
        $stmt->bindParam(':meta_kw', $meta_kw);
        $stmt->bindParam(':meta_d', $meta_d);

        
        $stmt->execute();
        
        if($stmt->rowCount() > 0) return "Запись обновлена";
        else return "error!!!";

    }
    
    public static function updateServiceInfo(){
        
        $db = Db::getConnection();
        
        $title_service = filter_input(INPUT_POST, 'title_service');
        $info_service = filter_input(INPUT_POST, 'info_service');
        
        $stmt = $db->prepare("UPDATE general set title_service = :title_service, info_service = :info_service WHERE id=1");
        $stmt->bindParam(':title_service', $title_service);
        $stmt->bindParam(':info_service', $info_service);

        
        $stmt->execute();
        
        if($stmt->rowCount() > 0) return "Запись обновлена";
        else return "error!!!";

    }
}
