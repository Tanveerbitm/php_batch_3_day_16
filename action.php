<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;
use App\classes\Detail;
use App\classes\Pattern;
use App\classes\FileUpload;

if(isset($_GET['pages'])){
    if($_GET['pages']=='home'){
        include 'pages/home.php';
    }
    elseif($_GET['pages']=='password-generate'){
        include 'pages/password-generator.php';
    }
    elseif ($_GET['pages']=='blog'){
        $blog = new Blog();
        $blogs = $blog->getAllBlog();
        include 'pages/blog.php';
    }
    elseif ($_GET['pages']=='products'){
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages']=='detail'){
        $detail = new Detail();
        $details = $detail->getdetail($_GET['id']);
        include 'pages/detail.php';
    }
    elseif ($_GET['pages']=='pattern'){

        include 'pages/pattern.php';
    }
    elseif ($_GET['pages']=='file-upload'){

        include 'pages/fileUpload.php';
    }
}
elseif (isset($_POST['btn'])){
    $passwordGenerator = new PasswordGenerator($_POST);
    $pass = $passwordGenerator->newPassword();
    include 'pages/password-generator.php';
}
elseif (isset($_POST['ptr'])){
    $pattern = new Pattern($_POST['input_length']);
    $result=$pattern->getPattern();
    include 'pages/pattern.php';
}
elseif (isset($_POST['img_btn'])){
    $fileupload = new FileUpload($_POST);
    $fileupload->index();
}
else{
    $home = new Home();
    $home->index();
}
