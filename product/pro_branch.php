<?php

$location = null;

if (isset($_POST['disp'])) {
    if (!isset($_POST['procode'])) {
        header('Location:pro_ng.php');
        exit();
    }
    $pro_code = $_POST['procode'];
    header('Location:pro_disp.php?procode=' . $pro_code);
    exit();
}

if (isset($_POST['add']) == true) {
    header('Location:pro_add.php?');
    exit();
}

if (isset($_POST['edit']) == true) {
    $location = "pro_edit";
}

if (isset($_POST['delete']) == true) {
    $location = "pro_delete";
}

if (isset($_POST['procode'])) {
    header('Location:' . $location . '.php?procode=' . $_POST['procode']);
} else {
    header('Location:pro_ng.php');
}
