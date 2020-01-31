<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>Upload file & storing on database</title>
</head>
<body>
	<br>
	<br>
	<div class="row">
		<div class="container">
			<div class="row">
				<form action="{{ route('upload.file') }}" method="post" class="form-inline" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="file" name="file[]" class="form-control" multiple="true">
					<input type="submit" value="submit" class="btn btn-info" class="form-control">
				</form>
			</div>
			<div class="rwo">
				<h2>Show File</h2>
				<img src="{{ asset('strorage/public/upload/rohingyamigration.jpg') }}" alt="Image not found">
			</div>
		</div>
	</div>
<script src="{{ asset('js/app.js') }}"></script>	
</body>
</html>