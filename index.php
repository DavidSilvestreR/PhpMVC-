<?php
require_once 'config/data.php';
$url= !empty($_GET['url']) ?$_GET['url']:"Index/index";
$url=explode("/",$url);
  $controller="";
  $method="";

if (isset($url[0])) {
    $controller=$url[0];
}
if (isset($url[1])) {
  if ($url[1] != "") {
    $method=$url[1];
  }
}
if (isset($url[2])) {
    if ($url[1] !="") {
      $params=$url[2];
    }
}
// echo "$controller";
// echo "$method";
spl_autoload_register(function($class){
  if (file_exists(LBS.$class.".php")) {
    require_once LBS.$class.".php";
  }
});
new Controllers();
$controllersPath='Controllers/'.$controller.'.php';
if (file_exists($controllersPath)) {
  require_once $controllersPath;
  $controller=new $controller();
  if (isset($method)) {
    if (method_exists($controller,$method)) {
      if (isset($params)) {
        $controller->{$method}($params);
      }else{
        $controller->{$method}();
      }
    }else {
      echo "error 404 not found";
    }

  }
}else{
  echo "error 404 not found";
}

//print($controllersPath);


 ?>
