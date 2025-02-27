<?php 

define('DB_HOST_form', 'localhost');
define('DB_USER_form', 'root');
define('DB_PASSWORD_form', '');
define('DB_NAME_form', 'site_transito');

class DbForms {
  
  public function queryForm($sql, $params=[]){
    try {
      $pdo = new PDO('mysql:host=' . DB_HOST_form . ';dbname=' . DB_NAME_form . ';charset=utf8mb4', DB_USER_form, DB_PASSWORD_form);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $pdo->prepare($sql);
      $stmt->execute($params);

      $restults = $stmt->fetchAll(PDO::FETCH_CLASS);
      return [
        'status' => 'success',
        'data' => $restults
      ];

    } catch (PDOException $err) {
      return [
        'status' => 'error',
        'data' => $err->getMessage()
      ];
    }
  }
}