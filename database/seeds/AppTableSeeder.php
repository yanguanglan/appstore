<?php

use Illuminate\Database\Seeder;
use App\App;

class AppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cid = [
            '社交·娱乐'=>1,
            '射击·竞速'=>2,
            '冒险·益智'=>3,
            '场景·体验'=>4,
            '其他'=>5,
        ];
/*        //3个平台
        $platforms = [
        	'android', 'ios', 'oculus'
        ];
        foreach ($platforms as $platform) {
        	for($i =1; $i<=5; $i++){
        		for($j=1; $j<=20; $j++){
        			App::create([
        				'ids' => uniqid(),
        				'name_chn' => '星际战争',
        				'name_eng' => 'Insectizide Wars VR',
        				'description' => '《星际战争》是一款ios虚拟现实格斗射击游戏。一个巨大的不明飞行物接近太阳系，并且飞快的像地球靠近，地球为了避免比撞击到，所以做出了相应的对策，当发现这个不明飞行并不是自然现象的时候，地球人类派出了宇宙飞船，进行保卫地球计划。喜欢星际题材的玩家快快下载体验吧！',
        				'platform' => $platform,
        				'operation' => 'head',
        				'cid' => $i,
        			]);
        		}
        	}
        }*/

        //1
        $file = file_get_contents('http://101.69.251.189:2183/android.json');
        $c = json_decode($file, true);
        foreach ($c as $v) {
            //$type = str_replace('.', '', $v['type']);
            if($v['name'] == $v['nameE']){
                $v['name'] = '';
            }
            App::create([
                'ids' => $v['id'],
                'name_chn' => $v['name'],
                'name_eng' => $v['nameE'],
                'thumb' => $v['img'],
                'description' => $v['info'],
                'platform' => 'android',
                'operation' => 'head',
                'source' => $v['src'],
                'cid' => isset($cid[$v['type']])? $cid[$v['type']]:5,
            ]);
        }
        //2
        $file = file_get_contents('http://101.69.251.189:2183/android.json');
        $c = json_decode($file, true);
         foreach ($c as $v) {
            //$type = str_replace('.', '', $v['type']);
            if($v['name'] == $v['nameE']){
                $v['name'] = '';
            }
            if(isset($v['src'])){
            App::create([
                'ids' => $v['id'],
                'name_chn' => $v['name'],
                'name_eng' => $v['nameE'],
                'thumb' => $v['img'],
                'description' => $v['info'],
                'platform' => 'ios',
                'operation' => 'head',
                'source' => $v['src'],
             'cid' => isset($cid[$v['type']])? $cid[$v['type']]:5,
            ]);
            }
        }

        //3

        $file = file_get_contents('http://101.69.251.189:2183/android.json');
        $c = json_decode($file, true);
        foreach ($c as $v) {
            //$type = str_replace('.', '', $v['type']);
            if($v['name'] == $v['nameE']){
                $v['name'] = '';
            }
            App::create([
                'ids' => $v['id'],
                'name_chn' => $v['name'],
                'name_eng' => $v['nameE'],
                'thumb' => $v['img'],
                'description' => $v['info'],
                'platform' => 'oculus',
                'operation' => 'head',
                'source' => $v['src'],
                 'cid' => isset($cid[$v['type']])? $cid[$v['type']]:5,
            ]);
        }
    }
}