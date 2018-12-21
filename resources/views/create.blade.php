<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit data</title>
	<link rel="stylesheet" href="{{ url('css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('css/custom.css') }}">
	<script type="text/javscript" src="{{ url('js/bootstrap/bootstrap.min.js') }}"></script>
</head>
<body>
	<br>
	<center>
	<form action="/store" method="post">
		@csrf
	<table>
		<tr>
			<td>Name of Institution</td>
			<td><input name="Name_of_Institution" type="text"></td>
		</tr>
		<tr>
			<td>Locations</td>
			<td><input name="Location" type="text"></td>
		</tr>
		<tr>
			<td>Legal status</td>
			<td><input name="Legal_Status" type="text"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input name="Type" type="text"></td>
		</tr>
		<tr>
			<td>Key areas of Work</td>
			<td><input name="Key_areas_of_work" type="text"></td>
		</tr>
		<tr>
			<td>Key person's Name</td>
			<td><input name="Key_persons_name" type="text"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input name="Contact" type="text"></td>
		</tr>
		<tr>
			<td>Region</td>
			<td>
				<select name="Region" id="">
					<option value="sikkim">Sikkim</option>
					<option value="kalimpong">kalimpong</option>
					<option value="darjeeling">darjeeling</option>
				</select>
			</td>
		</tr>
	</table>
	<br><br>
	<button type="button" onclick="goBack()" class="btn btn-info">Go back</button>
	<input type="submit" class="btn btn-success">
	</form>
	</center>
</body>

<script>
	function goBack(){
		window.history.back();
	}
</script>
</body>
</html>