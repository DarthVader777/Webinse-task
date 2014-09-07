<?php

include 'Model.php';

//Move to edit page
if(@$_REQUEST['edit']) {
    header("Location: ../edit.php?id=" . $_POST['id']);
}
//Delete record from database by id
if(@$_REQUEST['delete']) {
    $mysql = new Model();
    $mysql->deleteRecord($_POST['id']);
    header("Location: ../index.php");
}
//Move to home page
if(@$_REQUEST['back']) {
    header("Location: ../index.php");
}
//Save data in to database and move to home page
if(@$_REQUEST['save']) {
    $mysql = new Model();
    if($_POST['id']) {
        $mysql->updateRecord($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['id']);
    } else {
        $mysql->insertRecord($_POST['first_name'], $_POST['last_name'], $_POST['email']);
    }
    header("Location: ../index.php");
}