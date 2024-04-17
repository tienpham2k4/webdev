<?php
include "function.php";

if(isset($_POST['first_name']) && isset($_POST['last_name'])
 && isset($_POST['email']) && isset($_POST['password']))
{
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // check exist email
    $checkEmailSqlQuery = "SELECT * FROM users where email = '$email' limit 1";
    $result = $mysql->query($checkUsernameSqlQuery);
     if ($result && $result->num_rows > 0) {
        echo "Email is exist!";
        die;
     }
     else
     {
        // Insert user
        $password = password_hash($password,PASSWORD_DEFAULT);
        $insertUserQuery = "INSERT INTO users(`first_name`,`last_name`,`email`,`password`,`role`)
            VALUES ('$firstname','$lastname','$email','$password','customer')";
            $result = $mysql->query($insertUserQuery);
            if (!$result) {
               echo "Error while insert user!";
               die;
            }
            else
            {
                $id = $mysql->insert_id;
                echo "Insert success!!!";
                // Login
                $_SESSION['user'] = 
                [
                    'id'=>$id,
                    'name'=>$firstname.' '.$lastname,
                    'email'=>$email,
                    'role'=>'customer'
                ];      
                          // Redirect
                header("location: ".getUrl("?login_success=true"));

            }
     }
    

}
else
    echo "Invalid data";