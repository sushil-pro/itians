<?php
$title="Syllabus";
session_start();
if(isset($_SESSION['login_user'])){
include 'i/session.php';
}
include 'i/header.php';
include 'i/sidenav.php';
include 'h/syllabus_main.php';
include 'h/footer.php';
?>