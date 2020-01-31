<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagination</title>
	<style>
		.pagination li{
			display: inline;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="container">
			<table>
				<thead>
					<th>SrNo.</th>
					<th>Name</th>
					<th>Gmail</th>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
					{{$users->links()}}
		</div>
	</div>
</body>
</html>