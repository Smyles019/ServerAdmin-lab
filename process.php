<?php
session_start();

// initializing variables
// $username = "";
// $errors = array();
//
// // connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'cafe');
//
// // REGISTER USER
// if (isset($_POST['reg_user'])) {
//     // receive all input values from the form
//         $username = mysqli_real_escape_string($db, $_POST['username']);
//             $password = mysqli_real_escape_string($db, $_POST['password']);
//                 $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
//
//                     // form validation
//                         if (empty($username)) { array_push($errors, "Username is required"); }
//                             if (empty($password)) { array_push($errors, "Password is required"); }
//                                 if ($password != $confirm_password) {
//                                         array_push($errors, "The two passwords do not match");
//                                             }
//
//                                                 // check if username already exists
//                                                     $user_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
//                                                         $result = mysqli_query($db, $user_check_query);
//                                                             $user = mysqli_fetch_assoc($result);
//
//                                                                 if ($user && $user['username'] === $username) {
//                                                                         array_push($errors, "Username already exists");
//                                                                             }
//
//                                                                                 // register user if no errors
//                                                                                     if (count($errors) == 0) {
//                                                                                             $password = md5($password); // encrypt the password before saving
//
//                                                                                                     $query = "INSERT INTO user (username, password) VALUES('$username', '$password')";
//                                                                                                             mysqli_query($db, $query);
//                                                                                                                     $_SESSION['username'] = $username;
//                                                                                                                             $_SESSION['success'] = "You have signed up successfully.";
//                                                                                                                                     header('location: index.php');
//                                                                                                                                             exit();
//                                                                                                                                                 }
//                                                                                                                                                 }
//
//                                                                                                                                                 // LOGIN USER
//                                                                                                                                                 if (isset($_POST['login_user'])) {
//                                                                                                                                                     $username = mysqli_real_escape_string($db, $_POST['username']);
//                                                                                                                                                         $password = mysqli_real_escape_string($db, $_POST['password']);
//
//                                                                                                                                                             if (empty($username)) {
//                                                                                                                                                                     array_push($errors, "Username is required");
//                                                                                                                                                                         }
//                                                                                                                                                                             if (empty($password)) {
//                                                                                                                                                                                     array_push($errors, "Password is required");
//                                                                                                                                                                                         }
//
//                                                                                                                                                                                             if (count($errors) == 0) {
//                                                                                                                                                                                                     $password = md5($password);
//                                                                                                                                                                                                             $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
//                                                                                                                                                                                                                     $results = mysqli_query($db, $query);
//
//                                                                                                                                                                                                                             if (mysqli_num_rows($results) == 1) {
//                                                                                                                                                                                                                                         $_SESSION['username'] = $username;
//                                                                                                                                                                                                                                                     $_SESSION['success'] = "You are now logged in.";
//                                                                                                                                                                                                                                                                 header('location: index.php');
//                                                                                                                                                                                                                                                                             exit();
//                                                                                                                                                                                                                                                                                     } else {
//                                                                                                                                                                                                                                                                                                 array_push($errors, "Wrong username/password");
//                                                                                                                                                                                                                                                                                                         }
//                                                                                                                                                                                                                                                                                                             }
//                                                                                                                                                                                                                                                                                                             }
//                                                                                                                                                                                                                                                                                                             ?>
//
