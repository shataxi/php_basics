<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
    <main>
        <?php if($_SERVER['REQUEST_METHOD'] == 'GET'):?>

            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> //PHP_SELF is used because the same file formExample2 will be used to handle POST method

            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter Your name"/>
            </div>

            <div>
                <label for="name">Email:</label>
                <input type="email" name="email" required="required" placeholder="Enter Email id"/>
            </div>

            <button type="submit">SUBMIT</button> //when button is clicked, a POST request is made so 
            //IF condition will be false and else condition will be executed once the name and email are submitted on click of button
            
        
            </form>


        <?php else : ?>
            <?php

                if(isset($_POST['name'],$_POST['email'])){ //isset is used to check whether name and email are set with some value or not
                    $name=htmlspecialchars($_POST['name']);
                    $email=htmlspecialchars($_POST['email']);

                    echo "Thank you user $name";
                    echo "Your email id is  $email";
                }
                else{
                    echo "You need to provide details";
                }

            ?>

        <?php endif; ?>

    </main>
    
</body>
</html>