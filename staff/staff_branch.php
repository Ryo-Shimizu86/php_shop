<?php

if (isset($_POST['staffcode'])) {
    $staff_code = $_POST['staffcode'];
}
$location = null;

if (isset($_POST['edit']) == true) {
    $location = "staff_edit";
}

if (isset($_POST['delete']) == true) {
    $location = "staff_delete";
}

if (isset($staff_code)) {
    header('Location:' . $location . '.php?staffcode=' . $staff_code);
} else {
    header('Location:staff_ng.php');
}
