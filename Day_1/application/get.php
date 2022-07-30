<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter Your name"/>
            </div>
            <div>
                <label for="name">Email:</label>
                <input type="email" name="email" required="required" placeholder="Enter Email id"/>
            </div>
            <button type="submit">SUBMIT</button>
  
        
            </form>