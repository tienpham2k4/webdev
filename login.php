<?php
include "function.php";
if (
    isset ($_POST['email'])
    && $_POST['password']
) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkUsernameSqlQuery = "SELECT * FROM users where email = '$email' limit 1";
    $result = $mysql->query($checkUsernameSqlQuery);
     if ($result && $result->num_rows > 0) {
//         // Output data of each row
        while ($row = $result->fetch_assoc()) {
            if(password_verify($password,$row['password']))
                {
                    $_SESSION['user'] = [
                        'id'=>  $row['id'],
                        'name'=>  $row['first_name'].' '.$row['last_name'],
                        'role'=>  $row['role'],
                        'email'=>  $row['email'],
                    ];
                    if($row['role']=="customer")
                        header("location: ".getUrl("?login_success=true"));
                    elseif($row['role']=="admin")
                        header("location: ".getUrl("admin"));
                }

            else
                header("location: ".getUrl("?error_login=true&error_code=1"));
        }
    } else {
        // sai email
        header("location: ".getUrl("?error_login=true&error_code=2"));

    }
} else {
    // dữ liệu đầu vào sai
    header("location: ".getUrl("?error_login=true&error_code=3"));
}