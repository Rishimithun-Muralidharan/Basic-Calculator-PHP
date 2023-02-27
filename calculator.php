<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Calculator</title>
  </head>
  <body>
    <h1>Calculator</h1>
    <form method="get" action="calculator.php">
      <input type="number" name="number1">
      <br>
      <input type="number" name="number2">
      <br>
      <input type="submit">

    </form>
    <?php
    $num1 = $_GET["number1"]
    ?>
    <?php
    $num2 = $_GET["number2"]
    ?>
    <br>
    The added answer is <?php echo $num1 + $num2; ?>
    <br>
    The subtracted answer is <?php echo $num1 - $num2; ?>
    <br>
    

  </body>
</html>