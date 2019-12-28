<?php

if(isset($_GET['route'])){
    $route = $_GET['route'];
    if($route == "home"){
        include('views/home.php');
    }
    if($route == "post"){
        include('views/post.php');
    }
}else{
    include('views/auth.php');
}

?>