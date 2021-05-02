<?php
    include"../subComponents/header.php";
    include"../customerArray.php"
    <div class="main">
    ?>

     
<div class="main">
    <?php 
      foreach($listaLajmeve as $Lajmi){
        echo '<div class="lajmi">';
        echo '<h1>'.$lajmi['Titulli'].'</h1>';
        echo '<p1>'.$lajmi['Pershkrimi'].'</p1>';
        echo '</div>'
            
      }
      ?>
      </div>
      <?php
      include "../subComponents/footer.php"
      ?>