<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'adventure');

if (isset($_POST['reg_user'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
    $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
    $sex = mysqli_real_escape_string($db, $_POST['sex']);

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
        echo "<script type='text/javascript'>
            alert('Password Do not Match');
          </script>";
        echo "<script type='text/javascript'>
            window.location.href = 'registerpage.php';
          </script>";
    }

    $user_check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { 
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
            echo "<script type='text/javascript'>
            alert('Username already exists');
            </script>";
            echo "<script type='text/javascript'>
                window.location.href = 'registerpage.php';
            </script>";
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
            echo "<script type='text/javascript'>
            alert('email already exists');
            </script>";
            echo "<script type='text/javascript'>
                window.location.href = 'registerpage.php';
            </script>";
        }
    }

    if (count($errors) == 0) {
        $query = "insert into register set firstname='$firstname', lastname='$lastname', username='$username', phonenumber='$phonenumber', email='$email', birthday='$birthday', password='$password_1'";
        mysqli_query($db, $query);
        echo "<script type='text/javascript'>
            alert('Registered Succesfuly! Now please Log-in.');
            </script>";
            echo "<script type='text/javascript'>
                window.location.href = 'loginpage.php';
            </script>";
        exit();
    }
}