<?php

/**
 * Description of AdminPanelController
 *
 * @author andrey
 */
class AdmMainController extends AdminBase{
    //put your code here
    public static $title = "Админпанель";
    public static $activ_page = "main";
    public static $meta_kw = "";
    public static $meta_d = "";
    
    public function actionIndex(){
        
        self::checkAdmin(); // ! ! ! присвоить adm в сессию и перенаправлять на страницу закрытого домтупа!!!
        $message = false;
        if(isset($_POST['save'])){
            //$message = Services::updateService();
            $message = info::updateInfo();
        }
        $gen_inf = info::getInfo();
        
        require_once (ROOT . ADM_TMPL . 'index.php');
        
        return true;
        
    }
    
    
    /*
    public function actionPostedit($id){
        
        self::checkAdmin();
        
        if(isset($_POST['save'])){
            $message = Blogs::savePost();
            
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
        }
        
        $category = Blogs::getListCategory();
        
        $cat_in_post = Blogs::getCategoryByIds($id);
        
        $post = Blogs::getOnePostByIdAdmin($id);
        
        
        
        //var_dump($category);
        //var_dump($cat_in_post);
        
        require_once (ROOT . ADM_TMPL . 'post_edit.php');
        
        return true;
        
    }
    
    public function actionPosts(){
        
        self::checkAdmin();
        
        $posts = Blogs::getAllPostsAdmin();
        
        //var_dump($posts);
        
        require_once (ROOT . ADM_TMPL . 'posts.php');
        
        return true;
        
    }
    
        public function actionCreatepost(){
        
        self::checkAdmin();
        
        if(isset($_POST['create'])){
            
            $id = Blogs::createPost($_POST['name']);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
            header ('Location: '.DOMAIN .'/adminpanel/posts/'.$id);
        }
        
    }
    
        public function actionDelpost($id){
        
        self::checkAdmin();

        $del = Blogs::delPost($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($del){
            header ('Location: '.DOMAIN .'/adminpanel/posts/'); 
        }
    }
    
    public function actionPublicpost($id){
        
        self::checkAdmin();

        $pub = Blogs::changeIsPublic($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($pub){
            header ('Location: '.DOMAIN .'/adminpanel/posts/'); 
        }
    }
    
    */
    
    /*
    
    public function actionCategoryedit($id){
        
        self::checkAdmin();
        
        if(isset($_POST['save'])){
            $message = Blogs::saveCat();
            
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
        }
        
        $category = Blogs::getListCategoryByIdAdmin($id);
        
        //var_dump($category);
        //var_dump($cat_in_post);
        
        require_once (ROOT . ADM_TMPL . 'cat_edit.php');
        
        return true;
        
        
    }
    
    public function actionCategory(){
        
        self::checkAdmin();
        
        $categoryList = Blogs::getListCategoryAdmin();
        
        //var_dump($posts);
        
        require_once (ROOT . ADM_TMPL . 'cat.php');
        
        return true;
        
    }
    
    public function actionCreatecat(){
        
        self::checkAdmin();
        
        if(isset($_POST['create'])){
            
            $id = Blogs::createCat($_POST['name']);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
            header ('Location: '.DOMAIN .'/adminpanel/category/'.$id);
        }
        
    }
    
        public function actionDelcat($id){
        
        self::checkAdmin();

        $del = Blogs::delCat($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($del){
            header ('Location: '.DOMAIN .'/adminpanel/category/'); 
        }
    }
    
    public function actionPubliccat($id){
        
        self::checkAdmin();

        $pub = Blogs::changeIsPublicCat($id);
            //var_dump($_SESSION);
            //var_dump($_POST);
            //var_dump($_FILES);
            //var_dump($id);
        if($pub){
            header ('Location: '.DOMAIN .'/adminpanel/category/'); 
        }
    }
    
    */
    
    
    
    
    
    /*
    public function actionUsersedit($id){
        
        self::checkAdmin();
        
        $user = User::getUserById($id);
        
        var_dump($user);
        
        echo "Admin edit Users " . $id ;
        return true;
        
    }
    
    public function actionUsers(){
        
        self::checkAdmin();
        
        $users = User::getAllUsers();
        
        var_dump($users);
        
        echo "Admin all Users ";
        return true;
        
    }*/
}
