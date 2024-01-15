<?php
$Knot = mysqli_connect('localhost', 'innovation_superuser', 'Simon@2023', 'innovation_techpro');

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

mysqli_set_charset($Knot, 'utf8');
$Salt = "INNOTECHPRO9304";
