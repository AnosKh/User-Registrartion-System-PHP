<?php 
session_start(); 
/*  session_start() 
    creates a session or resumes the current one based on a session identifier passed 
    via a GET or POST request, or passed via a cookie.
*/

$username = ""; 
$email = ""; 
$errors = array(); 

// connect to db 
$port_db = 'localhost'; 
$user_db = 'root';
$pwd_db = ''; 
$name_db = 'user-registration-system-php'; 

$db = mysql_connect($port_db, $user_db, $pwd_db, $name_db) or die('Could not connect to database'); 


//Register Users 
$username = mysqli_real_escape_string($db, $_POST['username']); 
$email = mysqli_real_escape_string($db, $_POST['email']); 
$password = mysqli_real_escape_string($db, $_POST['password']); 
$confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']); 

// Form Validation 
if(empty($username)){
    array_push($errors, "Username is required"); 
}

if(empty($email)){
    array_push($errors, "Email is required"); 
}

if(empty($password)){
    array_push($errors, "Password is required"); 
}

if(empty($confirm_password)){
    array_push($errors, "Password doesn't match"); 
}

// Check db for existing user with same username 
// LIMIT: https://www.w3schools.com/php/php_mysql_select_limit.asp
$user_check_query = "SELECT * FROM username = '$username' or email = '$email' LIMIT 1"; 

// mysqli_query: https://www.w3schools.com/php/func_mysqli_query.asp
$results = mysqli_query($db, $user_check_query); 

// mysqli_fetch_assoc: https://www.w3schools.com/php/func_mysqli_fetch_assoc.asp
$user = mysqli_fetch_assoc($results); 

if($user){
    if($user['username'] === $username){
        array_push($errors, 'Username already exists.'); 
    }; 
    
    if($user['email'] === $email){
        array_push($errors, 'This email id already has registered username'); 
    }; 
}

// Register the userif no error 
if(count($errors) ==  0){
    
    // $password = md5($password); // this will encrypt the password 
    $password = password_hash($password, PASSWORD_DEFAULT); // this will encrypt the password 
    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')"; 

    // mysqli_query: https://www.w3schools.com/php/func_mysqli_query.asp
    mysqli_query($db, $query); 
    $_SESSION['username'] = $username; 
    $_SESSION['success'] = "You are now logged in"; 

    // Redirect the browser 
    // header("Location: http://www.geeksforgeeks.org"); 
    header('location: index.php'); 
    
}


?>