<?php

include_once 'configuration.php';
include_once 'NoteService.php';
include_once 'Note.php';

//Подключаем БД
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
$mysqli->set_charset("utf8");
$mysqli->query("SET sql_mode='STRICT_ALL_TABLES'");

if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

$noteService = new NoteService($mysqli);
$note = new Note;