<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
	<title>File Uploading</title>
</head>
<body>
<br>
<div class="row">
	<div class="container">
		<div class="col-lg-4 col-lg-4">
			<center><h1>Upload a File</h1></center>
			<form action="/store" enctype="multipart/form-data" method="post">
				{{csrf_field()}}
				<input type="file" name="image" id="">
				<br>
				<input type="submit" value="Upload">
			</form>
		</div>
	</div>
</div>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html> 