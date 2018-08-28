<nav class="navbar navbar-default" role="navigation"> 
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="sr-only">This blog for Shiroi</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">This blog for Shiroi</a>
    </div>
    <?php 
        $model = DB::table('model')->where('is_open', '=', 1)->get();
        $url = URL::full();
        $p_url = parse_url($url);
        if (!isset($p_url['path'])) $p_url['path'] = '/';
    ?>
    <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav">
            @foreach ($model as $vs)
                @if ($vs->model_controller == $p_url['path'])
                    <li class="active"><a href="{{url($vs->model_controller)}}">{{$vs->model_name}}</a></li>
                @else
                    <li><a href="{{url($vs->model_controller)}}">{{$vs->model_name}}</a></li>
                @endif
            @endforeach
            <!-- <li><a href="#">login</a></li>
            <li><a href="#">register</a></li> -->
            <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉菜单 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">下拉菜单1</a></li>
                    <li class="divider"></li>
                    <li><a href="#">下拉菜单2</a></li>
                    <li class="divider"></li>
                </ul>
            </li> -->
        </ul>
    </div>
</nav>