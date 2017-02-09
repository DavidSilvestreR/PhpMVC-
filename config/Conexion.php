<?php
/**
 * conexion a la base de datos
 */
require_once 'data.php';
class Conexion extends PDO
{
  private $localhots=LOCALHOST;
  private $user=USSER;
  private $pasword=PASSWORD;
  private $db=DB;
  private $pdo;
  function __construct()
  {
    try {
      parent::__construct("mysql:host={$this->localhots};dbname={$this->db}","{$this->user}","{$this->pasword}");
    } catch (Exception $e) {
      echo 'Error!: ' . $e->getMessage() . PHP_EOL;
    }finally{
      $pdo=null;
    }
  }
}


 ?>
