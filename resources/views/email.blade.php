<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>send mail</h1>
	<form action="sendm" method="post">
		{{csrf_field()}}
		To: <input type="text" name="to">
		Message: <textarea name="msg1" id="" cols="30" rows="10"></textarea>
		<input type="submit" value="send">
	</form>
</body>
</html>