<?php

include 'Model.php';

//Переход на страницу редактирования записи
if(@$_REQUEST['edit']) {
    header("Location: ../edit.php?id=" . $_POST['id']);
}
//Удаление записи по id
if(@$_REQUEST['delete']) {
    $mysql = new Model();
    $mysql->deleteRecord($_POST['id']);
    header("Location: ../index.php");
}
//Переход на главную страницу
if(@$_REQUEST['back']) {
    header("Location: ../index.php");
}
//Сохрание записи и переход на главную страницу
if(@$_REQUEST['save']) {
    $mysql = new Model();
    if($_POST['id']) {
        $mysql->updateRecord($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['id']);
    } else {
        $mysql->insertRecord($_POST['first_name'], $_POST['last_name'], $_POST['email']);
    }
    header("Location: ../index.php");
}

//header("Location: ../index.php");
