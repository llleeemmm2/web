<?php
session_start();
if (isset($_SESSION['userData'])) {
    foreach ($_SESSION['userData'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
} else {
    echo "Данные пользователя не найдены.";
}
?>
