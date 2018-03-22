<?php

/**
 * Модель объявления
 */
class Note
{
    public $name;
    public $surname;
    public $gender;
    public $groupNumber;
    public $email;
    public $yearChoose;
    public $pointsInput;
    public $livePlace;

    //Зада
    public function setValues(array $note) {
    	$this->name = $note['name'];
    	$this->surname = $note['surname'];
    	$this->gender = $note['gender'];
    	$this->groupNumber = $note['group'];
    	$this->email = $note['email'];
    	$this->yearChoose = $note['birthYear'];
    	$this->pointsInput = $note['points'];
    	$this->livePlace = $note['livePlace'];
    }
}