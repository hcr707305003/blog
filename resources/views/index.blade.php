@extends('common.base')
@section('content')    
     {{-- 这里是Blade注释 --}}    
    <!-- 技术日记 -->
  	<div class="container div_divider">
  		<!-- 分割线 -->
  		<div class="row">
  			<!-- 文章列表 -->
  			<div class="col-xs-9">
  				<div class="list-group div_article">
  					<!-- 子头栏 -->
  					<a href="#" class="list-group-item active item_article_first">
  						<h4 class="list-group-item-heading">
  							My Life, Like Sun!
  						</h4>
  					</a>
  					<!-- 文章列表 -->
  					<div class="list-group-item item_article">
  						<div class="row">
  							<div class="div_center col-xs-9">
  								<div class="list-group-item-heading div_article_title">
  									<strong>
  										Android框架设计理念
  									</strong>
  								</div>
  								<p class="list-group-item-text div_article_content">
  									所有设计源于生活，框终点在于分层、层与层之间如何交流。
  									所有设计源于生活，框终点在于分层、层与层之间如何交流。
  									所有设计源于生活，框终点在于分层、层与层之间如何交流。
  									所有设计源于生活，框终点在于分层、层与层之间如何交流。
  									所有设计源于生活，框终点在于分层、层与层之间如何交流。
  									所有设计源于生活，框终点在于分层、层与层之间如何交流。
  									所有设计源于生活，框终点在于分层、层与层之间如何交流。
  									所有设计源于生活，框终点在于分层、层与层之间如何交流。
  								</p>
  							</div>
  							<!-- 右侧图片，信息 -->
  							<div class="col-xs-3 div_right_info">
  								<img style="width: 100px;height: 100px;" class="iv_article img-rounded" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535022421512&di=a24d334a5014bafdb4afddce23da3e52&imgtype=0&src=http%3A%2F%2Fimg07.tooopen.com%2Fimages%2F20170508%2Ftooopen_sy_208631868843.jpg">
  								<div>2017/12/9 12:09</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<!-- 右侧 -->
  			<!-- <div class="col-xs-3 div_record">
  				用户信息
  				<div class="jumbotron div_userinfo">
  					<img style="width: 50px;height: 50px;" class="iv_user_head img-circle" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535022421512&di=a24d334a5014bafdb4afddce23da3e52&imgtype=0&src=http%3A%2F%2Fimg07.tooopen.com%2Fimages%2F20170508%2Ftooopen_sy_208631868843.jpg">
  					<div style="display: inline-block; margin-left: 12px;font-size: 18px;">梁世杰</div>
  				</div>
  				随手记录
  				<div style="display: flex;">
  					<div style="flex: 1"><hr></div>
  					<div style="text-align: center;line-height: 48px;color: #34374C">记录美好的心情</div>
  					<div style="flex: 1"><hr></div>
  				</div>
  				<input type="text" class="form-control" placeholder="标题:美好的一天...">
  				<br>
  				<textarea class="form-control" rows="3" name=textarea placeholder="内容:今天捡到一分钱！！！^_^"></textarea>
  				<br>
  				<div class="div_save">
  					<button type="button" class="btn btn-primary btn_save_record">save</button>
  				</div>
  				<hr>
  				小功能列表
  				<div class="row div_little_func">
  					<div class="col-xs-4">
  						<button class="btn btn-default btn-cricle btn_login" data-toggle="modal" data-target="#loginModal">登</button>
  					</div>
  					<div class="col-xs-4">
  						<button class="btn btn-default btn-cricle btn_stay">留</button>
  					</div>
  					<div class="col-xs-4">
  						<button class="btn btn-default btn-cricle btn_write">写</button>
  					</div>
  				</div>
  			</div> -->
  		</div>
  		<!-- 登录模态框 -->
  		<div class="modal fade bs-example-modal-sm" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  			<div class="modal-dialog modal-sm" role="document">
  				<div class="modal-content">
  					<div class="modal-header">
  						<div class="modal-title" id="myModalLabel" style="text-align: center;">登录</div>
  					</div>
  					<div class="modal-body">
  						<form class="form-horizontal" style="padding: 12px;">
  							<div class="form-group">
  								<input type="text" class="form-control" id="inputEmail3" placeholder="账户名">  		
  							</div>
  							<div class="form-group">			
  								<input type="password" class="form-control" id="inputPassword3" placeholder="密码">
  							</div>
  						</form>
  					</div>
  					<div class="modal-footer" style="text-align: center;">
  						<button type="button" class="btn btn-primary" style="width: 100%">Login</button>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
@endsection