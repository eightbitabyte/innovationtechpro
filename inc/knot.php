<?php
$Knot = mysqli_connect('localhost', 'root', '', 'innovation_techpro');

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

mysqli_set_charset($Knot, 'utf8');
$Salt = "INNOTECHPRO9304";
