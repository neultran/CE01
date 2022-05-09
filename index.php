<html lang=en>
<head>
  <title>Hello World</title>

  <?php
  // This page is created by Navia Eul-Tran
  // CSIS 2440 Day 1

  //variables
  $fullName = "Navia E.";
  $age = 21;
  $iceCream = "Coffee Chocolate Chip";
  $imageFile = "pika.png";
  ?>
</head>

<body>
  <div>
<?php
echo "<p style='color: orange;'>Hello world, welcome to the first php page of the semester</p>";
print("<p>Hello my name is $fullName, I am $age years old, and $iceCream is my fav ice cream flavor.</p>");
print("<p>These are the variables that I am using, $fullName, $age, $iceCream</p>");
print("<img src='$imageFile' height='100px'>");
?>
</div>
</body>
</html>
