<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View data</title>
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
		<table>
		@foreach ($array as $key =>$value)
			<tr>
					<td>{{$key}}</td>
					<td>{{$value}}</td>
			</tr>
		@endforeach
		</table>
	</div>
	<br><br>

<!-- 	<form action="/delete" method="post">
	<input type="hidden" id="delete_id" value="{{ $data['id'] }}">
	<button type="submit" class="btn btn-danger delete-buttons">Delete it</button>
</form> -->
	<button class="btn btn-danger" id="myBtn">Delete</button>
	<button onclick="goBack()" class="btn btn-info" >Go Back</button>
	</center>

<div id="myModal" class="modal">
		<div class="modal-content">
			<center><span class="close">&times;</span><br>
			<h3>Sure to Delete?</h3><br>
			<a href="{{ url('/delete', $data['id']) }}" class="btn btn-danger delete-buttons" id="myBtn">Delete</a>
			<!-- <button class="btn btn-info delete-buttons" id="go_back">No, Go Back</button> -->
			</center>
		</div>
	</div>

</body>

<script>
/*
No, Go backbutton handler
var back_btn = document.getElementById('go_back');
back_btn.onclick = function(){
	modal.style.display = "none";
}*/
	function goBack(){
		window.history.back();
	}
	var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks on <span> (x), close the modal


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</html>
