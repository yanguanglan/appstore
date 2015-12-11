<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//首页
Route::get('/', ['as' => 'home', function () {
	$categories = App\AppCategory::all();
	$platform = 'android';
	$category = 'all';
	$apps = App\App::Paginate(15);

    return view('app')->with(compact('categories', 'apps', 'platform', 'category'));
}]);

//列表
Route::get('/platform/{platform}/category/{category}', ['as' => 'list',function ($platform, $category) {
	$categories = App\AppCategory::all();
	if($category == 'all'){
		$apps = App\App::where('platform', $platform)->Paginate(15);
	}else{
		$apps = App\App::where('platform', $platform)->where('cid', $category)->Paginate(15);
	}
    return view('app')->with(compact('categories', 'apps', 'platform', 'category'));
}]);

//详情页面
Route::get('/detail/{id}', ['as' => 'detail', function ($id) {
    $app = App\App::findOrFail($id);
    return view('detail')->with(compact('app'));
}]);

//搜索列表
Route::get('/search/{q}', ['as' => 'search', function ($q) {
	$category = 'all';
	$platform = 'android';
	$categories = App\AppCategory::all();
	$apps = App\App::where('name_chn', 'like', '%'.$q.'%')->orWhere('name_eng', 'like', '%'.$q.'%')->Paginate(15);
    return view('search')->with(compact('apps', 'categories', 'category', 'platform', 'q'));
}]);

//下载
Route::get('/download/{id}', ['as' => 'download', function ($id) {
	$app = App\App::findOrFail($id);
	$app->increment('downloads', 1);//下载加1
	$pathToFile = base_path() . '/public/' . $app->source;
	if(strpos($app->source, 'https')===false){
		return response()->download($pathToFile);
	}else{
		return redirect($app->source);
	}
}]);

