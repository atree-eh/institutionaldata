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
	<?php 
		$array = json_decode($data);
	?>
	<center>
	<div class="viewdata">
		
		<form action="{{ url('/updatedata') }}" method="post">
			@csrf
			<table>
			@foreach ($array as $key =>$value)
			<tr>
				@if( $key == 'id' )
					<td>{{$key}}</td>
					<td><input name="id" type="hidden" value="{{ $value }}">{{ $value }}</td>
				@elseif( $key == 'Region' )
					<td>{{ $key }}</td>
					<td>
					<select name = "Region">
						
						<option value="sikkim" <?php if($value == 'sikkim'){echo "selected";} ?>>Sikkim</option>
						<option value="kalimpong" <?php if($value == 'kalimpong'){echo "selected";} ?>>Kalimpong</option>
						<option value="darjeeling" <?php if($value == 'darjeeling'){echo "selected";} ?>>Darjeeling</option>
					</select>
					</td>
				@else
					<td>{{$key}}</td>
					<td><input name="{{$key}}" type="text" value="{{ $value }}"></td>
				@endif
			</tr>
			
			@endforeach
			<tr>
				<td><button class="btn btn-success" onclick="goBack()">go back</button></td>
				<td><input type="submit" value="update" class="btn btn-info"/></td>
			</tr>
			</table>
		</form>		

	</div>
	<br>	<br>	
	
	</center>
</body>

<script>
	function goBack(){
		window.history.back();
	}
</script>
</body>
</html>