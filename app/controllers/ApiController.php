<?php
// +----------------------------------------------------------------------
// | API控制器
// +----------------------------------------------------------------------
// | Copyright (c) 2017--20xx年 捞月狗. All rights reserved.
// +----------------------------------------------------------------------
// | File:     api.php
// |
// | Author:   huzhichao@laoyuegou.com
// | Created:  2017-xx-xx
// +----------------------------------------------------------------------
use Phalcon\Translate\Adapter\NativeArray;
//use PHPExcel;

class ApiController extends BaseController 
{

	public function testAction( $id = 0 ) 
	{
        $return = $this->database->fetchAll("show tables;");
        $return1 = $this->database_1->fetchAll("select * from test_table;");
        print_R($return);print_R($return1);//die();
        $redis = $this->redis->incr("redis-test");
        echo "redis:".$redis;
        die();
        $yac = new \Yac();
        $key = 'key';
        $yac->set( $key, ['id' => 111111]);

        $ret = $yac->get($key);

        //echo "<pre>";print_r( $yac->info() );exit;

        return $this->success(["ret" => $ret]);
    }

}
