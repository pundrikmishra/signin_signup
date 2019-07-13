<?php
session_start();
?>
<html>
<head>
    <title> 
        LOGIN
    </title>
</head>
<body>
    <div class="#">
        <h1> Enter your details </h1>
        <form method="post" action="check_login.php">
            <label> Enter your email </label> <br>
            <input type="email" name="Emailid"> <br>
            <label> Enter your password </label> <br>
            <input type="password" name="Password">  <br>
            <input type="submit" value="Login"> <br>
            <label> OR</label> <br>
            <!-- <input type="button" onclick="signup.php" name="Sign" value="Signup"> -->
            <a href='signup.php'><input type="button"  name="Sign" value="Signup"></>

        </form>

    </div>
    <?php
    if(isset($_SESSION['error'])){
        echo "<p><font color='red'>".$_SESSION['error']."</font></p>";
        session_destroy();
    }
    else{

    }
    ?>
</body>
</html>
