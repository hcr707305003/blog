@extends('common.base')
@section('content')    
     {{-- 这里是Blade注释 --}}  
     <div class="container-fluid">
        <div class="col-md-9">
            <div class="list-group">
                <a href="#" class="list-group-item active item_article_first">
                    <h4 class="list-group-item-heading">
                        My Life, Like Sun!
                    </h4>
                </a>

                @foreach ($article as $vs)
                @if (!empty($vs))
                <div class="list-group-item item_article">
                    <div class="row">
                        <a href="{{url('detail', ['id' => $vs->id])}}" align="center"><h3>{{$vs->title}}</h3></a>
                        <p>
                            <small>发布时间: {{explode(' ', $vs->created_at)[0]}}</small>
                            <small>点击量: <span class="badge">{{$vs->clicks}}</span></small>
                        </p>
                        <p class="div_center line-clamp text-muted module list-group-item-text div_article_content">
                            <a href="{{url('detail', ['id' => $vs->id])}}">
                                {{$vs->content}}
                            </a>
                        </p>
                        <p>
                        @foreach ($vs->theme_name as $v)
                            <span class="badge">{{$v}}</span>
                        @endforeach
                        </p>
                    </div>
                </div>
                @endif
                @endforeach

                <div style="border: 1px dashed #ddd;"></div>

                <!-- 分页 -->
                <div class="text-center">
                    {{$article->links()}}
                </div>
            </div>
        </div>
        <!-- 侧边栏 -->
        <div class="col-md-3" style="padding-bottom: 50px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    浏览最多的文章
                </div>
                @foreach ($clicks as $vs)
                <div class="panel-body">
                    <strong class="panel-title">
                    <a href="{{url('detail', ['id' => $vs->id])}}">{{$vs->title}}</a>
                    </strong>
                    <p class="div_center line-clamp text-muted module list-group-item-text div_article_content">
                        {{$vs->content}}
                    </p>
                </div>
                @endforeach
            </div>

            <!-- 热点新闻侧边栏 -->
            <!-- <div class="panel panel-default">
                <div class="panel-heading">
                    热点新闻
                    <a href="#" class="text-muted pull-right">>></a>
                </div>
                <ul class="list-group">
                    <li class="list-group-item" style="border: 0;">
                        <a href="#" class="text-muted">新闻标题列表</a>
                    </li>
                </ul>
            </div> -->

            <!-- 多媒体 -->
            <!-- <div class="panel panel-default">
                <div class="panel-heading">
                    推荐视频
                    <a href="#" class="text-muted pull-right">>></a>
                </div>
                <ul class="media-list" style="margin: 5px;">
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <img src="img/me.png" style="width: 50px;height: 50px;" class="media-object">
                            </div>
                            <div class="media-body">
                                <strong class="media-heading">这是视频的标题</strong>
                                <p>多媒体列表项介绍</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div> -->

            <!-- 广告位 -->
            <!-- <a href="#">
                <img src="img/1.png" style="width: 100%;height: 100px;">
            </a> -->
        </div>
    </div>
@endsection