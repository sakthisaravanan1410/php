<?php
include '../function/fun.php';
login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
<div class="container">
        <h4>Login Page</h4>
        <form action="index.php" method="post">
             <label class="lbl" id="luser" for="user">User Name</label>
             <input class="txt" id="user" type="text" name="username" placeholder="User Name" autocomplete="off" required><br><br>
             <label class="lbl" id="lpass" for="pass">Password</label>
             <input class="txt" id="pass" type="password" name="password" placeholder="Password" required><br><br>
             <input class="btn" id="login" type="submit" value="Login" name="login"><br><br>
           
        </form>
        <a href="register.php"><input class="btn" id="register" type="submit" value="Register" name="register"><br><br></a>
        <label class="msg"><?php
             global $role;
                
                if($role=='EMPLOYEE'){
                    echo "Login SuccessFull";
                header("refresh:1, url=emp.php");
                }
                else if($role=='HRA'){
                    echo "Login SuccessFull";
                header("refresh:1, url=hra.php");
                }
                else if($role=='PME'){
                    echo "Login SuccessFull";
                header("refresh:1, url=pme.php");
                }
                else if($role=='ADMIN'){
                    echo "Login SuccessFull";
                header("refresh:1, url=admin.php");
                }
                
                
             ?>
             </label>
             <label class="error"><?php
             global $warning;
                echo $warning;
                 
             ?>
             </label>
    </div>
</body>
</html>