<?php

try {
        $bdd = new PDO('mysql:host=localhost;dbname=abdoulay_mini-cms;charset=utf8', 'abdoulay_mini-cm', 'paris75018');
      } catch (Exception $e) {
        die('Erreur :'.$e->getMessage());
      }

?>