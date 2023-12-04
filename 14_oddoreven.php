<html>
 <head>
  <title>ODD OR EVEN CHECKER</title>
 </head>
 <body>
 <form method="GET" action="">
  Enter a number:
  <input type="text" name="number">
  <input type="submit" value="check">
 </form>
<?php
 if(isset($_GET['number']))
 {
  $number = $_GET['number'];
  if(is_numeric($number))
  {
   if($number%2==0)
   {
    echo "{$number} is even.";
   }
   else
   {
    echo "{$number} is odd.";
   }
  }
  else
  {
   echo "Please enter a valid  number!!";
  }
 }
?>
   </body>
</html>