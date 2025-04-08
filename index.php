<html>
<head></head>
<body>

<?php include('menu.php'); ?>

<h1>Hi</h1>

<?php
 $today = date('F d, Y H:m:i');
 echo($today);
 $name = "Philip";
?>

<p> Hello, today is <?php echo(date('F d, Y H:m:i')); ?>. My name is <?php echo($name); ?>

<?php include('profile.php'); ?>


<div>Footer --</div>
</body>
</html>