<?php
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 10800);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(10800);

session_start();
ob_start();

$uri = isset($_GET["uri"]) ? $_GET["uri"] : ".";

if ($_SESSION["lang"] == "en") {
  $_SESSION["lang"] = "th";
} else {
  $_SESSION["lang"] = "en";
}

header("location:" . $uri);
