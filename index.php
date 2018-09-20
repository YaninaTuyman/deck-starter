<?php
/*
Task 1
Loop thouht the suits
 Loop thouht the ranks
  Create card from suit and rank
  
  Task 2
  Loop 52 times
   Get random suit
   Get random rank
    Create card from suit and rank
 */
$numbers = ['zero', 'one', 'two', 'three', 'four', 'five', 'six'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deck</title>
  <link href="https://fonts.googleapis.com/css?family=BioRhyme:300" rel="stylesheet">
  <link rel="stylesheet" href="dominoes.css">
</head>
<body>
 
    

  <div id="dominoes" class="dominoes">
      
      <?php for ($x = 0; $x <= 100; $x++) { ?>
      
   <?php 
    $randnum1 = rand(0, 6);
    $randnum2 = rand(0, 6);

    
    ?>
      
    <div class="domino">
        
            <div class="dots $numbers[randnum1]">
			<?php for ($i = 0; $i < $randnum1; $i++) { ?>
                <div class="dot"></div>
            <?php } ?>
		</div>
        
        <div class="dots $numbers[randnum2]">
			<?php for ($i = 0; $i < $randnum2; $i++) { ?>
                <div class="dot"></div>
            <?php } ?>
		</div>
            
    </div>
      
 
 <?php } ?>
      
  </div>
    
    
</body>
    
</html>