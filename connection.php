<?php
  class Db {
    private static $instance = NULL;

    //private function __construct() {}
    public static function getConnect() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=plymouth_main', 'plymouth_main', '47zN(}.eX?9s', $pdo_options);
      }
      return self::$instance;
    }
  }
?>