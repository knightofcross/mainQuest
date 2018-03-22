<!DOCTYPE html>
<html>
<head>
	<title>Список</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<div class="container-fluid">
	<h1>Регистрация абитуриента</h1>
	<p>Заполните форму регистрации абитуриента</p>
	<form name="Абитуриент" method="post" action="add_student.php"><!--add_student.php -->
		<div class="form-group row">
			<label for="name" class="col-1 col-form-label">Имя</label>
			<div class="col-5">
				<input type="text" class="form-control" id="name" aria-describedby="firstNameHelp" placeholder="Введите имя" size="40" maxlength="40" name="name" required>
				<small id="firstNameHelp" class="form-text text-muted">Введите ваше имя</small>
			</div>
		</div>

		<div class="form-group row">
			<label for="surname" class="col-1 col-form-label">Фамилия</label>
			<div class="col-5">
				<input type="text" class="form-control" id="surname" aria-describedby="surnameHelp" placeholder="Введите фамилию" size="40" maxlength="40" name="surname" required>
				<small id="surnameHelp" class="form-text text-muted">Введите вашу фамилию</small>
			</div>
		</div>

		<fieldset class="form-group row">
			<legend class="col-form-legend col-7">Укажите ваш пол</legend>
			<div class="col-10">
				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" value="female" checked>Женский
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" value="male">Мужской
					</label>
				</div>
			</div>
		</fieldset>

		<div class="form-group row">
			<label for="yearChoose" class="col-1 col-form-label">Год рождения</label>
			<div class="col-5">
				<input type="number" class="form-control" id="yearChoose" aria-describedby="yearHelp" min="1991" max="2004" value="1991" size="4" maxlength="4" name="yearChoose" required>
				<small id="yearHelp" class="form-text text-muted">Укажите ваш год рождения</small>
			</div>
		</div>

		<div class="form-group row">
			<label for="email" class="col-1 col-form-label">e-mail</label>
			<div class="col-5">
				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="abiturient@mail.com" size="40" maxlength="40" name="email" required>
				<small id="emailHelp" class="form-text text-muted">Введите ваш e-mail</small>
			</div>
		</div>

		<fieldset class="form-group">
			<legend>Место жительства:</legend>

			<div class="form-check">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="livePlace" value="local" checked>Местный
				</label>
			</div>

			<div class="form-check">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="livePlace" value="foreign">Иногородний
				</label>
			</div>
		</fieldset>

		<div class="form-group row">
			<label for="groupNumber" class="col-1 col-form-label">Номер группы</label>
			<div class="col-5">
				<input type="text" class="form-control" id="groupNumber" aria-describedby="groupNumberHelp" placeholder="Введите номер группы" size="5" maxlength="5" name="groupNumber" required>
				<small id="groupNumberHelp" class="form-text text-muted">Укажите номер вашей группы</small>
			</div>
		</div>

		<div class="form-group row">
			<label for="pointsInput" class="col-1 col-form-label">Баллы</label>
			<div class="col-5">
				<input type="text" class="form-control" id="pointsInput" aria-describedby="pointsHelp" placeholder="Введите баллы" size="4" maxlength="4" name="pointsInput" required>
				<small id="pointsHelp" class="form-text text-muted">Введите сумму ваших баллов</small>
			</div>
		</div>

		<input type="submit" class="btn btn-primary" value="Подтвердить" name="butAccept"></input>
	</form>
	</div>
</body>
</html>