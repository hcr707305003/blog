<!DOCTYPE html>
<html>
	<head>
		<title>添加用户</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
	    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">  
	    <link rel="stylesheet" href="{{ URL::asset('back/css/sweetalert.css') }}">
	</head>
	<body>
		<div class="container">
			<div class="form-group text-center" style="opacity: 0.8;">
	            @if (count($errors) > 0)
	                <div class="alert alert-danger">
	                    <ul>
	                    @foreach ($errors->all() as $error)
	                        <li style="display: block;">{{ $error }}</li>
	                    @endforeach
	                    </ul>
	                </div>
	            @endif
	        </div>
			<form action="{{url('add/handle/user')}}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label for="Name">Name</label>
					<input type="text" name="name" class="form-control" id="Name" placeholder="Name">
				</div>
				<div class="form-group">
					<label for="E-Mail">E-Mail</label>
					<input type="email" name="email" class="form-control" id="E-Mail" placeholder="E-Mail">
				</div>
				<div class="form-group">
					<label for="auth">authority</label>
					<select name="is_manager" id="auth" class="form-control">
						<option value="0">普通用户</option>
						<option value="1">管理员</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="Again-Password">Again-Password</label>
					<input type="password" name="more_password" class="form-control" id="Again-Password" placeholder="Again-Password">
				</div>
				<button type="submit" class="btn btn-default">Add</button>
			</form>
		</div>
	</body>	
</html>