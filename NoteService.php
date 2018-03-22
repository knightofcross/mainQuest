<?php

class NoteService {

	private $db;

	public function __construct(mysqli $mysqli) {
		$this->db = $mysqli;
	}

	//Валидация форм вводимых пользователем
	public function NoteValidator($in) {
		$out = preg_replace('/^\s(.*)/msiu', '$1', $in);
		$out = preg_replace('/[^а-яё\s]+/msiu', '', $out);
		return $out;
	}

	//Сохранение в БД
	public function saveNote(Note $note) {
		var_dump($note);
		echo "<br>";
		$stmt = $this->db->prepare("INSERT INTO `db_table` (`name`, `surname`, `gender`, `group`, `email`, `points`, `birthYear`, `livePlace`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");

		if ($this->db->error) {
			throw new Exception($this->db->error);
		}

		$stmt->bind_param("ssssssss", $note->name, $note->surname, $note->gender, $note->groupNumber, $note->email, $note->pointsInput, $note->yearChoose, $note->livePlace);
		$stmt->execute();
		/*
		if ($this->db->errno) {
			throw new Exception('Update Error (' . $this->db->errno . ') ' . $this->db->error);
		}*/
		$stmt->store_result();
	}

	public function countNotes() {
		$sql = "SELECT count(*) FROM `db_table`";
		$result = $this->db->query($sql);
		if ($this->db->error) {
			throw new Exception($this->db->error);
		}
		$data = $result->fetch_array();
		return $data[0];
	}

	// Достать из бд общим списком
	public function getNotes() {
		$current = 1;
		$sql = "SELECT * FROM `db_table`";
		$result = $this->db->query($sql);
		if ($this->db->error) {
			throw new Exception($this->db->error);
		}
		// Разбить в ассоциативный массив
		$data = $result->fetch_all(MYSQLI_ASSOC);
		var_dump($data);
		foreach ($data as $value) {
			$note = new Note;
			$note->setValues($value);
			$obj[] = $note;
		}
		return $obj;
	}
}