@extends('layouts.master')

@section('title', 'VRSeen | AppStore')

@section('assets')
    @parent
        	<link href="{{asset('css/resort.css')}}" rel="stylesheet">
    	<!--侧导航-->
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
@endsection

@section('content')
    <body id="pgcontainer">
		<div class="header">
			<!--pc_header-->
			@include('layouts.header')
			<!--phone_header-->
			<div class="header_phone">
				<div id="nav">
				<div id="navbar">
    				<a href="#" class="menubtn">menu</a>
    				<!--phone侧导航-s-->
    				<div id="hamburgermenu">
        				<ul id="dianji">
        					<li @if($category=='all')class="tab_q"@endif ><a href="{{route('list', ['platform' => $platform, 'category' => 'all'])}}">全部</a></li>
			        		@foreach($categories as $cid)
		        			<li @if($category==$cid->id)class="tab_q"@endif><a href="{{route('list', ['platform' => $platform, 'category' => $cid->id])}}">{{$cid->category}}</a></li>
		         			@endforeach   					
        				</ul>
    				</div>
    				<!--phone侧导航-e-->
    			</div>
    			<div class="overlay"></div>
				</div>
				<div class="navbar_logo"><a href="/"><img src="{{asset('img/logo.png')}}" width="120px" height="28px"></a></div>
		        <p class="navbar_search1">
		        	<input type="text" class="search_text" placeholder="请输入关键搜索">
		        	<img src="{{asset('img/search-icon.png')}}" width="20px" height="20px">
		        </p>
		       
			</div>
		</div>
		<!--搜索-->
		<div class="re_inner">
		     <p class="resort_box">游戏</p>
		<div class="resort" id="resort_id">
			<div class="resort_info">
			 <h1>搜索结果：{{$q}}</h1>
			 <h1 class="resort_h1">以下是关于“<span class="resort_span">{{$q}}</span>”的所有游戏信息</h1>
				@foreach($apps as $app)
	      		<div class="atr_1">
	      			<a href="{{route('detail', ['id'=>$app->id])}}">
	      			<img src="{{asset($app->thumb)}}"></a>
	      			<p>
	      				<span class="p_1"><a href="{{route('detail', ['id'=>$app->id])}}">@if($app->name_chn==''){{str_limit($app->name_eng, 10)}}@else{{str_limit($app->name_chn, 10)}}@endif</a></span>
	      				<span class="p_2">14.0M</span>
	      			</p>
	      			<a class="span_1" href="{{route('download', ['id'=>$app->id])}}">免费下载</a>
	      		</div>
	      		@endforeach
	      		<div class="btn btn2">
	      		{!! $apps->render() !!}
	        	</div>
	        	<div class="btn1">
	        		<ul>
	        		@if($apps->currentPage()<1)
	        			<li class="btn1_1">上一页</li>
	        		@else
	        		<li><a href="{{$apps->previousPageUrl()}}">上一页</a></li>
	        		@endif
	        		@if(!$apps->hasMorePages())
	        		<li class="btn1_1">下一页</li>
	        		@else
	        		<li><a href="{{$apps->nextPageUrl()}}">下一页</a></li>
	        		@endif
	        		</ul>
	        	</div>
	      	</div>
		</div>
		
		</div>
@endsection