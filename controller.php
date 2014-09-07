<?php

include './MySQLClass.php';
//Переход на страницу добавления записи
if(@$_REQUEST['add']) {
    header("Location: add.php");
}
//Переход на страницу редактирования записи
if(@$_REQUEST['edit']) {
    header("Location: edit.php?id=" . $_POST['id']);
}
//Удаление записи по id
if(@$_REQUEST['delete']) {
    $mysql = new MySQLClass();
    $mysql->deleteRecord($_POST['id']);
    header("Location: index.php");
}
//Переход на главную страницу
if(@$_REQUEST['back']) {
    header("Location: index.php");
}
//Сохрание записи и переход на главную страницу
if(@$_REQUEST['add_save']) {
    $mysql = new MySQLClass();
    $mysql->insertRecord($_POST['first_name'], $_POST['last_name'], $_POST['email']);
    header("Location: index.php");
}
//Сохрание отредактированых записей и переход на главную страницу
if(@$_REQUEST['edit_save']) {
    $mysql = new MySQLClass();
    $mysql->updateRecord($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['id']);
    header("Location: index.php");
}
