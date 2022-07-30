<h1> PHP Code </h1>
<?php
echo "<html><head><title>Setting title</title></head></html>";
echo "php embedded in html"
?>
<?php
 echo '<br>New line'
?>


<!-- declaring variables -->
<?php
$myvar="PHP Variable";
echo "<br> value of variable -- $myvar";
?>

<!-- taking inputs -->

<?php
$val1=(int)readline("Enter an integer value");
$val2=(float)readline("Enter an float value");

echo "Values are---$val1 $val2"
?>

<!-- adding two numbers -->

<?php
$val1=(int)readline("Enter an integer value");
$val2=(float)readline("Enter an float value");

echo "Sum of Values is".($val1+$val2);
echo "\nSum of".$val1."&".$val2."is ".($val1+$val2);
?>