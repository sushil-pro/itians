<?php
$title="Contact";
session_start();
if(isset($_SESSION['login_user'])){
include 'i/session.php';
}
function setFeedback() {
if(isset($_POST['feedback'])) {
include 'i/config.php';
$name    = $db->real_escape_string($_POST['name']);
$email   = $db->real_escape_string($_POST['email']);
$comment    = $db->real_escape_string($_POST['comment']);
mysqli_query($db,"INSERT into feedback (name, email, comment) VALUES('" . $name . "','" . $email . "','" . $comment . "')");
}
}
include 'i/header.php';
include 'i/sidenav.php';
include 'h/contact_main.php';
include 'h/footer.php';
?>