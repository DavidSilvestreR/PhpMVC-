<?php
/**
 *
 */
class Index extends Controllers
{
  public $response;
  private $state=true;
  function __construct()
  {
    parent::__construct();
  }
  public function index(){
    $this->response=$this->model->datosPersonales();
    $data=$this->state;
    require_once "./views/index.view.php";

  }
  public function login($datos){
  echo "$datos";
  }
}


 ?>
