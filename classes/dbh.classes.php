<?php

class Dbh {
 protected function connect(){
        try{
         $username = "db";
         $password = "db";
         $dsn = 'mysql:dbname=db;host=db';
         $dbh = new PDO($dsn, $username, $password);
         return $dbh;
        }
        catch (PDOException $e) {
              print "Error!: " . $e->getMessage(). "</br>";
              die();
        }
    }
}
