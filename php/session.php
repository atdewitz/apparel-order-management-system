<?php

//checks to see if user is logged in
if(!isset($_SESSION['logged_user'])){
    setcookie("login_required", "true", time() + (10), "/");
    header('Location: ' . $base_dir );
}




//gets logged in user information
$user_in_session = $_SESSION['logged_user'];
$account_query_sql = "SELECT * FROM accounts WHERE username='$user_in_session'";
$account_query = mysqli_query($connection, $account_query_sql);
$user = mysqli_fetch_assoc($account_query);

//checks if user is logged in from one location only, otherwise logs out
if ($user['computer_session'] != $_SESSION['computer_session']) {
  header('Location: ./logout/multiple-sessions');
}

//gets settings to output on page
$settings_query_sql = "SELECT * FROM settings";
$settings_query = mysqli_query($connection, $settings_query_sql);
$settings = mysqli_fetch_assoc($settings_query);

//$connection->close();


//functions
function isAdmin($user) {
    return $user['account_type'] == 1;
}

function toDollars($num){
    return "$" . number_format($num, 2, '.', ',');
}

function getUserID($user) {
    return $user['account_id'];
}
//end functions
