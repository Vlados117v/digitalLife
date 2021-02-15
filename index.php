<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DigitalLife</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Имя</th>
						<th scope="col">Пол</th>
						<th scope="col">Характеристика</th>
						<th scope="col">Настроение</th>
					</tr>
				</thead>
				<tbody>
					<?php require_once 'phpBlocks/tableOutput.php';?>
				</tbody>
			</table>
			<div id="fatalError"><p class="text-danger">Ошибка, строка не была добавлена !!!</p></div>
		</div>


		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Новая запись
		</button>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Создать нового пользователя</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<form id="newUser">
						<label>Имя пользователя:<input type="text" name="name" id="name" class="form-control"></label>
						<div id="nameError"><p class="text-danger">Имя должно иметь от 3 до 11 символов и обязательно к заполнению</p></div>

						<label>Пол:<select name="sex" class="form-select" id="sex">
							<option disabled>Выберите пол</option>
							<option value="Мужчина">Мужчина</option>
							<option value="Женщина">Женщина</option>
						</select></label>

						<label>Характеристика:<textarea rows="10" cols="45" name="characteristic" id="characteristic" class="form-control"></textarea></label>
						<div id="characteristicError"><p class="text-danger">Поле обязательно к заполнению</p></div>

						<p>Как настроение ?</p>
						<label class="form-label"><input type="radio" name="drink" value="Хорошее" class="mood form-check-input"> Хорошее</label><Br>
						<label class="form-label"><input type="radio" name="drink" value="Отличное" class="mood form-check-input"> Отличное</label>
						<div id="moodError"><p class="text-danger">Поле обязательно к заполнению</p></div>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
					<button type="button" class="btn btn-primary" id="addUser">Сохранить</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="js/ajax.js"></script>
</body>
</html>