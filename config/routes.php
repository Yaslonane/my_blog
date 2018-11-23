<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 01.04.2016
 * Time: 18:04
 */

return array(

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'login' => 'User/login',
    'logout' => 'User/logout',
    
    'adminpanel/UpdateInfoService' => 'AdmService/UpdateInfoService',
    'adminpanel/delserv/([0-9]+)' => 'AdmService/delserv/$1',
    'adminpanel/publicserv/([0-9]+)' => 'AdmService/publicserv/$1',
    'adminpanel/createservices' => 'AdmService/createservices',
    'adminpanel/services' => 'AdmService/services',

    'adminpanel/posts/([0-9]+)' => 'Adminpanel/postedit/$1',
    'adminpanel/publicpost/([0-9]+)' => 'Adminpanel/publicpost/$1',
    'adminpanel/delpost/([0-9]+)' => 'Adminpanel/delpost/$1',
    'adminpanel/createpost' => 'Adminpanel/createpost',
    'adminpanel/posts' => 'Adminpanel/posts',
    
    'adminpanel/category/([0-9]+)' => 'Adminpanel/categoryedit/$1',
    'adminpanel/publiccat/([0-9]+)' => 'Adminpanel/publiccat/$1',
    'adminpanel/delcat/([0-9]+)' => 'Adminpanel/delcat/$1',
    'adminpanel/createcat' => 'Adminpanel/createcat',
    'adminpanel/category' => 'Adminpanel/category',
    
    'adminpanel/createprices' => 'AdmPrices/pricesCreate',
    'adminpanel/publicprices/([0-9]+)' => 'AdmPrices/pricesPublic/$1',
    'adminpanel/delprices/([0-9]+)' => 'AdmPrices/pricesDel/$1',
    'adminpanel/prices/([0-9]+)' => 'AdmPrices/pricesedit/$1',
    'adminpanel/prices' => 'AdmPrices/index',
    
    'adminpanel/createportfolio' => 'AdmPortfolio/portfolioCreate',
    'adminpanel/publicportfolio/([0-9]+)' => 'AdmPortfolio/portfolioPublic/$1',
    'adminpanel/delportfolio/([0-9]+)' => 'AdmPortfolio/portfolioDel/$1',
    'adminpanel/portfolio/([0-9]+)' => 'AdmPortfolio/portfolioedit/$1',
    'adminpanel/portfolio' => 'AdmPortfolio/index',
    
    'adminpanel/gallery/([0-9]+)' => 'AdmGallery/galleryedit/$1',
    'adminpanel/publicgallery/([0-9]+)' => 'AdmGallery/publicgallery/$1',
    'adminpanel/gallerydel/([0-9]+)' => 'AdmGallery/gallerydel/$1',
    'adminpanel/creategallery' => 'AdmGallery/creategallery',
    'adminpanel/gallery' => 'AdmGallery/gallery',
    
    'adminpanel/users/([0-9]+)' => 'Adminpanel/usersedit/$1',
    'adminpanel/users' => 'Adminpanel/users',
    //'adminpanel/cabinet/([0-9]+)' => 'AdminPanel/cabinet/$1',
    
    'adminpanel' => 'AdmMain/index',
   /* 'services/([0-9]+)' => 'services/view/$1',*/
    
    /* раздел блога*/
    'portfolio/([0-9]+)' => 'portfolio/view/$1', 
    'portfolio/page-([0-9]+)' => 'portfolio/index/$1', 
    'portfolio' => 'portfolio/index', //'portfolio/edit/([0-9]+)' => 'portfolio/edit/$1', //'gallery' => 'gallery/index',
    
    /* раздел с готовыми скриптами*/
    'scripts/category/([0-9]+)/page-([0-9]+)' => 'scripts/category/$1/$2',
    'scripts/category/([0-9]+)' => 'scripts/category/$1',
    'scripts/([0-9]+)' => 'scripts/view/$1',
    'scripts/page-([0-9]+)' => 'scripts/index/$1',
    'scripts' => 'scripts/index',//'scripts/edit/([0-9]+)' => 'scripts/edit/$1',
    
    /*'uploads' => 'site/uploads',*/
    
    /* раздел блога*/
    'blog/category/([0-9]+)/page-([0-9]+)' => 'blog/category/$1/$2',
    'blog/category/([0-9]+)' => 'blog/category/$1',
    'blog/tag/([0-9]+)/page-([0-9]+)' => 'blog/tag/$1/$2',
    'blog/tag/([0-9]+)' => 'blog/tag/$1',
    'blog/tag' => 'blog/tag',
    'post/([0-9]+)' => 'blog/view/$1',
    'blog/page-([0-9]+)' => 'blog/index/$1',
    'blog' => 'blog/index', //'post/edit/([0-9]+)' => 'blog/edit/$1',
    
    /* главный раздел*/
    '404' => 'main/404',
    'about' => 'main/about',
    '' => 'main/index',

    /*'printers/([0-9]+)' => 'printers/view/$1',
    'printers/edit/([0-9]+)' => 'printers/edit/$1',
    'cartriges' => 'cartriges/index',
    

    'product/([0-9]+)' => 'product/view/$1',
    'catalog' => 'catalog/index',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart' => 'cart/index',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'contacts' => 'site/contact',

    'news/([0-9]*)' => 'news/view',
    'news' => 'news/index',
    'articles' => 'articles/list',
    'news/archive' => 'news/archive',

     * 'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',     */
);
