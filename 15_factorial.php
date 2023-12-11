<html>
 <head>
  <title>FACTORIAL</title>
 </head>
 <body>
  <form method="POST" action="">
   Enter a number:
   <input type="text" name="number">
   <input type="submit" value="Calculate Factorial">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['number']) && is_numeric($_POST['number'])) {
      $number = $_POST['number'];
      $factorial = 1;

      // Calculate factorial
      for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
      }

      echo "Factorial of {$number} is {$factorial}.";
    } else {
      echo "Please enter a valid number!!";
    }
  }
  ?>
 </body>
</html>
