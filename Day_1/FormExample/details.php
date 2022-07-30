Welcome User
<?php
 echo $_POST['fname'];
?><br>
AGE <?php echo $_POST['age']; ?><br>
DOB <?php echo $_POST['dob']; ?><br>

Total Marks <?php echo $_POST['m1']+$_POST['m2']+$_POST['m3']; ?><br>
Average Marks <?php echo ($_POST['m1']+$_POST['m2']+$_POST['m3'])/3; ?>


