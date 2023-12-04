<html>
 <head>
  <title>FACTORIAL</title>
 </head>
 <body>
 <form method="POST" action="">
  Enter a number:
  <input type="text" name="number">
  <input type="submit" value="Calcuate Factorial">
 </form>
<?php
 if($_SERVER["REQUEST_METHOD" == "POST])
{
  if(isset($_POST['number']) && is_numeric['number'] )
  {
    $number = $_POST['number'];
    $factorial
  if()
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
}
?>
   </body>
</html>