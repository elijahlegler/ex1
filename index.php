<?php
  include '/home/elegler/htdocs/CIT313/SP2018/ex1/includes/header.inc.php';
  ?>

  <body>
  <?php
    $myArray = array('Elijah', 'Yellow', 'Inception', 'Algorithms to Live By', 'facebook.com');
  ?>
  <h1><?php echo $myArray[0];?></h1>

  <ul>
  <?php
  for ($x = 1; $x < 5; $x++) {
    echo '<li>' . $myArray[$x] . '</li>';
  }
  ?>
  </ul>


<?php
  include '/home/elegler/htdocs/CIT313/SP2018/ex1/includes/footer.inc.php';
  ?>
