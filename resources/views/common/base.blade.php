<!DOCTYPE html><html lang="en">
<head>    
    <title>shiroi的主页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="shiroi的个人技术博客，分享一些个人兴趣和一些技术问题。。。">
    <link rel="stylesheet" href="{{ URL::asset('assets/waifu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontCss.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/music.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/music.js') }}"></script>
    <script type="text/javascript">
        window.onload = function(){
            MC.music({
                hasAjax:false,
                left:'140px',
                // top:'50px',
                // bottom:'-28px',
                bottom:'20px',
                musicChanged:function(ret){
                    // console.log(ret);return false;
                    var data = ret.data;
                    var index = ret.index;
                    var imageUrl = data[index].img_url;
                    var music_bg = document.getElementById('music-bg');
                },
                getMusicInfo:function(data){
                },
                musicPlayByWebAudio:function(ret){  
                },
            });
            // console.log(MC.music_div);
            var oDiv = MC.music_div;

            oDiv.onmousedown = function (en) {
                var ev = ev || event;
                var disX = en.clientX - oDiv.offsetLeft;
                var disY = en.clientY - oDiv.offsetTop;
                if (oDiv.setCapture) {
                    oDiv.setCapture();
                }

                document.onmousemove = function (en) {
                    var ev = ev || event;
                    var w = document.documentElement.clientWidth || document.body.clientWidth;
                    var h = document.documentElement.clientHeight || document.body.clientHeight;
                    oDiv.style.top = en.clientY - disY + 'px';//这是高
                    // console.log(en.clientY);
                    if (parseInt(oDiv.style.top) > h) {
                        // console.log(disX);
                        oDiv.style.top = h - disY - 50 + 'px';//这是高
                    } else if (parseInt(oDiv.style.top) < 0) {
                        oDiv.style.top = '50px';//这是高
                    }

                    oDiv.style.left = en.clientX - disX + 'px';//这是宽
                    if (parseInt(oDiv.style.left) > w) {
                        // console.log(oDiv.style.left);
                        oDiv.style.left = w - disX - 50 +'px';//这是宽
                    } else if (parseInt(oDiv.style.left) < 0) {
                        oDiv.style.left = '50px';//这是宽
                    }
                }
                document.onmouseup = function () {
                    document.onmousemove = null;
                    if (oDiv.releaseCapture) {
                        oDiv.releaseCapture()
                    }
                }
                return false;//阻止默认行为（如果页面中有文字，则会默认拖动文字），ie8及一下不行
            }
        }
    </script>
</head>
<body>
    <ul class="contextmenu">
        <li><a href="{{url('/')}}">首页</a></li>
        <li><a href="{{url('/article_list')}}">文章</a></li>
    </ul>
    <div class="music-bg" id="music-bg">
        <div class="music-mask"></div>
    </div>
    <div class="waifu" style="padding-bottom: 50px;">
        <div class="waifu-tips"></div>
        <canvas id="live2d" width="280" height="250" class="live2d"></canvas>
        <div class="waifu-tool">
            <span class="fui-home"></span>
            <span class="fui-chat"></span>
            <span class="fui-eye"></span>
            <span class="fui-user"></span>
            <span class="fui-photo"></span>
            <!-- <span class="fui-info-circle"></span> -->
            <span class="fui-cross"></span>
        </div>
    </div>
        

{{-- 包含页头 --}}
@include('common.header')

{{-- 继承后插入的内容 --}}
@yield('content')

{{-- 包含页脚 --}}
@include('common.footer')

    <script src="{{ URL::asset('assets/waifu-tips.js') }}"></script>
    <script src="{{ URL::asset('assets/live2d.js') }}"></script>
    <script type="text/javascript">initModel("{{ URL::asset('assets/') }}")</script>
</body>
</html>