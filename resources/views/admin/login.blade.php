<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	{{-- Bootstrap --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3/css/bootstrap.min.css') }}" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h2 class="page-header">Admin Login - <span class="text-danger">News19</span></h2>
				<table class="table table-bordered">
					<form action="{{ url('admin/login_check') }}" method="post">
						{{ csrf_field() }}
						<tr>
							<th>Username</th>
							<td><input type="text" name="_username" class="form-control" /></td>
						</tr>
						<tr>
							<th>Password</th>
							<td><input type="password" name="_pwd" class="form-control" /></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" class="btn btn-danger" value="Login" />
							</td>
						</tr>
					</form>
				</table>
			</div>
		</div>
	</div>
</body>
</html>