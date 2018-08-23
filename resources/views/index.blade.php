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
                <div class="list-group-item item_article">
                    <div class="row">
                        <a href="#" align="center"><h3>这是标题部分</h3></a>
                        <p>
                            <small>发布时间: 2016-6-6</small>
                            <small>点击量: <span class="badge">20</span></small>
                        </p>
                        <p class="div_center line-clamp text-muted module list-group-item-text div_article_content">
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                        </p>
                        <p>
                            <span class="badge">关键字</span>
                            <span class="badge">关键字</span>
                            <span class="badge">关键字</span>
                        </p>
                    </div>
                </div>
                <div class="list-group-item item_article">
                    <div class="row">
                        <a href="#" align="center"><h3>这是标题部分</h3></a>
                        <p>
                            <small>发布时间: 2016-6-6</small>
                            <small>点击量: <span class="badge">20</span></small>
                        </p>
                        <p class="line-clamp text-muted module list-group-item-text div_article_content">
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                        </p>
                        <p>
                            <span class="badge">关键字</span>
                            <span class="badge">关键字</span>
                            <span class="badge">关键字</span>
                        </p>
                    </div>
                </div>
                <div class="list-group-item item_article">
                    <div class="row">
                        <a href="#" align="center"><h3>这是标题部分</h3></a>
                        <p>
                            <small>发布时间: 2016-6-6</small>
                            <small>点击量: <span class="badge">20</span></small>
                        </p>
                        <p class="line-clamp text-muted module list-group-item-text div_article_content">
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                            所有设计源于生活，框终点在于分层、层与层之间如何交流。
                        </p>
                        <p>
                            <span class="badge">关键字</span>
                            <span class="badge">关键字</span>
                            <span class="badge">关键字</span>
                        </p>
                    </div>
                </div>
                <div style="border: 1px dashed #ddd;"></div>

                <!-- 分页 -->
                <div class="text-center">
                    <ul class="pagination">
                    <!-- 向前符号 -->
                    <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 侧边栏 -->
        <div class="col-md-3" style="padding-bottom: 50px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    推荐新闻
                </div>
                <div class="panel-body">
                    <strong class="panel-title">
                    <a href="#">这里是新闻列表</a>
                    </strong>
                    <p>
                        这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要这里是新闻内容摘要
                    </p>
                </div>
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