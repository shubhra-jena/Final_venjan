<?php

require_once("db.php");
require_once("functions.php");

session_start();

if (isset($_POST['login'])) {
    echo "User_Email: " . $username = $_POST['username'];
    echo "User_Password: " . $password = $_POST['password'];
}

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM register where email = '$username'";

$select_user_details = mysqli_query($connection, $query);

checkQueryResult($select_user_details);


if (mysqli_num_rows($select_user_details) > 1) {
    die("Invalid Password!");
    header("Location: login.php?q=error");
}

$user_password = '';
$user_email = '';

if ($row = mysqli_fetch_assoc($select_user_details)) {
    $user_password = $row['password'];
    $user_id = $row['id'];
    $user_email = $row['email'];

    // echo $user_password . " " . $user_id . " " . $user_email;
} else {
    $user_password = "";
}

if ($user_email && $user_password) {

    // echo $user_password . " %%%%%%%%%%%%% " . $password;
    if ($password == $user_password) {
        $_SESSION['id'] = $user_id;
        header("Location: index.php?q=success");
        echo "<h1>Logged In Successfully </h1>";
    } else {
        header("Location: login.php?q=error");
        die("Invalid Password!");
        //header();
    }
}
