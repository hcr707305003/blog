﻿<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <title>文章列表</title> 
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">  
    <link rel="stylesheet" href="{{ URL::asset('back/css/sweetalert.css') }}">  
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">  
</head>
<body>
    @if (session('status'))
        <nav style="opacity: 0.8; text-align: center; background-color: #00b271;" class="navbar navbar-default">
            <div class="container" style=" margin: 20px 0; line-height: 10px;font-size: 20px;color:#E8E8FF;">
                {{ session('status') }}
            </div>
        </nav>
    @endif
    <div class="container">  
        <div class="row">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th>Article-ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Create-user</th>
                        <th>Create-date</th>
                        <th>handle</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($article_list) > 0)
                    @foreach ($article_list as $v)
                    <tr>
                        <td>{{$v->id}}</td>
                        <td>{{$v->title}} </td>
                        <td><p class="line-clamp text-muted module list-group-item-text div_article_content">{{$v->content}}</p></td>
                        <td>{{$v->uid}}</td>
                        <td>{{$v->created_at}}</td>
                        <td>
                            @if ($v->uid == $user['id'] || $user['id'] == 1)
                            <a href="{{url('edit/article', ['id' => $v->id])}}" class="btn btn-success btn-sm">edit</a>
                            @endif
                            @if ($user['is_manager'] || $v->uid == $user['id'])
                            <a type="button" class="del btn btn-danger btn-sm">delete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <nav style="text-align: center">
                {{ $article_list->links() }}
            </nav>
        </div>
    </div>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('js/bootstrap.js') }}"></script> -->
    <script src="{{URL::asset('back/js/sweetalert.min.js')}}"></script>
    <script>
        $('.del').click(function (a) {
                var _This=this;
                var id = $(this).parent().parent().children('td').eq(0).text();
                swal(
                        {title:"您确定要删除这条用户信息吗",
                        text:"删除后将无法恢复，请谨慎操作！",
                        type:"warning",
                        showCancelButton:true,
                        confirmButtonColor:"#DD6B55",
                        confirmButtonText:"是的，我要删除！",
                        cancelButtonText:"让我再考虑一下…",
                        closeOnConfirm:false,
                        closeOnCancel:false
                        },
                        function(isConfirm){
                            if(isConfirm)
                            {
                                // console.log(id);
                                $.ajax({
                                    type:"GET",
                                    data:{
                                        'id':id,
                                    },
                                    url:"/del/article/",
                                    // data:{id:ids},
                                    dataType: "json",
                                    success:function(ss){
                                        console.log(ss);
                                        if (ss.code == 200) {
                                            $(_This).parent().parent().remove();
                                            swal({title:"删除成功！",
                                                text:"您已经永久删除了这条信息。",
                                                type:"success"})
                                        } else {
                                           swal({title:"删除失败！",
                                                text:"请重新删除。",
                                                type:"error"}) 
                                        }
                                    }
                                });
                            }
                            else{
                                swal({title:"已取消",
                                    text:"您取消了删除操作！",
                                    type:"error"})
                            }
                        }
                    )
            });
    </script>  
</body>
</html>