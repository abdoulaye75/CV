<?php

try {
        $bdd = new PDO('mysql:host=localhost;dbname=abdoulay_reunion_island;charset=utf8', 'abdoulay_reunion', 'paris75018');
      } catch (Exception $e) {
        die('Erreur :'.$e->getMessage());
      }

?>