<?php
$con = mysqli_connect("localhost", "root", "", "company");
if (!$con)
    die("cannot connect to database field" . mysqli_connect_error());
