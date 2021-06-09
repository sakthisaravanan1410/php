<?php
include '../function/fun.php';
register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <h4>Register Page</h4>
        <form action="register.php" method="post">
             <label class="lbl" id="ctn1" for="ctn2">First Name</label>
             <input class="txt" id="ctn2" type="text" name="firstname" placeholder="First Name" required autocomplete="off"><br><br>
             <label class="lbl" id="ctn3" for="ctn4">Last Name</label>
             <input class="txt" id="ctn4" type="text" name="lastname" placeholder="Last Name" required autocomplete="off"><br><br>
             <label class="lbl" id="ctn5" for="ctn6">User Name</label>
             <input class="txt" id="ctn6" type="text" name="username" placeholder="User Name" required autocomplete="off"><br><br>
             <label class="lbl" id="ctn7" for="ctn8">Password</label>
             <input class="txt" id="ctn8" type="password" name="password" placeholder="New Password" required ><br><br>
             <label class="lbl" id="ctn9" for="ctn10">Confirm Password</label>
             <input class="txt" id="ctn10" type="password" name="cpassword" placeholder="Confirm Password" required ><br><br>
             <label class="lbl" id="ctn11" for="ctn12">Role</label>
             <select class="txt" id="ctn12" name="role" required>
                 <option value="EMPLOYEE">EMPLOYEE</option>
                 <option value="PME">PME</option>
                 <option value="HRA">HRA</option>
             </select><br><br>
             <!-- <input class="txt" id="ctn12" type="text" name="role" placeholder="Role" required><br><br> -->
             <label class="lbl" id="ctn13" for="ctn14">Gender</label>
             <select class="txt" id="ctn14" name="gender" required>
                 <option value="MALE">MALE</option>
                 <option value="FEMALE">FEMALE</option>
             </select><br><br>
             <!-- <input class="txt" id="ctn14" type="text" name="gender" placeholder="Gender" required><br><br> -->
            <label class="msg"> <?php
                global $error;
                echo $error;
                echo"<br>";

             ?>
            </label>
            <label class="done">
                <?php
                global $success;
                echo $success;
                echo"<br>";
                if($success){
                header("refresh:2, url=index.php");
                }
                ?>
            </label>
            <label class="uname">
            <?php
                 global $warning;
                 echo $warning;
                 echo "<br>";
             ?>
            </label>
             <input class="btn" id="ctn15" type="submit" name="register"><br><br>
        </form>
        <p class="a">Already have an Account<a href="index.php" > Login Here</a></p>

        
    </div>
</body>
</html>