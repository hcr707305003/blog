<!DOCTYPE html>
<html>
	<head>
		<title>用户修改信息</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
	    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">  
	    <link rel="stylesheet" href="{{ URL::asset('back/css/sweetalert.css') }}">
	</head>
	<body>
		<div class="container">
			<form action="{{url('edit/handle/user')}}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$user->id}}">
				<div class="form-group">
					<label for="Name">Name</label>
					<input type="text" name="name" class="form-control" id="Name" placeholder="Name" value="{{$user->name}}">
				</div>
				<div class="form-group">
					<label for="E-Mail">E-Mail</label>
					<input type="email" name="email" class="form-control" id="E-Mail" placeholder="E-Mail" value="{{$user->email}}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="Again-Password">Again-Password</label>
					<input type="password" name="more_password" class="form-control" id="Again-Password" placeholder="Again-Password">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>	
</html>
