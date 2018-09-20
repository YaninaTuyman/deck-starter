<?php
/* Add a number class to the domino section 
based on the number of dots created. 
 */
$numbers = ['zero', 'one', 'two', 'three', 'four', 'five', 'six'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DOMinoes with PHP</title>
  <link rel="stylesheet" href="dominoes.css">
</head>
<body>
  <h1>Yanina Tuyman's Dominoes</h1>
  <!-- This is a main container which contane all 100 dominoes -->
  <div id="dominoes" class="dominoes">
  <!-- Loop 100 times -->
  <?php for ($x = 0; $x <= 100; $x++) { ?>
      <!-- Create two random numbers for two sections of dominoes -->
      <?php 
      $randnum1 = rand(0, 6);
      $randnum2 = rand(0, 6);
      ?>
       <!-- The domino itself -->  
       <div class="domino">
       <!-- Inside the domino we have two sections -->   
        <div class="dots $numbers[randnum1]">
         <?php for ($i = 0; $i < $randnum1; $i++) { ?>
              <!-- The dot inside the domino --> 
              <div class="dot"></div>
            <?php 
          } ?>
       </div>
        <!-- The second section of the domino -->    
        <div class="dots $numbers[randnum2]">
         <?php for ($i = 0; $i < $randnum2; $i++) { ?>
              <!-- The dot inside the domino -->
              <div class="dot"></div>
            <?php 
          } ?>
       </div>
    </div>
    <?php 
  } ?>
  </div>
</body>
</html>