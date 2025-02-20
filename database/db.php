<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login_transito_adm');

class Db{
  public function query($sql, $params=[]){
    try{
      $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $pdo->prepare($sql);
      $stmt->execute($params);

      $results = $stmt->fetchAll(PDO::FETCH_CLASS);
      return [
        'status' => 'success',
        'data' => $results
      ];

    } catch (PDOException $err) {
      return [
        'status' => 'error',
        'data' => $err->getMessage()
      ];
    }
  }
}