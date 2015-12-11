@extends('layouts.master')

@section('title', 'VRSeen | AppDetail')

@section('assets')
    @parent
        	<link href="{{asset('css/index.css')}}" rel="stylesheet">
@endsection

@section('content')
    <body>
		<div class="header">
			<!--pc_header-->
			@include('layouts.header')
			<!--phone_header-->
			<div class="header_phone xqheader">
				<div class="back" onclick="history.go(-1);"><span></span><img src="{{asset('img/back1.png')}}"></div>
				<div class="navbar_logo"><a href="/"><img src="{{asset('img/logo.png')}}" width="120px" height="30px"></a></div>	
			</div>
		</div>
		<!--选项卡-->
		<div class="box_back"></div>
		<div class="content">
			<div class="c_info">
			    <div class="c_top">
			 	    <div class="c_left"><img src="{{asset('img/banner.jpg')}}" width="215px" height="215px"></div>
			 	    <div class="c_right">
			 	    	<h1>@if($app->name_chn==''){{$app->name_eng}}@else{{$app->name_chn}} {{$app->name_eng}}@endif</h1>
			 	    	<p class="c_p1">{{$app->downloads}}次下载</p>
			 	    	<p class="c_p2">介绍游戏的主要功啊手机防盗</p>
			 	    	<p class="c_p3"><a target="_blank" href="{{route('download', ['id'=>$app->id])}}">免费下载</a></p>
			 	    </div>
			    </div>
			    <div class="c_main">
			    	<p class="c_m_p">截屏</p>
			    	<p class="c_m_p1">
			    		<img src="{{asset('img/banner.jpg')}}">
			    		<img src="{{asset('img/banner.jpg')}}">
			    	    <img src="{{asset('img/banner.jpg')}}">
			    		<img src="{{asset('img/banner.jpg')}}">
			    	</p>
			    </div>
			    <div id="wrapper" class="c_main1">
			    	<p class="c_m_p">截屏</p>
					<div class="swipe" id="wrapper">
    					<ul id="slider" class="c_main_ul">
        					<li><img src="{{asset('img/banner.jpg')}}"/></li>
        					<li><img src="{{asset('img/img_main_2.jpg')}}" /></li>
        					<li><img src="{{asset('img/img_main_1.jpg')}}" /></li>
        					<li><img src="{{asset('img/img_main_2.jpg')}}" /></li>
    					</ul>
    					<div id="pagenavi" style="display: none;"></div>
  					</div>
				</div>
			    <div class="last">
			    	<p>详情</p>
			    	<span>{{$app->description}} </span>
			    </div>
			</div>
		</div>
@endsection