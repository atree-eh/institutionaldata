<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All data</title>

	<link rel="stylesheet" href="{{ url('css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('css/custom.css') }}">
	<script type="text/javscript" src="{{ url('js/bootstrap/bootstrap.min.js') }}"></script>


</head>
<body>
	<div class="container">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Institutional data</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/create" class="btn create_button">Create</a></li>
    </ul>
  </div>
</nav>
</div>

	<center>
	<?php $Regionnames = array('sikkim', 'kalimpong', 'darjeeling');?>
	@foreach($Regionnames as $region)
		<table>
		<tr><h2 style="text-transform: uppercase;">{{ $region }}</h2></tr>
		<tr>
			<th>Name</th>
			<th>Type</th>
			<th>Key areas of work</th>
			<th>Buttons</th>
		</tr>

		@foreach($all_data as $row)
			@if( $row['Region'] == $region )
			<tr>
				<td>{{$row['Name_of_Institution']}}</td>
				<td>{{$row['Type']}}</td>
				<td>{{$row['Key_areas_of_work']}}</td>
				<?php $id = $row['id'] ?>
				<td>
					<a href="{{ url('/viewdata', [$id]) }}" class="btn btn-success">View</a>
					<a href="{{ url('/editdata', [$id]) }}" class="btn btn-primary">Edit</a>
				</td>
			</tr>
			@endif
		@endforeach
		</table>
		<br><br>
	@endforeach
	</center>


</body>

</html>