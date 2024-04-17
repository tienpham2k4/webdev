<?php
include "function.php";
// cách 1: huỷ toàn bộ session
session_destroy();
// Cách 2: chỉ huỷ những session cần thiết (session user, session cart....)
// unset($_SESSION['user'])

// điều hướng về trang chủ
header("location: ".getUrl());