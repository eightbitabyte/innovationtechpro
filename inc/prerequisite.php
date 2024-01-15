<?php
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 10800);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(10800);

session_start();
ob_start();

// include_once "myfunction.php";
include_once "knot.php";

// $OnURI  = basename($_SERVER["PHP_SELF"], ".php");
$OnURI  = basename($_SERVER["PHP_SELF"]);
