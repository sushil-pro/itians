<?php
$title="Books";
session_start();
if(isset($_SESSION['login_user'])){
include 'i/session.php';
include 'i/header.php';
include 'i/sidenav.php';
include 'h/books_main.php';
include 'h/footer.php';
} else {
include 'i/header.php';
include 'i/sidenav.php';
include 'h/exclusives_main.php';
include 'h/footer.php';
}
?>