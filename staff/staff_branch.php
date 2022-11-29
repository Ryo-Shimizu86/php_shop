<?php

$location = null;

if (isset($_POST['disp'])) {
    if (!isset($_POST['staffcode'])) {
        header('Location:staff_ng.php');
        exit();
    }
    $staff_code = $_POST['staffcode'];
    header('Location:staff_disp.php?staffcode=' . $staff_code);
    exit();
}

if (isset($_POST['add']) == true) {
    header('Location:staff_add.php?');
    exit();
}

if (isset($_POST['edit']) == true) {
    $location = "staff_edit";
}

if (isset($_POST['delete']) == true) {
    $location = "staff_delete";
}

if (isset($_POST['staffcode'])) {
    header('Location:' . $location . '.php?staffcode=' . $_POST['staffcode']);
} else {
    header('Location:staff_ng.php');
}
