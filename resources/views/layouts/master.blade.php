<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <title>@yield('title')</title>
    	@section('assets')
        <link href="{{asset('css/reset.css')}}" rel="stylesheet">	
        <!--轮播图-->
		<script type="text/javascript" src="{{asset('js/zepto.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/banner.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/touchslider.dev.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/fastclick.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/search.js')}}"></script>
        @show
	</head>
	@yield('content')
	    <div class="footer">&copy;2015杭州唯见科技有限公司版权所有</div>
	</body>
</html>