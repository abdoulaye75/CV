<?php

try {
        $bdd = new PDO('mysql:host=localhost;dbname=mini-cms;charset=utf8', 'phpmyadmin', 'paris18');
      } catch (Exception $e) {
        die('Erreur :'.$e->getMessage());
      }

?>