<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,height=device-height, user-scalable=no,initial-scale=1, minimum-scale=1, maximum-scale=1">
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
		<script>
			$(document).ready(function(e) {
    		$(window).scroll(function(){
				var p=$(this).scrollTop(); //获得滚进距离
				$("#pcnav").offset({"left":0,"top":p});
			})
			t=$('#pcnav').offset().top;//获取原来高度
			$(window).scroll(function(){
				s=$(document).scrollTop();
				if(s>t){
					$('#pcnav').css('position','fixed');
					$('#pcnav').css('top','0px');
					$('.navbar_search1').css('display','none')
					}else{
						$('#pcnav').css('top','0px');
						$('.navbar_search1').css('display','block');
					}
				})
			});

			$(document).ready(function() {
                $('.inp').focus(function(){
					$('.search_inp').css("width","70%");
					$('.h_r_2').css("display","block");
					
					})
            });
		</script>
        @show
	</head>
	@yield('content')
	    <div class="footer">&copy;2015杭州唯见科技有限公司版权所有</div>
	</body>
</html>