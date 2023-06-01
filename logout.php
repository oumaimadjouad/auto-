<?php
include_once "php/conn.php";
session_start();
session_destroy();
header('location:index.php');
die;