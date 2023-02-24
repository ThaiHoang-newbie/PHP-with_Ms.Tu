<?php
session_start();

# Xóa session: unset($_SESSION["username"]);

if (isset($_SESSION['username'])) {
    $name = $_SESSION["username"];
    echo "Chào $name";
}
?>