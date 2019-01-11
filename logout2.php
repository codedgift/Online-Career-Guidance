<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: counsellor_login.php"); // Redirecting To Home Page
}
?>