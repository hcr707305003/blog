<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('back/css/login.css') }}">
    <script src="{{URL::asset('back/js/console.js')}}"></script>
    <title>示例登陆页</title>
    <style>
        #win10-login {
            background: url("{{URL::asset('back/img/wallpapers/login.jpg')}}") no-repeat fixed;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            position: fixed;
            z-index: -1;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
<div id="win10-login">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-5">
                <form class="form-horizontal" target="_self" method="post" action="{{url('/back/handle_login')}}">
                    <span class="heading">用户登录</span>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="用户名">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group help">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="密　码">
                        <i class="fa fa-lock"></i>
                        <a href="#" class="fa fa-question-circle"></a>
                    </div>
                    <div class="form-group">
                        <div class="main-checkbox">
                            <input type="checkbox" name="record" value="my" id="checkbox1" name="check"/>
                            <label for="checkbox1"></label>
                        </div>
                        <span class="text">Remember me</span>
                        <button type="submit" class="btn btn-default">登录</button>
                    </div>
                </form>
            </div>
        </div>
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
    </div>
</div>
</body>
</html>