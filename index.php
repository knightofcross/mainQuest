<?php

include_once 'initialization.php';

$notes = $noteService->getNotes();
$rows = $noteService->countNotes();

include_once 'view/list.phtml';