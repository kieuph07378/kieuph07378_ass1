<?php
require_once './app/models/Product.php';
require_once './app/models/Category.php';
class HomeController{

    public function index(){
        $products = Product::all();
        include_once './app/views/homepage.php';
    }

    public function detail(){
       $detail = Category::all();
       include_once './app/views/detail-product.php'; 
       
    }

    public function contact(){
        return "trang liên hệ của dự án ";
    }

}

?>