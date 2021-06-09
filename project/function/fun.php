<?php
 include 'connection.php';
 function register(){
     if(isset($_POST['register']))
     {
         global $conn;
         global $error;
         global $success;
         global $warning;
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $role=$_POST['role'];
        $gender=$_POST['gender'];
        $query="SELECT * FROM user";
        $query1="SELECT username FROM user WHERE username='$username'";
        $result=mysqli_query($conn,$query);
        $check=mysqli_query($conn,$query1);
        $check=mysqli_fetch_assoc($check);
        
        while(mysqli_fetch_assoc($result)){
            if(!$check==null){
                if($check["username"]==$username){
                    return $warning="User Name Already Exists";
                }
            }
            
            else{
                if($password==$cpassword){
                    $query="INSERT INTO user (firstname,lastname,username,password,cpassword,role,gender) VALUES ('$firstname','$lastname','$username','$password','$cpassword','$role','$gender')";
                    $result=mysqli_query($conn,$query);
                    if(!$result){
                        die("Query Failed");
                       
                    }
                    return $success = "* Registration Successfull";
                }
                
                else{
                   return $error = "* Password Confirmation is Incorrect";
        
                }
            
            }
        }
      
       
    }
 }
 ?>
<?php

   function login(){
       if(isset($_POST['login']))
       {
        global $conn;
        global $username;
        global $password;
        global $result;
        global $result1;
        global $user;
        global $warning;
        global $role;
        
       


           $username=$_POST['username'];
           $password=$_POST['password'];
           $query="SELECT username,password,role FROM user WHERE username='$username'";
           $result=mysqli_query($conn,$query);
           $result1=mysqli_fetch_assoc($result);
           
        if(!$result1==null){
           if($result1['username']==$username){

             if($result1['password']==$password){
               
               return $role= $result1['role']; 
           }
           else{
            return $warning= "Password Incorrect";
           }
        }      
    }
    else{
        return $warning= "User Name Not Found";
       }
          

        

       }
   }

?>