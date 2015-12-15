//搜索框跳转
$(function(){
	var $searchText=$("#search_text");
	var $searchBtn=$("#search_btn");
	$searchBtn.click(function(){
		enterkey();
	});
	var $searchText=$('#search_text');
	$searchText.focus(function(){
		if($(this).val()==this.defaultValue){
			$(this).val('');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).val(this.defaultValue);
		}
	}).keyup(function(e){
		if(e.which==13){
			enterkey();
		}
	})
	function enterkey(){
		
		if($searchText.val()==""){
			return false;
		}
		else if($searchText.val()=="请输入关键搜索")
		{
			return false;
		}
		else{
			window.location.href="/search/"+$searchText.val();
			$searchText.val("");
		}
	}
})