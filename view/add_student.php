<?php 
	header('Content-Type: text/html; charset=utf-8');
	include_once '../initialization.php';


	if ($noteService->NoteValidator($_POST["name"]) != $_POST["name"]) {
		echo 'Нет';
	} else {
		$note->name = $_POST["name"];
	}

	if ($noteService->NoteValidator($_POST["surname"]) != $_POST["surname"]) {
		echo 'Нет';
	} else {
		$note->surname = $_POST["surname"];
	}

	if ($_POST["gender"] == "female") {
		$note->gender = "F";
	} else {
		$note->gender = "M";
	}

	if ($_POST["livePlace"] == "local") {
		$note->livePlace = "L";
	} else {
		$note->livePlace = "O";
	}

	$note->yearChoose = $_POST["yearChoose"];

	if ((((int)$_POST["yearChoose"]) > 2004) || (((int)$_POST["yearChoose"]) < 1991)) {
		echo "Год рождения неверен";
	} else {
		$note->yearChoose = $_POST["yearChoose"];
	}

	if (strlen($_POST["groupNumber"]) > 5) {
		echo "нет";
	} else {
		$note->groupNumber = $_POST["groupNumber"];
	}

	if (strlen($_POST["pointsInput"]) > 4) {
		echo "нет";
	} else {
		$note->pointsInput = $_POST["pointsInput"];
	}

	$note->email = $_POST["email"];

	if (isset($_POST['butAccept'])) {
		$noteService->saveNote($note);
	}
	//if (isset($_POST['butEdit'])) {};