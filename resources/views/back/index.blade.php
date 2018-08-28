<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>win10-ui</title>
    <!-- <link rel='Shortcut Icon' type='image/x-icon' href='./img/windows.ico'> -->
    <link rel='Shortcut Icon' type='image/x-icon' href="{{URL::asset('back/img/windows.ico')}}">
    <script type="text/javascript" src="{{URL::asset('back/js/jquery-2.2.4.min.js')}}"></script>
    <link href="{{URL::asset('back/css/animate.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('back/component/layer-v3.0.3/layer/layer.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('back/component/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link href="{{URL::asset('back/css/default.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('back/js/win10.js')}}"></script>    <style>
        * {
            font-family: "Microsoft YaHei", 微软雅黑, "MicrosoftJhengHei", 华文细黑, STHeiti, MingLiu
        }
        /*磁贴自定义样式*/
        .win10-block-content-text {
            line-height: 44px;
            text-align: center;
            font-size: 16px;
        }
    </style>
    <script>
        Win10.onReady(function () {

            //设置壁纸
            Win10.setBgUrl({
                main:"{{URL::asset('back/img/wallpapers/main.jpg')}}",
                mobile:"{{URL::asset('back/img/wallpapers/mobile.jpg')}}",
            });

            Win10.setAnimated([
                'animated flip',
                'animated bounceIn',
            ], 0.01);
            setTimeout(function () {
                Win10.newMsg('推荐全屏', '按下F11全屏以达到最佳视觉效果(点击进入)',function () {
                    Win10.enableFullScreen();
                })
            }, 1500);

            setTimeout(function () {
                layer.open({
                    type: 2,
                    title: '最新资讯',
                    area: ['300px', '380px'],
                    shade:0,
                    offset: 'rt',
                    content: '//win10ui.yuri2.cn/src/broadcast.html'
                })
            },2000)
        });
    </script>
</head>
<body>
<div id="win10">
    <div class="desktop">
        <div id="win10-shortcuts" class="shortcuts-hidden">
            <div class="shortcut" onclick="Win10.openUrl('{{url('/')}}','<img class=\'icon\' src=\'./img/icon/win10.png\'/>Win10-UI官网')">
                <img class="icon" src="{{URL::asset('back/img/icon/win10.png')}}"/>
                <div class="title">Win10-UI官网</div>
            </div>
            <div class="shortcut" onclick="Win10.openUrl('https://yuri2.cn','<img class=\'icon\' src=\'./img/icon/blogger.png\'/>尤里2号的博客')">
                <img class="icon" src="{{URL::asset('back/img/icon/blogger.png')}}"/>
                <div class="title">Yuri2's Blog</div>
            </div>
            <div class="shortcut" onclick="Win10.openUrl('win10ui.yuri2.cn/src/doc.php','<img class=\'icon\' src=\'./img/icon/doc.png\'/>在线文档')">
                <img class="icon" src="{{URL::asset('back/img/icon/doc.png')}}"/>
                <div class="title">在线文档</div>
            </div>
            <div class="shortcut" onclick="window.open('https://github.com/yuri2peter/win10-ui')">
                <img class="icon" src="{{URL::asset('back/img/icon/github.png')}}"/>
                <div class="title">github</div>
            </div>
            <div class="shortcut" onclick="Win10.openUrl('https://www.oschina.net/p/win10-ui','<img class=\'icon\' src=\'./img/icon/kyzg.png\'/>开源中国（求支持~）')">
                <img class="icon" src="{{URL::asset('back/img/icon/kyzg.png')}}"/>
                <div class="title">开源中国</div>
            </div>
            <div class="shortcut" onclick="window.open('https://github.com/yuri2peter/win10-ui/archive/master.zip')">
                <img class="icon" src="{{URL::asset('back/img/icon/download.png')}}"/>
                <div class="title">快速获取</div>
            </div>
            <div class="shortcut" ondblclick='Win10.openUrl("{{url('back/login')}}","<i class=\"fa fa-user icon black-green\"></i>示例登录页")'>
                <i class="fa fa-user icon black-green"></i>
                <div class="title">示例登录页（双击）</div>
            </div>
        </div>
    </div>
    <div id="win10-menu" class="hidden">
        <div class="list win10-menu-hidden animated animated-slideOutLeft">
            <div class="item"><i class="red icon fa fa-wrench fa-fw"></i><span>API测试</span></div>
            <div class="sub-item" onclick="Win10.openUrl('./child.html','子页')">父子页沟通</div>
            <div class="sub-item" onclick="Win10.commandCenterOpen()">打开消息中心</div>
            <div class="sub-item" onclick="Win10.newMsg('API测试','通过API可以发送消息至消息中心，自定义标题与内容(点击我试试)',function() {alert('click')})">发送带回调的消息</div>
            <div class="sub-item" onclick="Win10.menuClose()">关闭菜单</div>
            <div class="item" ><i class="blue icon fa fa-gavel fa-fw"></i>辅助工具</div>
            <div class="sub-item" onclick="Win10.openUrl('win10ui.yuri2.cn/src/tools/builder-shortcut.html','图标代码生成器')">桌面图标代码生成器</div>
            <div class="sub-item" onclick="Win10.openUrl('win10ui.yuri2.cn/src/tools/builder-tile.html','磁贴代码生成器')">磁贴代码生成器</div>
            <div class="sub-item" onclick="Win10.openUrl('win10ui.yuri2.cn/src/tools/builder-menu.html','菜单代码生成器')">菜单代码生成器</div>
            <div class="item" onclick="Win10.aboutUs()"><i class="purple icon fa fa-star fa-fw"></i>关于</div>
            <div class="item" onclick=" Win10.exit();"><i class="black icon fa fa-window-close fa-fw"></i>关闭</div>
        </div>
        <div class="blocks">
            <div class="menu_group">
                <div class="title">
                    常用场景(宽屏)
                </div>
                <div loc="1,1" size="4,3" class="block">
                    <div class="content" style="background-color: orangered">
                        <div class="win10-block-content-text" style="font-size: 26px;line-height: 88px">WIN10-UI</div>
                        <div class="win10-block-content-text">显示信息</div>
                    </div>
                </div>
                <div loc="5,1" size="2,1" class="block">
                    <div class="content" style="background-color: green">
                        <div  class="win10-block-content-text">文字按钮</div>
                    </div>
                </div>
                <div loc="5,2" size="2,2" class="block">
                    <div class="content">
                        <img style="width: 40px;height: 40px;margin: 2px auto;display: block" src="{{URL::asset('back/img/icon/baidu.png')}}">
                        <div class="win10-block-content-text">图标按钮</div>
                    </div>
                </div>
                <div loc="1,4" size="6,3" class="block">
                    <div class="content" style="background: url('{{URL::asset('back/img/presentation/1.png')}}');background-size: auto">
                        <div style="line-height:132px;text-align: center;">显示图片</div>
                    </div>
                </div>
                <div loc="1,7" size="2,1" class="block">
                    <div class="content" style="background-color: grey" onclick="Win10.openUrl('//www.baidu.com')">
                        <div class="win10-block-content-text">内部链接</div>
                    </div>
                </div>
                <div loc="3,7" size="2,1" class="block">
                    <div class="content" style="background-color: blue" onclick="window.open('https://www.baidu.com')">
                        <div class="win10-block-content-text">外部链接</div>
                    </div>
                </div>
            </div>
            <div class="menu_group">
                <div class="title">
                    方块布局
                </div>
                <div loc="1,1" size="4,4" class="block">
                    <div class="content" style="background-color: red"></div>
                </div>
                <div loc="5,1" size="2,2" class="block">
                    <div class="content" style="background-color: blue"></div>
                </div>
                <div loc="5,3" size="1,2" class="block">
                    <div class="content" style="background-color: green"></div>
                </div>
                <div loc="6,3" size="1,1" class="block">
                    <div class="content" style="background-color: yellow"></div>
                </div>
                <div loc="6,4" size="1,1" class="block">
                    <div class="content" style="background-color: black"></div>
                </div>
                <div loc="1,6" size="3,1" class="block">
                    <div class="content" style="background-color: red"></div>
                </div>
                <div loc="1,5" size="2,1" class="block">
                    <div class="content" style="background-color: orangered"></div>
                </div>
                <div loc="4,6" size="2,1" class="block">
                    <div class="content" style="background-color: yellow"></div>
                </div>
                <div loc="3,5" size="2,1" class="block">
                    <div class="content" style="background-color: green"></div>
                </div>
                <div loc="6,5" size="1,2" class="block">
                    <div class="content" style="background-color: darkslategray"></div>
                </div>
                <div loc="5,5" size="1,1" class="block">
                    <div class="content" style="background-color: blue"></div>
                </div>
            </div>
        </div>
        <div id="win10-menu-switcher"></div>
    </div>
    <div id="win10_command_center" class="hidden_right">
        <div class="title">
            <h4 style="float: left">消息中心 </h4>
            <span id="win10_btn_command_center_clean_all">全部清除</span>
        </div>
        <div class="msgs"></div>
    </div>
    <div id="win10_task_bar">
        <div id="win10_btn_group_left" class="btn_group">
            <div id="win10_btn_win" class="btn"><span class="fa fa-windows"></span></div>
            <div class="btn" id="win10-btn-browser"><span class="fa fa-internet-explorer"></span></div>
        </div>
        <div id="win10_btn_group_middle" class="btn_group"></div>
        <div id="win10_btn_group_right" class="btn_group">
            <div class="btn" id="win10_btn_time">
                <!--0:00<br/>-->
                <!--1993/8/13-->
            </div>
            <div class="btn" id="win10_btn_command"><span id="win10-msg-nof" class="fa fa-comment-o"></span></div>
            <div class="btn" id="win10_btn_show_desktop"></div>
        </div>
    </div>
</div>
</body>
</html>